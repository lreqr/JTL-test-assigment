<?php

declare(strict_types=1);

namespace Plugin\jtl_test;

use JTL\Alert\Alert;
use JTL\Catalog\Category\Kategorie;
use JTL\Catalog\Product\Artikel;
use JTL\Consent\Item;
use JTL\Events\Dispatcher;
use JTL\Events\Event;
use JTL\Helpers\Form;
use JTL\Helpers\Request;
use JTL\Link\LinkInterface;
use JTL\Plugin\Bootstrapper;
use JTL\Router\Router;
use JTL\Shop;
use JTL\Shopsetting;
use JTL\Smarty\JTLSmarty;
use Laminas\Diactoros\ServerRequestFactory;
use Plugin\jtl_test\Models\ModelFoo;
use Plugin\jtl_test\Smarty\Registrator;

use function Functional\first;

/**
 * Class Bootstrap
 * @package Plugin\jtl_test
 */
class Bootstrap extends Bootstrapper
{
    /**
     * @var TestHelper|null
     */
    private ?TestHelper $helper = null;

    private const TEST_CRON_JOB = 'jtl_test_cron';

    private const CONSENT_ITEM_ID = 'jtl_test_consent';

    /**
     * @inheritdoc
     */
    public function boot(Dispatcher $dispatcher): void
    {
        parent::boot($dispatcher);
        $dispatcher->listen(Event::MAP_CRONJOB_TYPE, static function (array &$args) {
            if ($args['type'] === self::TEST_CRON_JOB) {
                $args['mapping'] = TestCronJob::class;
            }
        });
        if (Shop::isFrontend() === false) {
            return;
        }
        $plugin       = $this->getPlugin();
        $this->helper = new TestHelper($plugin, $this->getDB(), $this->getCache());
        $dispatcher->listen('shop.hook.' . \HOOK_LETZTERINCLUDE_CSS_JS, static function () {
            // set some value to registry
            Shop::set('jtl_test_foo', 42);
        });
        $dispatcher->listen('shop.hook.' . \HOOK_LETZTERINCLUDE_INC, function () use ($plugin) {
            $logger = \method_exists($plugin, 'getLogger') // added in JTL-Shop 5.2.0
                ? $plugin->getLogger()
                : Shop::Container()->getLogService();
            if ($plugin->getConfig()->getValue('jtl_test_add_consent_item') === 'Y') {
                $state = Shop::Container()->getConsentManager()->hasConsent(self::CONSENT_ITEM_ID);
                if ($state === true) {
                    // plugin has consent - do something
                    $logger->info('Plugin {plgn} has consent!', ['plgn' => $plugin->getPluginID()]);
                }
            }
            if (Shop::has('jtl_test_foo') && $plugin->getConfig()->getValue('jtl_test_debug') === 'Y') {
                Shop::dbg(Shop::get('jtl_test_foo'), false, 'fooBar from registry:');
            }
            if (Shop::getPageType() === \PAGE_ARTIKEL) {
                $model = ModelFoo::load(['id' => 1], $this->getDB());
                if ($plugin->getConfig()->getValue('jtl_test_debug') === 'Y') {
                    Shop::dbg($model->getFoo(), false, 'Got foo value from DB:'); // quick & dirty debugging
                }
            }
        }, 10); // custom priority of "10" - lower than default
        if ($plugin->getConfig()->getValue('modify_products') === 'Y') {
            $dispatcher->listen(
                'shop.hook.' . \HOOK_ARTIKEL_CLASS_FUELLEARTIKEL,
                function (array &$args) use ($plugin) {
                    if ($args['cached'] === false) {
                        $this->modifyProduct($args['oArtikel']);
                        $args['cacheTags'][] = $plugin->getCache()->getGroup();
                    }
                },
                1
            ); // custom priority of "1" - higher than default
        }
        if ($plugin->getConfig()->getValue('modify_categories') === 'Y') {
            $dispatcher->listen('shop.hook.' . \HOOK_KATEGORIE_CLASS_LOADFROMDB, function (array &$args) use ($plugin) {
                if ($args['cached'] === false) {
                    $this->modifyCategory($args['oKategorie']);
                    $args['cacheTags'][] = $plugin->getCache()->getGroup();
                }
            });
        }
        if ($plugin->getConfig()->getValue('jtl_test_add_consent_item') === 'Y') {
            $dispatcher->listen('shop.hook.' . \CONSENT_MANAGER_GET_ACTIVE_ITEMS, [$this, 'addConsentItem']);
        }
        if (\defined('HOOK_ROUTER_PRE_DISPATCH')) {
            $dispatcher->listen('shop.hook.' . \HOOK_ROUTER_PRE_DISPATCH, function (array $args) {
                /** @var Router $router */
                $router     = $args['router'];
                $controller = new DemoController(
                    $this->getDB(),
                    $this->getCache(),
                    Shop::getState(),
                    Shopsetting::getInstance()->getAll(),
                    Shop::Container()->getAlertService()
                );
                $router->addRoute('/foolist[/{slug}]', [$controller, 'getResponse'], 'demoRoute');
            });
        }
        $dispatcher->listen('shop.hook.' . \HOOK_SMARTY_INC, function (array $args) {
            /** @var JTLSmarty $smarty */
            $smarty      = $args['smarty'] ?? Shop::Smarty();
            $registrator = new Registrator($smarty, $this->getPlugin());
            $registrator->registerModifier()
                ->registerPlugin()
                ->registerPhpFunctions()
                ->registerShopClasses();
        });
    }

    /**
     * @param array $args
     */
    public function addConsentItem(array $args): void
    {
        $lastID = $args['items']->reduce(static function ($result, Item $item) {
            $value = $item->getID();

            return $result === null || $value > $result ? $value : $result;
        }) ?? 0;
        $item   = new Item();
        $item->setName('JTL Example Consent');
        $item->setID(++$lastID);
        $item->setItemID(self::CONSENT_ITEM_ID);
        $item->setDescription('Dies ist nur ein Test aus dem Plugin JTL Test');
        $item->setPurpose('Dieser Eintrag dient nur zu Testzwecken');
        $item->setPrivacyPolicy('https://www.jtl-software.de/datenschutz');
        $item->setCompany('JTL-Software-GmbH');
        $args['items']->push($item);
    }

    private function addCron(): void
    {
        $job            = new \stdClass();
        $job->name      = 'Example cron';
        $job->jobType   = self::TEST_CRON_JOB;
        $job->frequency = 24;
        $job->startDate = 'NOW()';
        $job->startTime = '00:00:00';
        $this->getDB()->insert('tcron', $job);
    }

    /**
     * @param Kategorie $category
     */
    private function modifyCategory(Kategorie $category): void
    {
        if (\version_compare(\APPLICATION_VERSION, '5.2.0-alpha', '>=')) {
            $category->setDescription($this->helper->modify($category->getDescription()));
        } else {
            $category->cBeschreibung = $this->helper->modify($category->cBeschreibung);
        }
    }

    /**
     * @param Artikel $product
     */
    private function modifyProduct(Artikel $product): void
    {
        if ($product->kArtikel === null) {
            return;
        }
        $product->cName             = $this->helper->modify($product->cName);
        $product->cBeschreibung     = $this->helper->modify($product->cBeschreibung);
        $product->cKurzBeschreibung = $this->helper->modify($product->cKurzBeschreibung);
        $product->cKurzbezeichnung  = $this->helper->modify($product->cKurzbezeichnung);
    }

    /**
     * @inheritdoc
     */
    public function installed(): void
    {
        parent::installed();
        $this->addCron();
    }

    /**
     * @inheritdoc
     */
    public function updated($oldVersion, $newVersion): void
    {
    }

    /**
     * @inheritdoc
     */
    public function uninstalled(bool $deleteData = true): void
    {
        parent::uninstalled($deleteData);
        $this->getDB()->delete('tcron', 'jobType', self::TEST_CRON_JOB);
    }

    /**
     * @inheritdoc
     */
    public function prepareFrontend(LinkInterface $link, JTLSmarty $smarty): bool
    {
        parent::prepareFrontend($link, $smarty);
        if ($link->getTemplate() !== 'test_page_bootstrap.tpl') {
            return false;
        }
        $smarty->assign('jtl_test_var', 'Hello from ' . __METHOD__)
            ->assign('exampleConfigVars', $this->getPlugin()->getConfig());

        return true;
    }

    /**
     * @inheritdoc
     */
    public function renderAdminMenuTab(string $tabName, int $menuID, JTLSmarty $smarty): string
    {
        $plugin     = $this->getPlugin();
        $backendURL = \method_exists($plugin->getPaths(), 'getBackendURL')
            ? $plugin->getPaths()->getBackendURL()
            : Shop::getAdminURL() . '/plugin.php?kPlugin=' . $plugin->getID();

        $smarty->assign('menuID', $menuID)
            ->assign('posted', null);

        $template = 'testtab.tpl';
        if ($tabName === 'Models') {
            return $this->renderModelTab($menuID, $smarty);
        }
        if ($tabName === 'Ein Testtab') {
            $alert = Shop::Container()->getAlertService();
            if (Request::postInt('clear-cache') === 1) {
                if (Form::validateToken()) {
                    // we used the plugin's ID as an additional cache tag, so we can flush the whole group
                    $this->getCache()->flushTags($plugin->getCache()->getGroup());
                    $alert->addAlert(Alert::TYPE_SUCCESS, \__('Cache successfully flushed.'), 'succCacheFlush');
                } else {
                    $alert->addAlert(Alert::TYPE_ERROR, \__('CSRF error!'), 'failedCsrfCheck');
                }
            }
        } elseif ($tabName === 'Tab2') {
            $template = 'tab2.tpl';
            if (Form::validateToken() && ($posted = Request::postVar('tab2_input')) !== null) {
                $smarty->assign('posted', $posted);
            }
        }

        return $smarty->assign('backendURL', $backendURL)
            ->fetch($this->getPlugin()->getPaths()->getAdminPath() . '/templates/' . $template);
    }

    private function renderModelTab(int $menuID, JTLSmarty $smarty): string
    {
        $controller         = new ModelBackendController(
            $this->getDB(),
            $this->getCache(),
            Shop::Container()->getAlertService(),
            Shop::Container()->getAdminAccount(),
            Shop::Container()->getGetText()
        );
        $controller->menuID = $menuID;
        $controller->plugin = $this->getPlugin();
        $request            = ServerRequestFactory::fromGlobals($_SERVER, $_GET, $_POST, $_COOKIE, $_FILES);
        $response           = $controller->getResponse($request, [], $smarty);
        if (\count($response->getHeader('location')) > 0) {
            \header('Location:' . first($response->getHeader('location')));
            exit();
        }

        return (string)$response->getBody();
    }
}

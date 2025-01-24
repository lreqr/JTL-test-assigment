<?php

declare(strict_types=1);

namespace Plugin\landswitcher;

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
    public function boot(Dispatcher $dispatcher): void
    {
    }

    public function installed(): void
    {
        parent::installed();
    }


    public function updated($oldVersion, $newVersion): void
    {
    }

    public function uninstalled(bool $deleteData = true): void
    {
        parent::uninstalled($deleteData);
    }

    public function renderAdminMenuTab(string $tabName, int $menuID, JTLSmarty $smarty): string
    {
        $plugin     = $this->getPlugin();
        $backendURL = \method_exists($plugin->getPaths(), 'getBackendURL')
            ? $plugin->getPaths()->getBackendURL()
            : Shop::getAdminURL() . '/plugin.php?kPlugin=' . $plugin->getID();

        $smarty->assign('menuID', $menuID)
            ->assign('posted', null)
            ->assign('vlad', 'TEST');

        $template = 'tab2.tpl';
        if (Form::validateToken() && ($posted = Request::postVar('tab2_input')) !== null) {
            $smarty->assign('posted', $posted);
        }

        return $smarty->assign('backendURL', $backendURL)
            ->fetch($this->getPlugin()->getPaths()->getAdminPath() . '/templates/' . $template);
    }

}
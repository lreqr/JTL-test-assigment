<?php

declare(strict_types=1);

namespace Plugin\landswitcher;

use JTL\Helpers\Request;
use JTL\Plugin\PluginInterface;
use JTL\Router\Controller\Backend\GenericModelController;
use JTL\Shop;
use JTL\Smarty\JTLSmarty;
use Plugin\jtl_test\Models\ModelItem;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Plugin\landswitcher\Models\ModelLandswitcher;

/**
 * Class ModelBackendController
 * @package Plugin\jtl_test
 */
class ModelBackendController extends GenericModelController
{
    /**
     * @var int
     */
    public int $menuID = 0;

    /**
     * @var PluginInterface
     */
    public PluginInterface $plugin;

    /**
     * @inheritdoc
     */
    public function getResponse(ServerRequestInterface $request, array $args, JTLSmarty $smarty): ResponseInterface
    {
        $this->smarty = $smarty;
        $this->route  = \str_replace(Shop::getAdminURL(), '', $this->plugin->getPaths()->getBackendURL());
        $this->smarty->assign('route', $this->route);
        $this->modelClass    = ModelLandswitcher::class;
        $this->adminBaseFile = \ltrim($this->route, '/');
        $tab                 = Request::getVar('action', 'overview');
        if ($tab === 'overview') {
            $smarty->assign('models', ModelLandswitcher::loadAll($this->getDB(), [], []));

        } else {
            $item = ModelLandswitcher::loadByAttributes(['id' => Request::getInt('id')], $this->getDB());
            $smarty->assign('item', $item)
                ->assign('defaultTabbertab', $this->menuID);
        }
        $smarty->assign('step', $tab)
            ->assign('tab', $tab)
            ->assign('action', $this->plugin->getPaths()->getBackendURL());

        $response = $this->handle(__DIR__ . '/adminmenu/templates/models.tpl');
        if ($this->step === 'detail') {
            $smarty->assign('defaultTabbertab', $this->menuID);
        }

        return $response;
    }
}

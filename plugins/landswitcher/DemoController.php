<?php

declare(strict_types=1);

namespace Plugin\jtl_test;

use Illuminate\Support\Collection;
use JTL\Link\Link;
use JTL\Router\Controller\PageController;
use JTL\Shop;
use JTL\Smarty\JTLSmarty;
use Plugin\jtl_test\Models\ModelItem;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

/**
 * Class DemoController
 * @package Plugin\jtl_test
 */
class DemoController extends PageController
{
    /**
     * @inheritdoc
     */
    public function getResponse(ServerRequestInterface $request, array $args, JTLSmarty $smarty): ResponseInterface
    {
        $this->smarty = $smarty;
        Shop::setPageType(\PAGE_PLUGIN);
        $this->init();
        $this->preRender();
        $link = new Link($this->db);
        $link->setLinkType(\LINKTYP_PLUGIN);
        $model = null;
        if (!empty($args['slug'])) {
            $model = ModelItem::loadByAttributes(['slug' => $args['slug']], $this->db);
        }

        return $this->smarty->assign('Link', $link)
            ->assign('model', $model)
            ->assign('models', $this->getModels())
            ->assign('cPluginTemplate', __DIR__ . '/frontend/template/routed.tpl')
            ->getResponse('layout/index.tpl');
    }

    /**
     * @return Collection
     * @throws \Exception
     */
    private function getModels(): Collection
    {
        $router = Shop::getRouter();
        $locale = $this->getLocaleFromLanguageID(Shop::getLanguageID());
        return ModelItem::loadAll($this->db, [], [])->each(function ($model) use ($router, $locale) {
            $model->setUrl(
                $router->getURLByType(
                    'demoRoute',
                    ['slug' => $model->getSlug(), 'id' => $model->getId(), 'lang' => $locale],
                    true,
                    true
                )
            );

            return $model;
        });
    }
}

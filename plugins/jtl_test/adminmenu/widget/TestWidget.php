<?php

declare(strict_types=1);

namespace Plugin\jtl_test;

use JTL\Widgets\AbstractWidget;

/**
 * Class TestWidget
 * @package Plugin\jtl_test
 */
class TestWidget extends AbstractWidget
{
    /**
     * @inheritDoc
     */
    public function init()
    {
        parent::init();
        $this->oSmarty->assign('foo', 'FoohoooooooNEW!');
    }

    /**
     * @inheritDoc
     */
    public function getContent()
    {
        return $this->oSmarty->fetch(__DIR__ . '/examplewidgettemplate.tpl');
    }
}

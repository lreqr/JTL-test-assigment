<?php

declare(strict_types=1);

namespace Plugin\jtl_test\Smarty;

use JTL\Alert\Alert;
use JTL\Plugin\PluginInterface;
use JTL\Smarty\JTLSmarty;
use Smarty;
use SmartyException;

class Registrator
{
    public function __construct(private readonly JTLSmarty $smarty, private readonly PluginInterface $plugin)
    {
    }

    /**
     * registers the smarty modifier {$text|addFoo}
     * @throws SmartyException
     */
    public function registerModifier(): self
    {
        $this->smarty->registerPlugin(Smarty::PLUGIN_MODIFIER, 'addFoo', [$this, 'addFoo']);

        return $this;
    }

    /**
     * registers the smarty block {jtlTestBlock}content{/jtlTestBlock}
     * @throws SmartyException
     */
    public function registerPlugin(): self
    {
        $this->smarty->registerPlugin(Smarty::PLUGIN_BLOCK, 'jtlTestBlock', [$this, 'jtlTestBlock']);

        return $this;
    }

    /**
     * Shop 5.4.0+ uses smarty 4.5.X, which requires php functions to be explicitly registered
     * the php function "get_html_translation_table" is not registered by default
     */
    public function registerPhpFunctions(): self
    {
        if (\version_compare(Smarty::SMARTY_VERSION, '4.5', '<')) {
            return $this;
        }
        try {
            // try to register it - but try/catch since it may be registered by another plugin
            $this->smarty->registerPlugin(
                Smarty::PLUGIN_MODIFIER,
                'get_html_translation_table',
                '\get_html_translation_table'
            );
        } catch (SmartyException) {
            // probably already registered
        }

        return $this;
    }

    /**
     * Shop 5.4.0+ uses smarty 4.5.X, which requires classes to be explicitly registered
     * the shop class "JTL\Shop\Alert" is not registered by default
     */
    public function registerShopClasses(): self
    {
        if (\version_compare(Smarty::SMARTY_VERSION, '4.5', '<')) {
            return $this;
        }
        $this->smarty->registerClass(Alert::class, Alert::class);

        return $this;
    }

    public function addFoo(string $text): string
    {
        return $text . $this->plugin->getConfig()->getValue('modification_text');
    }

    public function jtlTestBlock(array $params, ?string $content): string
    {
        if ($content === null || empty(\trim($content))) {
            return '';
        }
        $class = 'jtl-test-block';
        if (isset($params['class'])) {
            $class .= ' ' . $params['class'];
        }

        return '<div class="' . $class . '"><i>JTL Test Block with content ' . $content . '</i></div>';
    }
}

<?php

/** @global \JTL\Smarty\JTLSmarty $smarty */

/** @global JTL\Plugin\PluginInterface $plugin */

declare(strict_types=1);

$smarty->assign('jtl_test_var', 'Hallo Welt!')
    ->assign('exampleConfigVars', $plugin->getConfig());

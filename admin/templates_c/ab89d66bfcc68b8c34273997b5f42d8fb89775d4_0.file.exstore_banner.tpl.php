<?php
/* Smarty version 4.3.1, created on 2025-01-22 14:57:28
  from 'C:\OSPanel\domains\JTL_shop\admin\templates\bootstrap\tpl_inc\exstore_banner.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6790f948308807_69816978',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab89d66bfcc68b8c34273997b5f42d8fb89775d4' => 
    array (
      0 => 'C:\\OSPanel\\domains\\JTL_shop\\admin\\templates\\bootstrap\\tpl_inc\\exstore_banner.tpl',
      1 => 1694613029,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6790f948308807_69816978 (Smarty_Internal_Template $_smarty_tpl) {
if ((($tmp = $_smarty_tpl->tpl_vars['useExstoreWidgetBanner']->value ?? null)===null||$tmp==='' ? false : $tmp) === true) {?>
    <a href="<?php echo __('extensionStoreURL');?>
" target="_blank">
        <img src="gfx/exstore-banner-dashboard-<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
.jpg"
             alt="Extensions entdecken!" class="exstore-banner">
    </a>
<?php } else { ?>
    <a href="<?php echo __('extensionStoreURL');?>
" target="_blank">
        <picture>
            <source media="(min-width: 768px)" srcset="gfx/exstore-banner-<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
.jpg">
            <img src="gfx/exstore-banner-mobile-<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
.jpg" alt="Extensions entdecken!" class="exstore-banner">
        </picture>
    </a>
<?php }
}
}

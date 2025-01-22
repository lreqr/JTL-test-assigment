<?php
/* Smarty version 4.3.1, created on 2025-01-22 14:57:25
  from 'C:\OSPanel\domains\JTL_shop\admin\templates\bootstrap\pluginverwaltung.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6790f945487795_80145588',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd4767f74f7f2a2500f8d0f2ab8506a334703fad' => 
    array (
      0 => 'C:\\OSPanel\\domains\\JTL_shop\\admin\\templates\\bootstrap\\pluginverwaltung.tpl',
      1 => 1694613029,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl_inc/header.tpl' => 1,
    'file:tpl_inc/pluginverwaltung_uebersicht.tpl' => 1,
    'file:tpl_inc/pluginverwaltung_sprachvariablen.tpl' => 1,
    'file:tpl_inc/pluginverwaltung_lizenzkey.tpl' => 1,
    'file:tpl_inc/footer.tpl' => 1,
  ),
),false)) {
function content_6790f945487795_80145588 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:tpl_inc/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
if ($_smarty_tpl->tpl_vars['pluginNotFound']->value === true) {?>
<div class="alert alert-danger"><?php echo __('pluginNotFound');?>
</div>
<?php } else { ?>
    <?php if ($_smarty_tpl->tpl_vars['step']->value === 'pluginverwaltung_uebersicht') {?>
        <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/pluginverwaltung_uebersicht.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['step']->value === 'pluginverwaltung_sprachvariablen') {?>
        <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/pluginverwaltung_sprachvariablen.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['step']->value === 'pluginverwaltung_lizenzkey') {?>
        <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/pluginverwaltung_lizenzkey.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }
}
$_smarty_tpl->_subTemplateRender('file:tpl_inc/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

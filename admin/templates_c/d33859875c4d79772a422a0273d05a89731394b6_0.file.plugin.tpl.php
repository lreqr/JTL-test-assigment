<?php
/* Smarty version 4.3.1, created on 2025-01-22 17:03:48
  from 'C:\OSPanel\domains\JTL_shop\admin\templates\bootstrap\plugin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_679116e49d3f27_13455374',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd33859875c4d79772a422a0273d05a89731394b6' => 
    array (
      0 => 'C:\\OSPanel\\domains\\JTL_shop\\admin\\templates\\bootstrap\\plugin.tpl',
      1 => 1694613029,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl_inc/header.tpl' => 1,
    'file:tpl_inc/plugin_uebersicht.tpl' => 1,
    'file:tpl_inc/footer.tpl' => 1,
  ),
),false)) {
function content_679116e49d3f27_13455374 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:tpl_inc/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
if ($_smarty_tpl->tpl_vars['pluginNotFound']->value === true) {?>
    <div class="alert alert-danger"><?php echo __('pluginNotFound');?>
</div>
<?php } elseif ($_smarty_tpl->tpl_vars['step']->value === 'plugin_uebersicht') {?>
    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/plugin_uebersicht.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
$_smarty_tpl->_subTemplateRender('file:tpl_inc/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

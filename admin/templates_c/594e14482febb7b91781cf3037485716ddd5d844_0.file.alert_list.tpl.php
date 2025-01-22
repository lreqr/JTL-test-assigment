<?php
/* Smarty version 4.3.1, created on 2025-01-22 14:56:47
  from 'C:\OSPanel\domains\JTL_shop\admin\templates\bootstrap\snippets\alert_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6790f91fecfda1_14081416',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '594e14482febb7b91781cf3037485716ddd5d844' => 
    array (
      0 => 'C:\\OSPanel\\domains\\JTL_shop\\admin\\templates\\bootstrap\\snippets\\alert_list.tpl',
      1 => 1694613029,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6790f91fecfda1_14081416 (Smarty_Internal_Template $_smarty_tpl) {
if (!empty($_smarty_tpl->tpl_vars['alertList']->value->getAlertlist())) {?>
    <div id="alert-list">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['alertList']->value->getAlertlist(), 'alert');
$_smarty_tpl->tpl_vars['alert']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['alert']->value) {
$_smarty_tpl->tpl_vars['alert']->do_else = false;
?>
            <?php if ($_smarty_tpl->tpl_vars['alert']->value->getShowInAlertListTemplate()) {?>
                <?php echo $_smarty_tpl->tpl_vars['alert']->value->display();?>

            <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
<?php }
}
}

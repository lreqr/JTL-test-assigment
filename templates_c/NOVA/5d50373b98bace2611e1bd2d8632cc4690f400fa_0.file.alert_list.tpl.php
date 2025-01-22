<?php
/* Smarty version 4.3.1, created on 2025-01-22 14:58:18
  from 'C:\OSPanel\domains\JTL_shop\templates\NOVA\snippets\alert_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6790f97ad9e537_70961573',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d50373b98bace2611e1bd2d8632cc4690f400fa' => 
    array (
      0 => 'C:\\OSPanel\\domains\\JTL_shop\\templates\\NOVA\\snippets\\alert_list.tpl',
      1 => 1694613031,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6790f97ad9e537_70961573 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14831066176790f97ad98143_03785523', 'snippets-alert-list');
?>

<?php }
/* {block 'snippets-alert-list'} */
class Block_14831066176790f97ad98143_03785523 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'snippets-alert-list' => 
  array (
    0 => 'Block_14831066176790f97ad98143_03785523',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if (count($_smarty_tpl->tpl_vars['alertList']->value->getAlertlist()) > 0) {?>
        <div id="alert-list" class="<?php if ((($tmp = $_smarty_tpl->tpl_vars['container']->value ?? null)===null||$tmp==='' ? true : $tmp)) {?>container <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['theme']['left_sidebar'] === 'Y' && $_smarty_tpl->tpl_vars['boxesLeftActive']->value) {?>container-plus-sidebar<?php }
}?>">
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
/* {/block 'snippets-alert-list'} */
}

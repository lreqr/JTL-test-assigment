<?php
/* Smarty version 4.3.1, created on 2025-01-22 14:58:03
  from 'C:\OSPanel\domains\JTL_shop\includes\vendor\jtlshop\scc\src\scc\templates\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6790f96b61c9a8_67492997',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f674534c6c71e86592e606012512c466b7d8843' => 
    array (
      0 => 'C:\\OSPanel\\domains\\JTL_shop\\includes\\vendor\\jtlshop\\scc\\src\\scc\\templates\\form.tpl',
      1 => 1669365122,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6790f96b61c9a8_67492997 (Smarty_Internal_Template $_smarty_tpl) {
?><form
    class="<?php echo $_smarty_tpl->tpl_vars['params']->value['class']->getValue();
if ($_smarty_tpl->tpl_vars['params']->value['inline']->getValue() === true) {?> form-inline<?php }
if ($_smarty_tpl->tpl_vars['params']->value['slide']->getValue() === true) {?> label-slide<?php }?>"
    target="<?php echo $_smarty_tpl->tpl_vars['params']->value['target']->getValue();?>
"
    <?php if ($_smarty_tpl->tpl_vars['params']->value['novalidate']->getValue() === true) {?>novalidate="novalidate"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['id']->hasValue()) {?>id="<?php echo $_smarty_tpl->tpl_vars['params']->value['id']->getValue();?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['action']->hasValue()) {?>action="<?php echo $_smarty_tpl->tpl_vars['params']->value['action']->getValue();?>
"<?php }?>
    method="<?php echo $_smarty_tpl->tpl_vars['params']->value['method']->getValue();?>
"
    <?php if ($_smarty_tpl->tpl_vars['params']->value['enctype']->hasValue() && strtoupper($_smarty_tpl->tpl_vars['params']->value['method']->getValue()) === 'POST') {?>enctype="<?php echo $_smarty_tpl->tpl_vars['params']->value['enctype']->getValue();?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['style']->hasValue()) {?>style="<?php echo $_smarty_tpl->tpl_vars['params']->value['style']->getValue();?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['itemprop']->hasValue()) {?>itemprop="<?php echo $_smarty_tpl->tpl_vars['params']->value['itemprop']->getValue();?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['itemscope']->getValue() === true) {?>itemscope <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['itemtype']->hasValue()) {?>itemtype="<?php echo $_smarty_tpl->tpl_vars['params']->value['itemtype']->getValue();?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['itemid']->hasValue()) {?>itemid="<?php echo $_smarty_tpl->tpl_vars['params']->value['itemid']->getValue();?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['role']->hasValue()) {?>role="<?php echo $_smarty_tpl->tpl_vars['params']->value['role']->getValue();?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['title']->hasValue()) {?> title="<?php echo $_smarty_tpl->tpl_vars['params']->value['title']->getValue();?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['aria']->hasValue()) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['params']->value['aria']->getValue(), 'ariaVal', false, 'ariaKey');
$_smarty_tpl->tpl_vars['ariaVal']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ariaKey']->value => $_smarty_tpl->tpl_vars['ariaVal']->value) {
$_smarty_tpl->tpl_vars['ariaVal']->do_else = false;
?>aria-<?php echo $_smarty_tpl->tpl_vars['ariaKey']->value;?>
="<?php echo $_smarty_tpl->tpl_vars['ariaVal']->value;?>
" <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['data']->hasValue()) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['params']->value['data']->getValue(), 'dataVal', false, 'dataKey');
$_smarty_tpl->tpl_vars['dataVal']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['dataKey']->value => $_smarty_tpl->tpl_vars['dataVal']->value) {
$_smarty_tpl->tpl_vars['dataVal']->do_else = false;
?>data-<?php echo $_smarty_tpl->tpl_vars['dataKey']->value;?>
="<?php echo $_smarty_tpl->tpl_vars['dataVal']->value;?>
" <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['attribs']->hasValue()) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['params']->value['attribs']->getValue(), 'val', false, 'key');
$_smarty_tpl->tpl_vars['val']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->do_else = false;
?> <?php echo $_smarty_tpl->tpl_vars['key']->value;?>
="<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
" <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }?>
>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['addtoken']->getValue()) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf_token'][0], array( array(),$_smarty_tpl ) );
}?>
    <?php echo $_smarty_tpl->tpl_vars['blockContent']->value;?>

</form>
<?php }
}

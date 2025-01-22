<?php
/* Smarty version 4.3.1, created on 2025-01-22 14:57:58
  from 'C:\OSPanel\domains\JTL_shop\includes\vendor\jtlshop\scc\src\scc\templates\image.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6790f966a148e0_91717545',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '01772459e0f3fbb3179d6cc5c3360dd457e9141e' => 
    array (
      0 => 'C:\\OSPanel\\domains\\JTL_shop\\includes\\vendor\\jtlshop\\scc\\src\\scc\\templates\\image.tpl',
      1 => 1669365122,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6790f966a148e0_91717545 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OSPanel\\domains\\JTL_shop\\includes\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.regex_replace.php','function'=>'smarty_modifier_regex_replace',),));
$_smarty_tpl->_assignInScope('rounded', '');
$_smarty_tpl->_assignInScope('useWebP', $_smarty_tpl->tpl_vars['params']->value['webp']->getValue() === true && \JTL\Media\Image::hasWebPSupport());
if ($_smarty_tpl->tpl_vars['params']->value['rounded']->getValue() !== false) {?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['rounded']->getValue() === true) {?>
        <?php $_smarty_tpl->_assignInScope('rounded', ' rounded');?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('rounded', (' rounded-').($_smarty_tpl->tpl_vars['params']->value['rounded']->getValue()));?>
    <?php }
}?>

<?php if ($_smarty_tpl->tpl_vars['params']->value['src']->hasValue() && strpos($_smarty_tpl->tpl_vars['params']->value['src']->getValue(),'keinBild.gif') !== false) {?>
<img class="<?php echo $_smarty_tpl->tpl_vars['params']->value['class']->getValue();?>
 <?php echo $_smarty_tpl->tpl_vars['rounded']->value;?>
 img-fluid<?php if ($_smarty_tpl->tpl_vars['params']->value['fluid-grow']->getValue() === true) {?> w-100<?php }?>"
     height="<?php if ($_smarty_tpl->tpl_vars['params']->value['height']->hasValue() && !empty($_smarty_tpl->tpl_vars['params']->value['height']->getValue())) {
echo $_smarty_tpl->tpl_vars['params']->value['height']->getValue();
} else { ?>130<?php }?>"
     width="<?php if ($_smarty_tpl->tpl_vars['params']->value['width']->hasValue() && !empty($_smarty_tpl->tpl_vars['params']->value['width']->getValue())) {
echo $_smarty_tpl->tpl_vars['params']->value['width']->getValue();
} else { ?>130<?php }?>"
     <?php if ($_smarty_tpl->tpl_vars['params']->value['alt']->hasValue()) {?>alt="<?php echo $_smarty_tpl->tpl_vars['params']->value['alt']->getValue();?>
"<?php }?>
     src="<?php echo $_smarty_tpl->tpl_vars['params']->value['src']->getValue();?>
">
<?php } else { ?>
    <?php if ($_smarty_tpl->tpl_vars['useWebP']->value) {?>
    <picture>
        <source
            <?php if ($_smarty_tpl->tpl_vars['params']->value['srcset']->hasValue()) {?>
                srcset="<?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['params']->value['srcset']->getValue(),"/\.(?i)(jpg|jpeg|png)/",".webp");?>
"
            <?php } elseif ($_smarty_tpl->tpl_vars['params']->value['src']->hasValue()) {?>
                srcset="<?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['params']->value['src']->getValue(),"/\.(?i)(jpg|png)/",".webp");?>
"
            <?php } else { ?>
                srcset=""
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['params']->value['sizes']->hasValue()) {?>sizes="<?php echo $_smarty_tpl->tpl_vars['params']->value['sizes']->getValue();?>
"<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['params']->value['width']->hasValue() && !empty($_smarty_tpl->tpl_vars['params']->value['width']->getValue())) {?>width="<?php echo $_smarty_tpl->tpl_vars['params']->value['width']->getValue();?>
"<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['params']->value['height']->hasValue() && !empty($_smarty_tpl->tpl_vars['params']->value['height']->getValue())) {?>height="<?php echo $_smarty_tpl->tpl_vars['params']->value['height']->getValue();?>
"<?php }?>
            type="image/webp">
    <?php }?>
        <img
            src="<?php echo $_smarty_tpl->tpl_vars['params']->value['src']->getValue();?>
"
            <?php if ($_smarty_tpl->tpl_vars['params']->value['srcset']->hasValue()) {?>srcset="<?php echo $_smarty_tpl->tpl_vars['params']->value['srcset']->getValue();?>
"<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['params']->value['sizes']->hasValue()) {?>sizes="<?php echo $_smarty_tpl->tpl_vars['params']->value['sizes']->getValue();?>
"<?php }?>
            class="<?php echo $_smarty_tpl->tpl_vars['params']->value['class']->getValue();
echo $_smarty_tpl->tpl_vars['rounded']->value;
if ($_smarty_tpl->tpl_vars['params']->value['fluid']->getValue() === true) {?> img-fluid<?php }
if ($_smarty_tpl->tpl_vars['params']->value['fluid-grow']->getValue() === true) {?> img-fluid w-100<?php }
if ($_smarty_tpl->tpl_vars['params']->value['thumbnail']->getValue() === true) {?> img-thumbnail<?php }
if ($_smarty_tpl->tpl_vars['params']->value['left']->getValue() === true) {?> float-left<?php }
if ($_smarty_tpl->tpl_vars['params']->value['right']->getValue() === true) {?> float-right<?php }
if ($_smarty_tpl->tpl_vars['params']->value['center']->getValue() === true) {?> mx-auto d-block<?php }?>"
            <?php if ($_smarty_tpl->tpl_vars['params']->value['lazy']->getValue() === true) {?>loading="lazy"<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['params']->value['id']->hasValue()) {?>id="<?php echo $_smarty_tpl->tpl_vars['params']->value['id']->getValue();?>
"<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['params']->value['title']->hasValue()) {?>title="<?php echo $_smarty_tpl->tpl_vars['params']->value['title']->getValue();?>
"<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['params']->value['alt']->hasValue()) {?>alt="<?php echo $_smarty_tpl->tpl_vars['params']->value['alt']->getValue();?>
"<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['params']->value['width']->hasValue() && !empty($_smarty_tpl->tpl_vars['params']->value['width']->getValue())) {?>width="<?php echo $_smarty_tpl->tpl_vars['params']->value['width']->getValue();?>
"<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['params']->value['height']->hasValue() && !empty($_smarty_tpl->tpl_vars['params']->value['height']->getValue())) {?>height="<?php echo $_smarty_tpl->tpl_vars['params']->value['height']->getValue();?>
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
            <?php if ($_smarty_tpl->tpl_vars['params']->value['aria']->hasValue()) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['params']->value['aria']->getValue(), 'ariaVal', false, 'ariaKey');
$_smarty_tpl->tpl_vars['ariaVal']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ariaKey']->value => $_smarty_tpl->tpl_vars['ariaVal']->value) {
$_smarty_tpl->tpl_vars['ariaVal']->do_else = false;
?> aria-<?php echo $_smarty_tpl->tpl_vars['ariaKey']->value;?>
="<?php echo $_smarty_tpl->tpl_vars['ariaVal']->value;?>
" <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['params']->value['data']->hasValue()) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['params']->value['data']->getValue(), 'dataVal', false, 'dataKey');
$_smarty_tpl->tpl_vars['dataVal']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['dataKey']->value => $_smarty_tpl->tpl_vars['dataVal']->value) {
$_smarty_tpl->tpl_vars['dataVal']->do_else = false;
?> data-<?php echo $_smarty_tpl->tpl_vars['dataKey']->value;?>
="<?php echo $_smarty_tpl->tpl_vars['dataVal']->value;?>
" <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
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
    <?php if ($_smarty_tpl->tpl_vars['useWebP']->value) {?>
    </picture>
    <?php }
}
}
}

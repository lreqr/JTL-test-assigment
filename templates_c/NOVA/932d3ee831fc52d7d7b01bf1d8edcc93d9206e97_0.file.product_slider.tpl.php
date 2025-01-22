<?php
/* Smarty version 4.3.1, created on 2025-01-22 14:58:20
  from 'C:\OSPanel\domains\JTL_shop\templates\NOVA\snippets\product_slider.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6790f97cbf42e2_72630433',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '932d3ee831fc52d7d7b01bf1d8edcc93d9206e97' => 
    array (
      0 => 'C:\\OSPanel\\domains\\JTL_shop\\templates\\NOVA\\snippets\\product_slider.tpl',
      1 => 1694613031,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:snippets/slider_items.tpl' => 2,
  ),
),false)) {
function content_6790f97cbf42e2_72630433 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13615683686790f97cbdfa20_53003429', 'snippets-product-slider');
?>

<?php }
/* {block 'snippets-product-slider-box-title'} */
class Block_20608553536790f97cbe5813_28344653 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="productlist-filter-headline"><?php echo $_smarty_tpl->tpl_vars['title']->value;
if (!empty($_smarty_tpl->tpl_vars['moreLink']->value)) {
$_block_plugin152 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin152, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('class'=>"more float-right",'href'=>$_smarty_tpl->tpl_vars['moreLink']->value,'title'=>$_smarty_tpl->tpl_vars['moreTitle']->value,'data-toggle'=>"tooltip",'data'=>array("placement"=>"auto right"),'aria'=>array("label"=>((string)$_smarty_tpl->tpl_vars['moreTitle']->value))));
$_block_repeat=true;
echo $_block_plugin152->render(array('class'=>"more float-right",'href'=>$_smarty_tpl->tpl_vars['moreLink']->value,'title'=>$_smarty_tpl->tpl_vars['moreTitle']->value,'data-toggle'=>"tooltip",'data'=>array("placement"=>"auto right"),'aria'=>array("label"=>((string)$_smarty_tpl->tpl_vars['moreTitle']->value))), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><i class="fa fa-arrow-circle-right"></i><?php $_block_repeat=false;
echo $_block_plugin152->render(array('class'=>"more float-right",'href'=>$_smarty_tpl->tpl_vars['moreLink']->value,'title'=>$_smarty_tpl->tpl_vars['moreTitle']->value,'data-toggle'=>"tooltip",'data'=>array("placement"=>"auto right"),'aria'=>array("label"=>((string)$_smarty_tpl->tpl_vars['moreTitle']->value))), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}?></div><?php
}
}
/* {/block 'snippets-product-slider-box-title'} */
/* {block 'product-box-slider-class'} */
class Block_14392064086790f97cbe8d63_32958708 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
box-slider<?php
}
}
/* {/block 'product-box-slider-class'} */
/* {block 'snippets-product-slider-box-products'} */
class Block_15391208536790f97cbe8141_22182022 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OSPanel\\domains\\JTL_shop\\includes\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>
<div class="slick-slider-mb slick-smooth-loading carousel carousel-arrows-inside slick-lazy slick-type-box <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['productlist']->value) < 3) {?>slider-no-preview<?php }?>"data-slick-type="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14392064086790f97cbe8d63_32958708', 'product-box-slider-class', $this->tplIndex);
?>
"><?php $_smarty_tpl->_subTemplateRender('file:snippets/slider_items.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('items'=>$_smarty_tpl->tpl_vars['productlist']->value,'type'=>'product'), 0, false);
?></div><?php
}
}
/* {/block 'snippets-product-slider-box-products'} */
/* {block 'snippets-product-slider-box'} */
class Block_18268261676790f97cbe23b9_90001722 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
ob_start();
if ($_smarty_tpl->tpl_vars['tplscope']->value === 'box') {
echo " box box-slider";
}
$_prefixVariable88=ob_get_clean();
ob_start();
if ((isset($_smarty_tpl->tpl_vars['class']->value)) && strlen((string) $_smarty_tpl->tpl_vars['class']->value) > 0) {
echo " ";
echo (string)$_smarty_tpl->tpl_vars['class']->value;
}
$_prefixVariable89=ob_get_clean();
ob_start();
if ((isset($_smarty_tpl->tpl_vars['id']->value)) && strlen((string) $_smarty_tpl->tpl_vars['id']->value) > 0) {
echo (string)$_smarty_tpl->tpl_vars['id']->value;
}
$_prefixVariable90=ob_get_clean();
$_block_plugin151 = isset($_smarty_tpl->smarty->registered_plugins['block']['card'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['card'][0][0] : null;
if (!is_callable(array($_block_plugin151, 'render'))) {
throw new SmartyException('block tag \'card\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('card', array('class'=>$_prefixVariable88.$_prefixVariable89,'id'=>$_prefixVariable90));
$_block_repeat=true;
echo $_block_plugin151->render(array('class'=>$_prefixVariable88.$_prefixVariable89,'id'=>$_prefixVariable90), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
if (!empty($_smarty_tpl->tpl_vars['title']->value)) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20608553536790f97cbe5813_28344653', 'snippets-product-slider-box-title', $this->tplIndex);
}
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15391208536790f97cbe8141_22182022', 'snippets-product-slider-box-products', $this->tplIndex);
$_block_repeat=false;
echo $_block_plugin151->render(array('class'=>$_prefixVariable88.$_prefixVariable89,'id'=>$_prefixVariable90), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
/* {/block 'snippets-product-slider-box'} */
/* {block 'snippets-product-slider-other-title'} */
class Block_1274100166790f97cbec7b7_88525311 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
if ((($tmp = $_smarty_tpl->tpl_vars['titleContainer']->value ?? null)===null||$tmp==='' ? false : $tmp)) {?><div class="container slick-slider-other-container"><?php }?><div class="hr-sect h2"><?php if (!empty($_smarty_tpl->tpl_vars['moreLink']->value)) {
$_block_plugin153 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin153, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('class'=>"text-decoration-none-util",'href'=>$_smarty_tpl->tpl_vars['moreLink']->value,'title'=>$_smarty_tpl->tpl_vars['moreTitle']->value,'data-toggle'=>"tooltip",'data'=>array("placement"=>"auto right"),'aria'=>array("label"=>$_smarty_tpl->tpl_vars['moreTitle']->value)));
$_block_repeat=true;
echo $_block_plugin153->render(array('class'=>"text-decoration-none-util",'href'=>$_smarty_tpl->tpl_vars['moreLink']->value,'title'=>$_smarty_tpl->tpl_vars['moreTitle']->value,'data-toggle'=>"tooltip",'data'=>array("placement"=>"auto right"),'aria'=>array("label"=>$_smarty_tpl->tpl_vars['moreTitle']->value)), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['title']->value;
$_block_repeat=false;
echo $_block_plugin153->render(array('class'=>"text-decoration-none-util",'href'=>$_smarty_tpl->tpl_vars['moreLink']->value,'title'=>$_smarty_tpl->tpl_vars['moreTitle']->value,'data-toggle'=>"tooltip",'data'=>array("placement"=>"auto right"),'aria'=>array("label"=>$_smarty_tpl->tpl_vars['moreTitle']->value)), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
} else {
echo $_smarty_tpl->tpl_vars['title']->value;
}?></div><?php if ((($tmp = $_smarty_tpl->tpl_vars['titleContainer']->value ?? null)===null||$tmp==='' ? false : $tmp)) {?></div><?php }
}
}
/* {/block 'snippets-product-slider-other-title'} */
/* {block 'product-slider-class'} */
class Block_3271116686790f97cbf0376_94544655 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['tplscope']->value === 'half') {?>slider-half<?php } else { ?>product-slider<?php }
}
}
/* {/block 'product-slider-class'} */
/* {block 'snippets-product-slider-other-products'} */
class Block_20960774566790f97cbefd28_29334645 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OSPanel\\domains\\JTL_shop\\includes\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'productSliderClass', null, null);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3271116686790f97cbf0376_94544655', 'product-slider-class', $this->tplIndex);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
ob_start();
if ($_smarty_tpl->tpl_vars['tplscope']->value === 'half') {
echo "slick-type-half";
} else {
echo "slick-type-product";
}
$_prefixVariable91=ob_get_clean();
ob_start();
if (smarty_modifier_count($_smarty_tpl->tpl_vars['productlist']->value) < 3) {
echo "slider-no-preview";
}
$_prefixVariable92=ob_get_clean();
$_block_plugin154 = isset($_smarty_tpl->smarty->registered_plugins['block']['row'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['row'][0][0] : null;
if (!is_callable(array($_block_plugin154, 'render'))) {
throw new SmartyException('block tag \'row\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('row', array('class'=>"slick-lazy slick-smooth-loading carousel carousel-arrows-inside ".$_prefixVariable91." ".$_prefixVariable92,'data'=>array("slick-type"=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'productSliderClass'))));
$_block_repeat=true;
echo $_block_plugin154->render(array('class'=>"slick-lazy slick-smooth-loading carousel carousel-arrows-inside ".$_prefixVariable91." ".$_prefixVariable92,'data'=>array("slick-type"=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'productSliderClass'))), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->_subTemplateRender('file:snippets/slider_items.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('items'=>$_smarty_tpl->tpl_vars['productlist']->value,'type'=>'product'), 0, true);
$_block_repeat=false;
echo $_block_plugin154->render(array('class'=>"slick-lazy slick-smooth-loading carousel carousel-arrows-inside ".$_prefixVariable91." ".$_prefixVariable92,'data'=>array("slick-type"=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'productSliderClass'))), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
/* {/block 'snippets-product-slider-other-products'} */
/* {block 'snippets-product-slider-other'} */
class Block_13257373156790f97cbea2d0_64207730 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="slick-slider-other<?php if (!$_smarty_tpl->tpl_vars['isOPC']->value) {?> is-not-opc<?php }
if ((isset($_smarty_tpl->tpl_vars['class']->value)) && strlen((string) $_smarty_tpl->tpl_vars['class']->value) > 0) {?> <?php echo $_smarty_tpl->tpl_vars['class']->value;
}?>"<?php if ((isset($_smarty_tpl->tpl_vars['id']->value)) && strlen((string) $_smarty_tpl->tpl_vars['id']->value) > 0) {?> id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"<?php }?>><?php if (!empty($_smarty_tpl->tpl_vars['title']->value)) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1274100166790f97cbec7b7_88525311', 'snippets-product-slider-other-title', $this->tplIndex);
}
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20960774566790f97cbefd28_29334645', 'snippets-product-slider-other-products', $this->tplIndex);
?>
</div><?php
}
}
/* {/block 'snippets-product-slider-other'} */
/* {block 'snippets-product-slider'} */
class Block_13615683686790f97cbdfa20_53003429 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'snippets-product-slider' => 
  array (
    0 => 'Block_13615683686790f97cbdfa20_53003429',
  ),
  'snippets-product-slider-box' => 
  array (
    0 => 'Block_18268261676790f97cbe23b9_90001722',
  ),
  'snippets-product-slider-box-title' => 
  array (
    0 => 'Block_20608553536790f97cbe5813_28344653',
  ),
  'snippets-product-slider-box-products' => 
  array (
    0 => 'Block_15391208536790f97cbe8141_22182022',
  ),
  'product-box-slider-class' => 
  array (
    0 => 'Block_14392064086790f97cbe8d63_32958708',
  ),
  'snippets-product-slider-other' => 
  array (
    0 => 'Block_13257373156790f97cbea2d0_64207730',
  ),
  'snippets-product-slider-other-title' => 
  array (
    0 => 'Block_1274100166790f97cbec7b7_88525311',
  ),
  'snippets-product-slider-other-products' => 
  array (
    0 => 'Block_20960774566790f97cbefd28_29334645',
  ),
  'product-slider-class' => 
  array (
    0 => 'Block_3271116686790f97cbf0376_94544655',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OSPanel\\domains\\JTL_shop\\includes\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>

    <?php $_smarty_tpl->_assignInScope('isOPC', (($tmp = $_smarty_tpl->tpl_vars['isOPC']->value ?? null)===null||$tmp==='' ? false : $tmp));
if (smarty_modifier_count($_smarty_tpl->tpl_vars['productlist']->value) > 0) {
if (!(isset($_smarty_tpl->tpl_vars['tplscope']->value))) {
$_smarty_tpl->_assignInScope('tplscope', 'slider');
}
if ($_smarty_tpl->tpl_vars['tplscope']->value === 'box') {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18268261676790f97cbe23b9_90001722', 'snippets-product-slider-box', $this->tplIndex);
} else {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13257373156790f97cbea2d0_64207730', 'snippets-product-slider-other', $this->tplIndex);
}
}
}
}
/* {/block 'snippets-product-slider'} */
}

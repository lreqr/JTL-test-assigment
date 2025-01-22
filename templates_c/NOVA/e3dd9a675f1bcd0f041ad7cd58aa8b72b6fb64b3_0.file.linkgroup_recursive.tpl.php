<?php
/* Smarty version 4.3.1, created on 2025-01-22 14:57:50
  from 'C:\OSPanel\domains\JTL_shop\templates\NOVA\snippets\linkgroup_recursive.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6790f95eb56ba2_69045492',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e3dd9a675f1bcd0f041ad7cd58aa8b72b6fb64b3' => 
    array (
      0 => 'C:\\OSPanel\\domains\\JTL_shop\\templates\\NOVA\\snippets\\linkgroup_recursive.tpl',
      1 => 1694613031,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:snippets/linkgroup_recursive.tpl' => 4,
  ),
),false)) {
function content_6790f95eb56ba2_69045492 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1660056606790f95eb2b184_34249199', 'snippets-linkgroup-recursive');
?>

<?php }
/* {block 'snippets-linkgroup-recursive-link'} */
class Block_14721038876790f95eb3c9b0_22897425 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<a class="nav-link dropdown-toggle" target="_self" href="<?php echo $_smarty_tpl->tpl_vars['li']->value->getURL();?>
" data-toggle="collapse"data-target="#link_box_<?php echo $_smarty_tpl->tpl_vars['li']->value->getID();?>
_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"aria-expanded="<?php if ($_smarty_tpl->tpl_vars['li']->value->getIsActive() || ((isset($_smarty_tpl->tpl_vars['activeParent']->value)) && $_smarty_tpl->tpl_vars['activeParent']->value == $_smarty_tpl->tpl_vars['li']->value->getID())) {?>true<?php } else { ?>false<?php }?>"><?php echo $_smarty_tpl->tpl_vars['li']->value->getName();?>
</a><?php
}
}
/* {/block 'snippets-linkgroup-recursive-link'} */
/* {block 'snippets-linkgroup-recursive-include-linkgroup-recursive'} */
class Block_12990183626790f95eb43627_16510260 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['li']->value->getChildLinks()->count() > 0) {
$_smarty_tpl->_subTemplateRender('file:snippets/linkgroup_recursive.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('i'=>$_smarty_tpl->tpl_vars['i']->value+1,'links'=>$_smarty_tpl->tpl_vars['li']->value->getChildLinks(),'limit'=>$_smarty_tpl->tpl_vars['limit']->value,'activeId'=>$_smarty_tpl->tpl_vars['activeId']->value,'activeParents'=>$_smarty_tpl->tpl_vars['activeParents']->value), 0, true);
} else {
$_smarty_tpl->_subTemplateRender('file:snippets/linkgroup_recursive.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('i'=>$_smarty_tpl->tpl_vars['i']->value+1,'links'=>array($_smarty_tpl->tpl_vars['li']->value),'limit'=>$_smarty_tpl->tpl_vars['limit']->value,'activeId'=>$_smarty_tpl->tpl_vars['activeId']->value,'activeParents'=>$_smarty_tpl->tpl_vars['activeParents']->value), 0, true);
}
}
}
/* {/block 'snippets-linkgroup-recursive-include-linkgroup-recursive'} */
/* {block 'snippets-linkgroup-recursive-has-items-nav'} */
class Block_11094357436790f95eb40408_12687631 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
ob_start();
if ($_smarty_tpl->tpl_vars['li']->value->getID() == $_smarty_tpl->tpl_vars['activeId']->value || (((isset($_smarty_tpl->tpl_vars['activeParent']->value)) && (isset($_smarty_tpl->tpl_vars['activeParent']->value->kLink))) && $_smarty_tpl->tpl_vars['activeParent']->value->kLink == $_smarty_tpl->tpl_vars['li']->value->getID())) {
echo "show";
}
$_prefixVariable1=ob_get_clean();
$_block_plugin4 = isset($_smarty_tpl->smarty->registered_plugins['block']['nav'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['nav'][0][0] : null;
if (!is_callable(array($_block_plugin4, 'render'))) {
throw new SmartyException('block tag \'nav\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('nav', array('vertical'=>true,'class'=>"collapse ".$_prefixVariable1,'id'=>"link_box_".((string)$_smarty_tpl->tpl_vars['li']->value->getID())."_".((string)$_smarty_tpl->tpl_vars['i']->value)));
$_block_repeat=true;
echo $_block_plugin4->render(array('vertical'=>true,'class'=>"collapse ".$_prefixVariable1,'id'=>"link_box_".((string)$_smarty_tpl->tpl_vars['li']->value->getID())."_".((string)$_smarty_tpl->tpl_vars['i']->value)), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12990183626790f95eb43627_16510260', 'snippets-linkgroup-recursive-include-linkgroup-recursive', $this->tplIndex);
$_block_repeat=false;
echo $_block_plugin4->render(array('vertical'=>true,'class'=>"collapse ".$_prefixVariable1,'id'=>"link_box_".((string)$_smarty_tpl->tpl_vars['li']->value->getID())."_".((string)$_smarty_tpl->tpl_vars['i']->value)), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
/* {/block 'snippets-linkgroup-recursive-has-items-nav'} */
/* {block 'snippets-linkgroup-recursive-has-not-items'} */
class Block_584475236790f95eb46c08_25643330 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
ob_start();
if ($_smarty_tpl->tpl_vars['li']->value->getIsActive() || ((isset($_smarty_tpl->tpl_vars['activeParent']->value)) && $_smarty_tpl->tpl_vars['activeParent']->value == $_smarty_tpl->tpl_vars['li']->value->getID())) {
echo " active";
}
$_prefixVariable2=ob_get_clean();
$_block_plugin5 = isset($_smarty_tpl->smarty->registered_plugins['block']['navitem'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['navitem'][0][0] : null;
if (!is_callable(array($_block_plugin5, 'render'))) {
throw new SmartyException('block tag \'navitem\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('navitem', array('class'=>$_prefixVariable2,'href'=>$_smarty_tpl->tpl_vars['li']->value->getURL(),'target'=>$_smarty_tpl->tpl_vars['li']->value->getTarget()));
$_block_repeat=true;
echo $_block_plugin5->render(array('class'=>$_prefixVariable2,'href'=>$_smarty_tpl->tpl_vars['li']->value->getURL(),'target'=>$_smarty_tpl->tpl_vars['li']->value->getTarget()), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['li']->value->getName();
$_block_repeat=false;
echo $_block_plugin5->render(array('class'=>$_prefixVariable2,'href'=>$_smarty_tpl->tpl_vars['li']->value->getURL(),'target'=>$_smarty_tpl->tpl_vars['li']->value->getTarget()), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
/* {/block 'snippets-linkgroup-recursive-has-not-items'} */
/* {block 'snippets-linkgroup-recursive-list'} */
class Block_4692708026790f95eb37a82_49594928 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['links']->value, 'li');
$_smarty_tpl->tpl_vars['li']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['li']->value) {
$_smarty_tpl->tpl_vars['li']->do_else = false;
$_smarty_tpl->_assignInScope('hasItems', $_smarty_tpl->tpl_vars['li']->value->getChildLinks()->count() > 0 && (($_smarty_tpl->tpl_vars['i']->value+1) < $_smarty_tpl->tpl_vars['limit']->value));
if ((isset($_smarty_tpl->tpl_vars['activeParents']->value)) && is_array($_smarty_tpl->tpl_vars['activeParents']->value) && (isset($_smarty_tpl->tpl_vars['activeParents']->value[$_smarty_tpl->tpl_vars['i']->value]))) {
$_smarty_tpl->_assignInScope('activeParent', $_smarty_tpl->tpl_vars['activeParents']->value[$_smarty_tpl->tpl_vars['i']->value]);
}
if ($_smarty_tpl->tpl_vars['hasItems']->value) {?><li class="link-group-item nav-item <?php if ($_smarty_tpl->tpl_vars['hasItems']->value) {?>dropdown<?php }
if ($_smarty_tpl->tpl_vars['li']->value->getIsActive() || ((isset($_smarty_tpl->tpl_vars['activeParent']->value)) && $_smarty_tpl->tpl_vars['activeParent']->value == $_smarty_tpl->tpl_vars['li']->value->getID())) {?> active<?php }?>"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14721038876790f95eb3c9b0_22897425', 'snippets-linkgroup-recursive-link', $this->tplIndex);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11094357436790f95eb40408_12687631', 'snippets-linkgroup-recursive-has-items-nav', $this->tplIndex);
?>
</li><?php } else {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_584475236790f95eb46c08_25643330', 'snippets-linkgroup-recursive-has-not-items', $this->tplIndex);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
/* {/block 'snippets-linkgroup-recursive-list'} */
/* {block 'snippets-linkgroup-mega-recursive-main-link'} */
class Block_7399917106790f95eb4a8a3_11830036 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
ob_start();
if ($_smarty_tpl->tpl_vars['firstChild']->value) {
echo "submenu-headline submenu-headline-toplevel";
}
$_prefixVariable3=ob_get_clean();
ob_start();
if ($_smarty_tpl->tpl_vars['mainLink']->value->getChildLinks()->count() > 0) {
echo "nav-link dropdown-toggle";
}
$_prefixVariable4=ob_get_clean();
$_block_plugin6 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin6, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_smarty_tpl->tpl_vars['mainLink']->value->getURL(),'nofollow'=>$_smarty_tpl->tpl_vars['mainLink']->value->getNoFollow(),'class'=>"d-lg-block ".$_prefixVariable3." ".((string)$_smarty_tpl->tpl_vars['subCategory']->value)." ".$_prefixVariable4,'aria'=>array("expanded"=>"false"),'target'=>$_smarty_tpl->tpl_vars['mainLink']->value->getTarget()));
$_block_repeat=true;
echo $_block_plugin6->render(array('href'=>$_smarty_tpl->tpl_vars['mainLink']->value->getURL(),'nofollow'=>$_smarty_tpl->tpl_vars['mainLink']->value->getNoFollow(),'class'=>"d-lg-block ".$_prefixVariable3." ".((string)$_smarty_tpl->tpl_vars['subCategory']->value)." ".$_prefixVariable4,'aria'=>array("expanded"=>"false"),'target'=>$_smarty_tpl->tpl_vars['mainLink']->value->getTarget()), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><span class="text-truncate d-block"><?php echo $_smarty_tpl->tpl_vars['mainLink']->value->getName();?>
</span><?php $_block_repeat=false;
echo $_block_plugin6->render(array('href'=>$_smarty_tpl->tpl_vars['mainLink']->value->getURL(),'nofollow'=>$_smarty_tpl->tpl_vars['mainLink']->value->getNoFollow(),'class'=>"d-lg-block ".$_prefixVariable3." ".((string)$_smarty_tpl->tpl_vars['subCategory']->value)." ".$_prefixVariable4,'aria'=>array("expanded"=>"false"),'target'=>$_smarty_tpl->tpl_vars['mainLink']->value->getTarget()), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
/* {/block 'snippets-linkgroup-mega-recursive-main-link'} */
/* {block 'snippets-linkgroup-recursive-mega-child-header'} */
class Block_17444725956790f95eb4f2e1_23563412 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<li class="nav-item d-lg-none"><?php $_block_plugin8 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin8, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_smarty_tpl->tpl_vars['mainLink']->value->getURL(),'nofollow'=>true,'target'=>$_smarty_tpl->tpl_vars['mainLink']->value->getTarget()));
$_block_repeat=true;
echo $_block_plugin8->render(array('href'=>$_smarty_tpl->tpl_vars['mainLink']->value->getURL(),'nofollow'=>true,'target'=>$_smarty_tpl->tpl_vars['mainLink']->value->getTarget()), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><strong class="nav-mobile-heading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'menuShow','printf'=>$_smarty_tpl->tpl_vars['mainLink']->value->getName()),$_smarty_tpl ) );?>
</strong><?php $_block_repeat=false;
echo $_block_plugin8->render(array('href'=>$_smarty_tpl->tpl_vars['mainLink']->value->getURL(),'nofollow'=>true,'target'=>$_smarty_tpl->tpl_vars['mainLink']->value->getTarget()), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></li><?php
}
}
/* {/block 'snippets-linkgroup-recursive-mega-child-header'} */
/* {block 'snippets-linkgroup-recursive-mega-child-link-child'} */
class Block_13199366486790f95eb52525_58648249 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<li class="nav-item dropdown"><?php $_smarty_tpl->_subTemplateRender('file:snippets/linkgroup_recursive.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('linkgroupIdentifier'=>'mega','limit'=>100,'tplscope'=>'megamenu','layout'=>'list','mainLink'=>$_smarty_tpl->tpl_vars['link']->value,'firstChild'=>false,'subCategory'=>$_smarty_tpl->tpl_vars['subCategory']->value+1), 0, true);
?></li><?php
}
}
/* {/block 'snippets-linkgroup-recursive-mega-child-link-child'} */
/* {block 'snippets-linkgroup-recursive-mega-child-link-no-child'} */
class Block_7434311826790f95eb53853_08091720 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_block_plugin9 = isset($_smarty_tpl->smarty->registered_plugins['block']['navitem'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['navitem'][0][0] : null;
if (!is_callable(array($_block_plugin9, 'render'))) {
throw new SmartyException('block tag \'navitem\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('navitem', array('href'=>$_smarty_tpl->tpl_vars['link']->value->getURL(),'nofollow'=>$_smarty_tpl->tpl_vars['link']->value->getNoFollow(),'target'=>$_smarty_tpl->tpl_vars['link']->value->getTarget()));
$_block_repeat=true;
echo $_block_plugin9->render(array('href'=>$_smarty_tpl->tpl_vars['link']->value->getURL(),'nofollow'=>$_smarty_tpl->tpl_vars['link']->value->getNoFollow(),'target'=>$_smarty_tpl->tpl_vars['link']->value->getTarget()), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><span class="text-truncate d-block"><?php echo $_smarty_tpl->tpl_vars['link']->value->getName();?>
</span><?php $_block_repeat=false;
echo $_block_plugin9->render(array('href'=>$_smarty_tpl->tpl_vars['link']->value->getURL(),'nofollow'=>$_smarty_tpl->tpl_vars['link']->value->getNoFollow(),'target'=>$_smarty_tpl->tpl_vars['link']->value->getTarget()), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
/* {/block 'snippets-linkgroup-recursive-mega-child-link-no-child'} */
/* {block 'snippets-linkgroup-recursive-mega-child-links'} */
class Block_14874909086790f95eb50d24_39296160 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mainLink']->value->getChildLinks(), 'link');
$_smarty_tpl->tpl_vars['link']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->do_else = false;
if ($_smarty_tpl->tpl_vars['link']->value->getChildLinks()->count() > 0) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13199366486790f95eb52525_58648249', 'snippets-linkgroup-recursive-mega-child-link-child', $this->tplIndex);
} else {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7434311826790f95eb53853_08091720', 'snippets-linkgroup-recursive-mega-child-link-no-child', $this->tplIndex);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
/* {/block 'snippets-linkgroup-recursive-mega-child-links'} */
/* {block 'snippets-linkgroup-recursive-mega-child-content'} */
class Block_14494238956790f95eb4edf6_83551422 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="categories-recursive-dropdown dropdown-menu"><?php $_block_plugin7 = isset($_smarty_tpl->smarty->registered_plugins['block']['nav'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['nav'][0][0] : null;
if (!is_callable(array($_block_plugin7, 'render'))) {
throw new SmartyException('block tag \'nav\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('nav', array());
$_block_repeat=true;
echo $_block_plugin7->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17444725956790f95eb4f2e1_23563412', 'snippets-linkgroup-recursive-mega-child-header', $this->tplIndex);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14874909086790f95eb50d24_39296160', 'snippets-linkgroup-recursive-mega-child-links', $this->tplIndex);
$_block_repeat=false;
echo $_block_plugin7->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></div><?php
}
}
/* {/block 'snippets-linkgroup-recursive-mega-child-content'} */
/* {block 'snippets-linkgroup-recursive-mega'} */
class Block_5859174866790f95eb4a551_27695280 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7399917106790f95eb4a8a3_11830036', 'snippets-linkgroup-mega-recursive-main-link', $this->tplIndex);
if ($_smarty_tpl->tpl_vars['mainLink']->value->getChildLinks()->count() > 0 && $_smarty_tpl->tpl_vars['Einstellungen']->value['template']['megamenu']['show_subcategories'] !== 'N') {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14494238956790f95eb4edf6_83551422', 'snippets-linkgroup-recursive-mega-child-content', $this->tplIndex);
}
}
}
/* {/block 'snippets-linkgroup-recursive-mega'} */
/* {block 'snippets-linkgroup-recursive'} */
class Block_1660056606790f95eb2b184_34249199 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'snippets-linkgroup-recursive' => 
  array (
    0 => 'Block_1660056606790f95eb2b184_34249199',
  ),
  'snippets-linkgroup-recursive-list' => 
  array (
    0 => 'Block_4692708026790f95eb37a82_49594928',
  ),
  'snippets-linkgroup-recursive-link' => 
  array (
    0 => 'Block_14721038876790f95eb3c9b0_22897425',
  ),
  'snippets-linkgroup-recursive-has-items-nav' => 
  array (
    0 => 'Block_11094357436790f95eb40408_12687631',
  ),
  'snippets-linkgroup-recursive-include-linkgroup-recursive' => 
  array (
    0 => 'Block_12990183626790f95eb43627_16510260',
  ),
  'snippets-linkgroup-recursive-has-not-items' => 
  array (
    0 => 'Block_584475236790f95eb46c08_25643330',
  ),
  'snippets-linkgroup-recursive-mega' => 
  array (
    0 => 'Block_5859174866790f95eb4a551_27695280',
  ),
  'snippets-linkgroup-mega-recursive-main-link' => 
  array (
    0 => 'Block_7399917106790f95eb4a8a3_11830036',
  ),
  'snippets-linkgroup-recursive-mega-child-content' => 
  array (
    0 => 'Block_14494238956790f95eb4edf6_83551422',
  ),
  'snippets-linkgroup-recursive-mega-child-header' => 
  array (
    0 => 'Block_17444725956790f95eb4f2e1_23563412',
  ),
  'snippets-linkgroup-recursive-mega-child-links' => 
  array (
    0 => 'Block_14874909086790f95eb50d24_39296160',
  ),
  'snippets-linkgroup-recursive-mega-child-link-child' => 
  array (
    0 => 'Block_13199366486790f95eb52525_58648249',
  ),
  'snippets-linkgroup-recursive-mega-child-link-no-child' => 
  array (
    0 => 'Block_7434311826790f95eb53853_08091720',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ((isset($_smarty_tpl->tpl_vars['linkgroupIdentifier']->value)) && (!(isset($_smarty_tpl->tpl_vars['i']->value)) || (isset($_smarty_tpl->tpl_vars['limit']->value)) && $_smarty_tpl->tpl_vars['i']->value < $_smarty_tpl->tpl_vars['limit']->value)) {?>
        <?php $_smarty_tpl->_assignInScope('layout', (($tmp = $_smarty_tpl->tpl_vars['layout']->value ?? null)===null||$tmp==='' ? 'dropdown' : $tmp));
if (!(isset($_smarty_tpl->tpl_vars['i']->value))) {
$_smarty_tpl->_assignInScope('i', 0);
}
if (!(isset($_smarty_tpl->tpl_vars['limit']->value))) {
$_smarty_tpl->_assignInScope('limit', 3);
}
if (!(isset($_smarty_tpl->tpl_vars['activeId']->value))) {
$_smarty_tpl->_assignInScope('activeId', 0);
if ((isset($_smarty_tpl->tpl_vars['Link']->value)) && $_smarty_tpl->tpl_vars['Link']->value->getID() > 0) {
$_smarty_tpl->_assignInScope('activeId', $_smarty_tpl->tpl_vars['Link']->value->getID());
} elseif (JTL\Shop::$kLink > 0) {
$_smarty_tpl->_assignInScope('activeId', JTL\Shop::$kLink);
$_smarty_tpl->_assignInScope('Link', JTL\Shop::Container()->getLinkService()->getLinkByID($_smarty_tpl->tpl_vars['activeId']->value));
}
}
if (!(isset($_smarty_tpl->tpl_vars['activeParents']->value))) {
$_smarty_tpl->_assignInScope('activeParents', JTL\Shop::Container()->getLinkService()->getParentIDs($_smarty_tpl->tpl_vars['activeId']->value));
}
if (!(isset($_smarty_tpl->tpl_vars['links']->value))) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_navigation'][0], array( array('linkgroupIdentifier'=>$_smarty_tpl->tpl_vars['linkgroupIdentifier']->value,'assign'=>'links'),$_smarty_tpl ) );
}
if (!empty($_smarty_tpl->tpl_vars['links']->value)) {
if ($_smarty_tpl->tpl_vars['layout']->value === 'dropdown') {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4692708026790f95eb37a82_49594928', 'snippets-linkgroup-recursive-list', $this->tplIndex);
} else {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5859174866790f95eb4a551_27695280', 'snippets-linkgroup-recursive-mega', $this->tplIndex);
}
}?>
    <?php }
}
}
/* {/block 'snippets-linkgroup-recursive'} */
}

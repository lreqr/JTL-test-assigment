<?php
/* Smarty version 4.3.1, created on 2025-01-22 14:57:57
  from 'C:\OSPanel\domains\JTL_shop\templates\NOVA\layout\header_top_bar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6790f965150e51_08633841',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf01b854c733da7ed4c8af104966422883ab7667' => 
    array (
      0 => 'C:\\OSPanel\\domains\\JTL_shop\\templates\\NOVA\\layout\\header_top_bar.tpl',
      1 => 1694613031,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:snippets/currency_dropdown.tpl' => 1,
    'file:snippets/language_dropdown.tpl' => 1,
  ),
),false)) {
function content_6790f965150e51_08633841 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1753497776790f965147788_89637978', 'layout-header-top-bar');
?>

<?php }
/* {block 'layout-header-top-bar-user-settings-currency'} */
class Block_18137661196790f9651486c9_26531533 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:snippets/currency_dropdown.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'layout-header-top-bar-user-settings-currency'} */
/* {block 'layout-header-top-bar-user-settings-include-language-dropdown'} */
class Block_9915882776790f965149196_03142426 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:snippets/language_dropdown.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'layout-header-top-bar-user-settings-include-language-dropdown'} */
/* {block 'layout-header-top-bar-user-settings'} */
class Block_7750390626790f965148381_11355235 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18137661196790f9651486c9_26531533', 'layout-header-top-bar-user-settings-currency', $this->tplIndex);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9915882776790f965149196_03142426', 'layout-header-top-bar-user-settings-include-language-dropdown', $this->tplIndex);
}
}
/* {/block 'layout-header-top-bar-user-settings'} */
/* {block 'layout-header-top-bar-cms-pages'} */
class Block_14628792016790f96514af53_87307791 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['linkgroups']->value->getLinkGroupByTemplate('Kopf')->getLinks(), 'Link');
$_smarty_tpl->tpl_vars['Link']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['Link']->value) {
$_smarty_tpl->tpl_vars['Link']->do_else = false;
$_block_plugin24 = isset($_smarty_tpl->smarty->registered_plugins['block']['navitem'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['navitem'][0][0] : null;
if (!is_callable(array($_block_plugin24, 'render'))) {
throw new SmartyException('block tag \'navitem\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('navitem', array('active'=>$_smarty_tpl->tpl_vars['Link']->value->getIsActive(),'href'=>$_smarty_tpl->tpl_vars['Link']->value->getURL(),'title'=>$_smarty_tpl->tpl_vars['Link']->value->getTitle(),'target'=>$_smarty_tpl->tpl_vars['Link']->value->getTarget()));
$_block_repeat=true;
echo $_block_plugin24->render(array('active'=>$_smarty_tpl->tpl_vars['Link']->value->getIsActive(),'href'=>$_smarty_tpl->tpl_vars['Link']->value->getURL(),'title'=>$_smarty_tpl->tpl_vars['Link']->value->getTitle(),'target'=>$_smarty_tpl->tpl_vars['Link']->value->getTarget()), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['Link']->value->getName();
$_block_repeat=false;
echo $_block_plugin24->render(array('active'=>$_smarty_tpl->tpl_vars['Link']->value->getIsActive(),'href'=>$_smarty_tpl->tpl_vars['Link']->value->getURL(),'title'=>$_smarty_tpl->tpl_vars['Link']->value->getTitle(),'target'=>$_smarty_tpl->tpl_vars['Link']->value->getTarget()), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
/* {/block 'layout-header-top-bar-cms-pages'} */
/* {block 'layout-header-top-bar-note'} */
class Block_21421941696790f96514e955_89351077 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'topbarNote'),$_smarty_tpl ) );
$_prefixVariable14 = ob_get_clean();
$_smarty_tpl->_assignInScope('topbarLang', $_prefixVariable14);
if ($_smarty_tpl->tpl_vars['topbarLang']->value !== '') {
$_block_plugin25 = isset($_smarty_tpl->smarty->registered_plugins['block']['nav'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['nav'][0][0] : null;
if (!is_callable(array($_block_plugin25, 'render'))) {
throw new SmartyException('block tag \'nav\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('nav', array('tag'=>'ul','class'=>'topbar-note nav-dividers'));
$_block_repeat=true;
echo $_block_plugin25->render(array('tag'=>'ul','class'=>'topbar-note nav-dividers'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_plugin26 = isset($_smarty_tpl->smarty->registered_plugins['block']['navitem'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['navitem'][0][0] : null;
if (!is_callable(array($_block_plugin26, 'render'))) {
throw new SmartyException('block tag \'navitem\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('navitem', array('id'=>"topbarNote"));
$_block_repeat=true;
echo $_block_plugin26->render(array('id'=>"topbarNote"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['topbarLang']->value;
$_block_repeat=false;
echo $_block_plugin26->render(array('id'=>"topbarNote"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_repeat=false;
echo $_block_plugin25->render(array('tag'=>'ul','class'=>'topbar-note nav-dividers'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
/* {/block 'layout-header-top-bar-note'} */
/* {block 'layout-header-top-bar'} */
class Block_1753497776790f965147788_89637978 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'layout-header-top-bar' => 
  array (
    0 => 'Block_1753497776790f965147788_89637978',
  ),
  'layout-header-top-bar-user-settings' => 
  array (
    0 => 'Block_7750390626790f965148381_11355235',
  ),
  'layout-header-top-bar-user-settings-currency' => 
  array (
    0 => 'Block_18137661196790f9651486c9_26531533',
  ),
  'layout-header-top-bar-user-settings-include-language-dropdown' => 
  array (
    0 => 'Block_9915882776790f965149196_03142426',
  ),
  'layout-header-top-bar-cms-pages' => 
  array (
    0 => 'Block_14628792016790f96514af53_87307791',
  ),
  'layout-header-top-bar-note' => 
  array (
    0 => 'Block_21421941696790f96514e955_89351077',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_block_plugin23 = isset($_smarty_tpl->smarty->registered_plugins['block']['nav'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['nav'][0][0] : null;
if (!is_callable(array($_block_plugin23, 'render'))) {
throw new SmartyException('block tag \'nav\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('nav', array('tag'=>'ul','class'=>'topbar-main nav-dividers'));
$_block_repeat=true;
echo $_block_plugin23->render(array('tag'=>'ul','class'=>'topbar-main nav-dividers'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7750390626790f965148381_11355235', 'layout-header-top-bar-user-settings', $this->tplIndex);
if ($_smarty_tpl->tpl_vars['linkgroups']->value->getLinkGroupByTemplate('Kopf') !== null && $_smarty_tpl->tpl_vars['nSeitenTyp']->value !== (defined('PAGE_BESTELLVORGANG') ? constant('PAGE_BESTELLVORGANG') : null)) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14628792016790f96514af53_87307791', 'layout-header-top-bar-cms-pages', $this->tplIndex);
}
$_block_repeat=false;
echo $_block_plugin23->render(array('tag'=>'ul','class'=>'topbar-main nav-dividers'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
if ($_smarty_tpl->tpl_vars['nSeitenTyp']->value !== (defined('PAGE_BESTELLVORGANG') ? constant('PAGE_BESTELLVORGANG') : null)) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21421941696790f96514e955_89351077', 'layout-header-top-bar-note', $this->tplIndex);
}
}
}
/* {/block 'layout-header-top-bar'} */
}

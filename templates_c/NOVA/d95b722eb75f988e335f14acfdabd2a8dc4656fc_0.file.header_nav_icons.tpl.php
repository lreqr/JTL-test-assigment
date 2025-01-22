<?php
/* Smarty version 4.3.1, created on 2025-01-22 14:57:59
  from 'C:\OSPanel\domains\JTL_shop\templates\NOVA\layout\header_nav_icons.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6790f9675fbf07_40641457',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd95b722eb75f988e335f14acfdabd2a8dc4656fc' => 
    array (
      0 => 'C:\\OSPanel\\domains\\JTL_shop\\templates\\NOVA\\layout\\header_nav_icons.tpl',
      1 => 1694613031,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/header_nav_search.tpl' => 1,
    'file:snippets/currency_dropdown.tpl' => 1,
    'file:snippets/language_dropdown.tpl' => 1,
    'file:layout/header_shop_nav_account.tpl' => 1,
    'file:layout/header_shop_nav_compare.tpl' => 1,
    'file:layout/header_shop_nav_wish.tpl' => 1,
    'file:basket/cart_dropdown_label.tpl' => 1,
  ),
),false)) {
function content_6790f9675fbf07_40641457 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10610637196790f9675f2e59_22106959', 'layout-header-nav-icons');
?>

<?php }
/* {block 'layout-header-nav-icons-include-header-nav-search'} */
class Block_11998425406790f9675f4970_91359249 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['header']['menu_single_row'] !== 'Y') {?>
                <?php $_smarty_tpl->_subTemplateRender('file:layout/header_nav_search.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tag'=>'li'), 0, false);
?>
            <?php }?>
        <?php
}
}
/* {/block 'layout-header-nav-icons-include-header-nav-search'} */
/* {block 'layout-header-nav-icons-include-currency-dropdown'} */
class Block_12178105896790f9675f6289_22280943 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['header']['menu_show_topbar'] === 'N' && !$_smarty_tpl->tpl_vars['isMobile']->value) {?>
                <?php $_smarty_tpl->_subTemplateRender('file:snippets/currency_dropdown.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php }?>
        <?php
}
}
/* {/block 'layout-header-nav-icons-include-currency-dropdown'} */
/* {block 'layout-header-nav-icons-include-language-dropdown'} */
class Block_3348251786790f9675f76b8_78314767 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php ob_start();
if ($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['header']['menu_show_topbar'] === 'Y') {
echo "d-lg-none";
}
$_prefixVariable16=ob_get_clean();
$_smarty_tpl->_subTemplateRender('file:snippets/language_dropdown.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('dropdownClass'=>"d-flex ".$_prefixVariable16), 0, false);
?>
        <?php
}
}
/* {/block 'layout-header-nav-icons-include-language-dropdown'} */
/* {block 'layout-header-nav-icons-include-header-shop-nav-account'} */
class Block_1135356506790f9675f8b54_34953746 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:layout/header_shop_nav_account.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php
}
}
/* {/block 'layout-header-nav-icons-include-header-shop-nav-account'} */
/* {block 'layout-header-nav-icons-include-header-shop-nav-compare'} */
class Block_3087894736790f9675f9ef6_22050987 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_smarty_tpl->_subTemplateRender('file:layout/header_shop_nav_compare.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php
}
}
/* {/block 'layout-header-nav-icons-include-header-shop-nav-compare'} */
/* {block 'layout-header-nav-icons-include-header-shop-nav-wish'} */
class Block_15857679436790f9675fa899_34634895 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_smarty_tpl->_subTemplateRender('file:layout/header_shop_nav_wish.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php
}
}
/* {/block 'layout-header-nav-icons-include-header-shop-nav-wish'} */
/* {block 'layout-header-nav-icons-include-cart-dropdown-label'} */
class Block_15993455856790f9675fb1f9_56472274 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:basket/cart_dropdown_label.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php
}
}
/* {/block 'layout-header-nav-icons-include-cart-dropdown-label'} */
/* {block 'layout-header-nav-icons'} */
class Block_10610637196790f9675f2e59_22106959 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'layout-header-nav-icons' => 
  array (
    0 => 'Block_10610637196790f9675f2e59_22106959',
  ),
  'layout-header-nav-icons-include-header-nav-search' => 
  array (
    0 => 'Block_11998425406790f9675f4970_91359249',
  ),
  'layout-header-nav-icons-include-currency-dropdown' => 
  array (
    0 => 'Block_12178105896790f9675f6289_22280943',
  ),
  'layout-header-nav-icons-include-language-dropdown' => 
  array (
    0 => 'Block_3348251786790f9675f76b8_78314767',
  ),
  'layout-header-nav-icons-include-header-shop-nav-account' => 
  array (
    0 => 'Block_1135356506790f9675f8b54_34953746',
  ),
  'layout-header-nav-icons-include-header-shop-nav-compare' => 
  array (
    0 => 'Block_3087894736790f9675f9ef6_22050987',
  ),
  'layout-header-nav-icons-include-header-shop-nav-wish' => 
  array (
    0 => 'Block_15857679436790f9675fa899_34634895',
  ),
  'layout-header-nav-icons-include-cart-dropdown-label' => 
  array (
    0 => 'Block_15993455856790f9675fb1f9_56472274',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_block_plugin32 = isset($_smarty_tpl->smarty->registered_plugins['block']['nav'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['nav'][0][0] : null;
if (!is_callable(array($_block_plugin32, 'render'))) {
throw new SmartyException('block tag \'nav\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('nav', array('id'=>"shop-nav",'right'=>true,'class'=>"nav-right order-lg-last nav-icons"));
$_block_repeat=true;
echo $_block_plugin32->render(array('id'=>"shop-nav",'right'=>true,'class'=>"nav-right order-lg-last nav-icons"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11998425406790f9675f4970_91359249', 'layout-header-nav-icons-include-header-nav-search', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12178105896790f9675f6289_22280943', 'layout-header-nav-icons-include-currency-dropdown', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3348251786790f9675f76b8_78314767', 'layout-header-nav-icons-include-language-dropdown', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1135356506790f9675f8b54_34953746', 'layout-header-nav-icons-include-header-shop-nav-account', $this->tplIndex);
?>

        <?php if (!($_smarty_tpl->tpl_vars['isMobile']->value)) {?>
            <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['vergleichsliste']['vergleichsliste_anzeigen'] === 'Y') {?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3087894736790f9675f9ef6_22050987', 'layout-header-nav-icons-include-header-shop-nav-compare', $this->tplIndex);
?>

            <?php }?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15857679436790f9675fa899_34634895', 'layout-header-nav-icons-include-header-shop-nav-wish', $this->tplIndex);
?>

        <?php }?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15993455856790f9675fb1f9_56472274', 'layout-header-nav-icons-include-cart-dropdown-label', $this->tplIndex);
?>

    <?php $_block_repeat=false;
echo $_block_plugin32->render(array('id'=>"shop-nav",'right'=>true,'class'=>"nav-right order-lg-last nav-icons"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
/* {/block 'layout-header-nav-icons'} */
}

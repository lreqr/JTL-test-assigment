<?php
/* Smarty version 4.3.1, created on 2025-01-22 14:57:59
  from 'C:\OSPanel\domains\JTL_shop\templates\NOVA\layout\header_nav_search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6790f967af75f1_84022468',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5cac096e525bf335cae373f7d6ece537ecbdbb16' => 
    array (
      0 => 'C:\\OSPanel\\domains\\JTL_shop\\templates\\NOVA\\layout\\header_nav_search.tpl',
      1 => 1694613031,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:snippets/search_form.tpl' => 1,
  ),
),false)) {
function content_6790f967af75f1_84022468 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8218664036790f967aee8f4_88516134', 'layout-header-nav-search');
?>

<?php }
/* {block 'layout-header-nav-search-search'} */
class Block_19269941096790f967aef292_89039765 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <<?php echo (($tmp = $_smarty_tpl->tpl_vars['tag']->value ?? null)===null||$tmp==='' ? 'div' : $tmp);?>
 class="nav-item" id="search">
            <div class="search-wrapper">
                <form action="<?php echo $_smarty_tpl->tpl_vars['ShopURL']->value;?>
/search/" method="get">
                    <div class="form-icon">
                        <?php $_block_plugin33 = isset($_smarty_tpl->smarty->registered_plugins['block']['inputgroup'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['inputgroup'][0][0] : null;
if (!is_callable(array($_block_plugin33, 'render'))) {
throw new SmartyException('block tag \'inputgroup\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inputgroup', array());
$_block_repeat=true;
echo $_block_plugin33->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'search'),$_smarty_tpl ) );
$_prefixVariable17=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'search'),$_smarty_tpl ) );
$_prefixVariable18=ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0], array( array('id'=>"search-header",'name'=>"qs",'type'=>"text",'class'=>"ac_input",'placeholder'=>$_prefixVariable17,'autocomplete'=>"off",'aria'=>array("label"=>$_prefixVariable18)),$_smarty_tpl ) );?>

                            <?php $_block_plugin34 = isset($_smarty_tpl->smarty->registered_plugins['block']['inputgroupaddon'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['inputgroupaddon'][0][0] : null;
if (!is_callable(array($_block_plugin34, 'render'))) {
throw new SmartyException('block tag \'inputgroupaddon\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inputgroupaddon', array('append'=>true));
$_block_repeat=true;
echo $_block_plugin34->render(array('append'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'search'),$_smarty_tpl ) );
$_prefixVariable19 = ob_get_clean();
$_block_plugin35 = isset($_smarty_tpl->smarty->registered_plugins['block']['button'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['button'][0][0] : null;
if (!is_callable(array($_block_plugin35, 'render'))) {
throw new SmartyException('block tag \'button\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('button', array('type'=>"submit",'variant'=>"secondary",'aria'=>array("label"=>$_prefixVariable19)));
$_block_repeat=true;
echo $_block_plugin35->render(array('type'=>"submit",'variant'=>"secondary",'aria'=>array("label"=>$_prefixVariable19)), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><span class="fas fa-search"></span><?php $_block_repeat=false;
echo $_block_plugin35->render(array('type'=>"submit",'variant'=>"secondary",'aria'=>array("label"=>$_prefixVariable19)), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php $_block_repeat=false;
echo $_block_plugin34->render(array('append'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <span class="form-clear d-none"><i class="fas fa-times"></i></span>
                        <?php $_block_repeat=false;
echo $_block_plugin33->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    </div>
                </form>
            </div>
        </<?php echo (($tmp = $_smarty_tpl->tpl_vars['tag']->value ?? null)===null||$tmp==='' ? 'div' : $tmp);?>
>
    <?php
}
}
/* {/block 'layout-header-nav-search-search'} */
/* {block 'layout-header-nav-search-search-dropdown'} */
class Block_7625704606790f967af5287_41596821 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['header']['mobile_search_type'] === 'dropdown') {?>
            <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'findProduct'),$_smarty_tpl ) );
$_prefixVariable20 = ob_get_clean();
$_block_plugin36 = isset($_smarty_tpl->smarty->registered_plugins['block']['navitemdropdown'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['navitemdropdown'][0][0] : null;
if (!is_callable(array($_block_plugin36, 'render'))) {
throw new SmartyException('block tag \'navitemdropdown\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('navitemdropdown', array('tag'=>'div','class'=>'search-wrapper-dropdown d-block d-lg-none','text'=>'<i id="mobile-search-dropdown" class="fas fa-search"></i>','right'=>true,'no-caret'=>true,'router-aria'=>array('label'=>$_prefixVariable20)));
$_block_repeat=true;
echo $_block_plugin36->render(array('tag'=>'div','class'=>'search-wrapper-dropdown d-block d-lg-none','text'=>'<i id="mobile-search-dropdown" class="fas fa-search"></i>','right'=>true,'no-caret'=>true,'router-aria'=>array('label'=>$_prefixVariable20)), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <div class="dropdown-body">
                    <?php $_smarty_tpl->_subTemplateRender('file:snippets/search_form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>'search-header-desktop'), 0, false);
?>
                </div>
            <?php $_block_repeat=false;
echo $_block_plugin36->render(array('tag'=>'div','class'=>'search-wrapper-dropdown d-block d-lg-none','text'=>'<i id="mobile-search-dropdown" class="fas fa-search"></i>','right'=>true,'no-caret'=>true,'router-aria'=>array('label'=>$_prefixVariable20)), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php }?>
    <?php
}
}
/* {/block 'layout-header-nav-search-search-dropdown'} */
/* {block 'layout-header-nav-search'} */
class Block_8218664036790f967aee8f4_88516134 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'layout-header-nav-search' => 
  array (
    0 => 'Block_8218664036790f967aee8f4_88516134',
  ),
  'layout-header-nav-search-search' => 
  array (
    0 => 'Block_19269941096790f967aef292_89039765',
  ),
  'layout-header-nav-search-search-dropdown' => 
  array (
    0 => 'Block_7625704606790f967af5287_41596821',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19269941096790f967aef292_89039765', 'layout-header-nav-search-search', $this->tplIndex);
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7625704606790f967af5287_41596821', 'layout-header-nav-search-search-dropdown', $this->tplIndex);
?>

<?php
}
}
/* {/block 'layout-header-nav-search'} */
}

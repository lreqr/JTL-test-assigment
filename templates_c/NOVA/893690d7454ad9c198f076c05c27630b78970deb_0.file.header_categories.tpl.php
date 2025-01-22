<?php
/* Smarty version 4.3.1, created on 2025-01-22 14:58:06
  from 'C:\OSPanel\domains\JTL_shop\templates\NOVA\layout\header_categories.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6790f96e973d44_21493981',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '893690d7454ad9c198f076c05c27630b78970deb' => 
    array (
      0 => 'C:\\OSPanel\\domains\\JTL_shop\\templates\\NOVA\\layout\\header_categories.tpl',
      1 => 1694613031,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:snippets/categories_mega.tpl' => 1,
  ),
),false)) {
function content_6790f96e973d44_21493981 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3290461656790f96e96a8d2_85747008', 'layout-header-categories');
?>

<?php }
/* {block 'layout-header-categories-include-categories-mega-toggler'} */
class Block_17532369356790f96e96e0e4_68981134 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#mainNavigation" aria-controls="mainNavigation" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                <?php
}
}
/* {/block 'layout-header-categories-include-categories-mega-toggler'} */
/* {block 'layout-header-categories-include-categories-mega-back'} */
class Block_6092501906790f96e96f051_57617467 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_block_plugin84 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin84, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>"#",'class'=>"nav-offcanvas-title d-none",'data'=>array("menu-back"=>'')));
$_block_repeat=true;
echo $_block_plugin84->render(array('href'=>"#",'class'=>"nav-offcanvas-title d-none",'data'=>array("menu-back"=>'')), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <span class="fas fa-chevron-left icon-mr-2"></span>
                        <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'back'),$_smarty_tpl ) );?>
</span>
                    <?php $_block_repeat=false;
echo $_block_plugin84->render(array('href'=>"#",'class'=>"nav-offcanvas-title d-none",'data'=>array("menu-back"=>'')), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php
}
}
/* {/block 'layout-header-categories-include-categories-mega-back'} */
/* {block 'layout-header-categories-include-include-categories-header'} */
class Block_5217611696790f96e96c8e4_80422777 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div class="nav-mobile-header d-lg-none">
                <?php $_block_plugin81 = isset($_smarty_tpl->smarty->registered_plugins['block']['row'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['row'][0][0] : null;
if (!is_callable(array($_block_plugin81, 'render'))) {
throw new SmartyException('block tag \'row\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('row', array('class'=>"align-items-center-util"));
$_block_repeat=true;
echo $_block_plugin81->render(array('class'=>"align-items-center-util"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php $_block_plugin82 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin82, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('class'=>"nav-mobile-header-toggler"));
$_block_repeat=true;
echo $_block_plugin82->render(array('class'=>"nav-mobile-header-toggler"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17532369356790f96e96e0e4_68981134', 'layout-header-categories-include-categories-mega-toggler', $this->tplIndex);
?>

                <?php $_block_repeat=false;
echo $_block_plugin82->render(array('class'=>"nav-mobile-header-toggler"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php $_block_plugin83 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin83, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('class'=>"col-auto nav-mobile-header-name ml-auto-util"));
$_block_repeat=true;
echo $_block_plugin83->render(array('class'=>"col-auto nav-mobile-header-name ml-auto-util"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <span class="nav-offcanvas-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'menuName'),$_smarty_tpl ) );?>
</span>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6092501906790f96e96f051_57617467', 'layout-header-categories-include-categories-mega-back', $this->tplIndex);
?>

                <?php $_block_repeat=false;
echo $_block_plugin83->render(array('class'=>"col-auto nav-mobile-header-name ml-auto-util"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php $_block_repeat=false;
echo $_block_plugin81->render(array('class'=>"align-items-center-util"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <hr class="nav-mobile-header-hr" />
            </div>
        <?php
}
}
/* {/block 'layout-header-categories-include-include-categories-header'} */
/* {block 'layout-header-jtl-header-include-include-categories-mega-home'} */
class Block_18048596466790f96e971b41_62969957 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <li class="nav-home-button nav-item nav-scrollbar-item d-none">
                            <?php $_block_plugin86 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin86, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('class'=>"nav-link",'href'=>$_smarty_tpl->tpl_vars['ShopURL']->value,'title'=>$_smarty_tpl->tpl_vars['Einstellungen']->value['global']['global_shopname']));
$_block_repeat=true;
echo $_block_plugin86->render(array('class'=>"nav-link",'href'=>$_smarty_tpl->tpl_vars['ShopURL']->value,'title'=>$_smarty_tpl->tpl_vars['Einstellungen']->value['global']['global_shopname']), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <span class="fas fa-home"></span>
                            <?php $_block_repeat=false;
echo $_block_plugin86->render(array('class'=>"nav-link",'href'=>$_smarty_tpl->tpl_vars['ShopURL']->value,'title'=>$_smarty_tpl->tpl_vars['Einstellungen']->value['global']['global_shopname']), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        </li>
                    <?php
}
}
/* {/block 'layout-header-jtl-header-include-include-categories-mega-home'} */
/* {block 'layout-header-categories-include-include-categories-mega'} */
class Block_14054587376790f96e972d77_94838889 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_smarty_tpl->_subTemplateRender('file:snippets/categories_mega.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php
}
}
/* {/block 'layout-header-categories-include-include-categories-mega'} */
/* {block 'layout-header-categories-include-include-categories-body'} */
class Block_6583719776790f96e970be1_04504822 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div class="nav-mobile-body">
                <?php $_block_plugin85 = isset($_smarty_tpl->smarty->registered_plugins['block']['navbarnav'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['navbarnav'][0][0] : null;
if (!is_callable(array($_block_plugin85, 'render'))) {
throw new SmartyException('block tag \'navbarnav\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('navbarnav', array('class'=>"nav-scrollbar-inner mr-auto"));
$_block_repeat=true;
echo $_block_plugin85->render(array('class'=>"nav-scrollbar-inner mr-auto"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php if ((($tmp = $_smarty_tpl->tpl_vars['menuScroll']->value ?? null)===null||$tmp==='' ? false : $tmp)) {?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18048596466790f96e971b41_62969957', 'layout-header-jtl-header-include-include-categories-mega-home', $this->tplIndex);
?>

                <?php }?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14054587376790f96e972d77_94838889', 'layout-header-categories-include-include-categories-mega', $this->tplIndex);
?>

                <?php $_block_repeat=false;
echo $_block_plugin85->render(array('class'=>"nav-scrollbar-inner mr-auto"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            </div>
        <?php
}
}
/* {/block 'layout-header-categories-include-include-categories-body'} */
/* {block 'layout-header-categories'} */
class Block_3290461656790f96e96a8d2_85747008 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'layout-header-categories' => 
  array (
    0 => 'Block_3290461656790f96e96a8d2_85747008',
  ),
  'layout-header-categories-include-include-categories-header' => 
  array (
    0 => 'Block_5217611696790f96e96c8e4_80422777',
  ),
  'layout-header-categories-include-categories-mega-toggler' => 
  array (
    0 => 'Block_17532369356790f96e96e0e4_68981134',
  ),
  'layout-header-categories-include-categories-mega-back' => 
  array (
    0 => 'Block_6092501906790f96e96f051_57617467',
  ),
  'layout-header-categories-include-include-categories-body' => 
  array (
    0 => 'Block_6583719776790f96e970be1_04504822',
  ),
  'layout-header-jtl-header-include-include-categories-mega-home' => 
  array (
    0 => 'Block_18048596466790f96e971b41_62969957',
  ),
  'layout-header-categories-include-include-categories-mega' => 
  array (
    0 => 'Block_14054587376790f96e972d77_94838889',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="mainNavigation" class="collapse navbar-collapse <?php if ((($tmp = $_smarty_tpl->tpl_vars['menuMultipleRows']->value ?? null)===null||$tmp==='' ? false : $tmp)) {?>nav-multiple-row<?php } else { ?>nav-scrollbar<?php }?>">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5217611696790f96e96c8e4_80422777', 'layout-header-categories-include-include-categories-header', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6583719776790f96e970be1_04504822', 'layout-header-categories-include-include-categories-body', $this->tplIndex);
?>

    </div>
<?php
}
}
/* {/block 'layout-header-categories'} */
}

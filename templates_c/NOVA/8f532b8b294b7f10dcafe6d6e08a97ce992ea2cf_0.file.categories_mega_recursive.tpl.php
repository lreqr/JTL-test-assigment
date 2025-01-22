<?php
/* Smarty version 4.3.1, created on 2025-01-22 14:58:08
  from 'C:\OSPanel\domains\JTL_shop\templates\NOVA\snippets\categories_mega_recursive.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6790f970ee31f6_26197158',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f532b8b294b7f10dcafe6d6e08a97ce992ea2cf' => 
    array (
      0 => 'C:\\OSPanel\\domains\\JTL_shop\\templates\\NOVA\\snippets\\categories_mega_recursive.tpl',
      1 => 1694613031,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:snippets/image.tpl' => 1,
    'file:snippets/categories_mega_recursive.tpl' => 2,
  ),
),false)) {
function content_6790f970ee31f6_26197158 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1180706936790f970ed06f9_63000215', 'snippets-categories-mega-recursive');
?>

<?php }
/* {block 'snippets-categories-mega-recursive-max-subsub-items'} */
class Block_5891531196790f970ed0c22_26808909 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php ob_start();
if ($_smarty_tpl->tpl_vars['isMobile']->value) {
echo "5";
} else {
echo "2";
}
$_prefixVariable59=ob_get_clean();
$_smarty_tpl->_assignInScope('max_subsub_items', $_prefixVariable59);?>
    <?php
}
}
/* {/block 'snippets-categories-mega-recursive-max-subsub-items'} */
/* {block 'snippets-categories-mega-recursive-main-link'} */
class Block_14621069426790f970ed2212_62086487 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OSPanel\\domains\\JTL_shop\\includes\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>

        <?php ob_start();
if ($_smarty_tpl->tpl_vars['firstChild']->value) {
echo "submenu-headline submenu-headline-toplevel";
}
$_prefixVariable60=ob_get_clean();
ob_start();
if ($_smarty_tpl->tpl_vars['mainCategory']->value->hasChildren() && $_smarty_tpl->tpl_vars['subCategory']->value < $_smarty_tpl->tpl_vars['max_subsub_items']->value && $_smarty_tpl->tpl_vars['Einstellungen']->value['template']['megamenu']['show_subcategories'] !== 'N') {
echo "nav-link dropdown-toggle";
}
$_prefixVariable61=ob_get_clean();
$_block_plugin112 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin112, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_smarty_tpl->tpl_vars['mainCategory']->value->getURL(),'class'=>"categories-recursive-link d-lg-block ".$_prefixVariable60." ".((string)$_smarty_tpl->tpl_vars['subCategory']->value)." ".$_prefixVariable61,'aria'=>array("expanded"=>"false"),'data'=>array("category-id"=>$_smarty_tpl->tpl_vars['mainCategory']->value->getID())));
$_block_repeat=true;
echo $_block_plugin112->render(array('href'=>$_smarty_tpl->tpl_vars['mainCategory']->value->getURL(),'class'=>"categories-recursive-link d-lg-block ".$_prefixVariable60." ".((string)$_smarty_tpl->tpl_vars['subCategory']->value)." ".$_prefixVariable61,'aria'=>array("expanded"=>"false"),'data'=>array("category-id"=>$_smarty_tpl->tpl_vars['mainCategory']->value->getID())), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php if ($_smarty_tpl->tpl_vars['firstChild']->value && $_smarty_tpl->tpl_vars['Einstellungen']->value['template']['megamenu']['show_category_images'] !== 'N' && (!$_smarty_tpl->tpl_vars['isMobile']->value || $_smarty_tpl->tpl_vars['isTablet']->value)) {?>
                <?php $_smarty_tpl->_assignInScope('imgAlt', $_smarty_tpl->tpl_vars['mainCategory']->value->getAttribute('img_alt'));?>
                <?php ob_start();
if (empty($_smarty_tpl->tpl_vars['imgAlt']->value->cWert)) {
echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['mainCategory']->value->getName(), ENT_QUOTES, 'utf-8', true);
} else {
echo (string)$_smarty_tpl->tpl_vars['imgAlt']->value->cWert;
}
$_prefixVariable62=ob_get_clean();
$_smarty_tpl->_subTemplateRender('file:snippets/image.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('class'=>'submenu-headline-image','item'=>$_smarty_tpl->tpl_vars['mainCategory']->value,'square'=>false,'srcSize'=>'sm','alt'=>$_prefixVariable62), 0, false);
?>
            <?php }?>
            <span class="text-truncate d-block">
                <?php echo $_smarty_tpl->tpl_vars['mainCategory']->value->getShortName();
if ($_smarty_tpl->tpl_vars['mainCategory']->value->hasChildren() && $_smarty_tpl->tpl_vars['subCategory']->value >= $_smarty_tpl->tpl_vars['max_subsub_items']->value) {?><span class="more-subcategories">&nbsp;(<?php echo smarty_modifier_count($_smarty_tpl->tpl_vars['mainCategory']->value->getChildren());?>
)</span><?php }?>
            </span>
        <?php $_block_repeat=false;
echo $_block_plugin112->render(array('href'=>$_smarty_tpl->tpl_vars['mainCategory']->value->getURL(),'class'=>"categories-recursive-link d-lg-block ".$_prefixVariable60." ".((string)$_smarty_tpl->tpl_vars['subCategory']->value)." ".$_prefixVariable61,'aria'=>array("expanded"=>"false"),'data'=>array("category-id"=>$_smarty_tpl->tpl_vars['mainCategory']->value->getID())), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php
}
}
/* {/block 'snippets-categories-mega-recursive-main-link'} */
/* {block 'snippets-categories-mega-recursive-child-header'} */
class Block_5394625906790f970edc086_84794309 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <li class="nav-item d-lg-none">
                            <?php $_block_plugin114 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin114, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_smarty_tpl->tpl_vars['mainCategory']->value->getURL(),'nofollow'=>true));
$_block_repeat=true;
echo $_block_plugin114->render(array('href'=>$_smarty_tpl->tpl_vars['mainCategory']->value->getURL(),'nofollow'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <strong class="nav-mobile-heading">
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'menuShow','printf'=>$_smarty_tpl->tpl_vars['mainCategory']->value->getShortName()),$_smarty_tpl ) );?>

                                </strong>
                            <?php $_block_repeat=false;
echo $_block_plugin114->render(array('href'=>$_smarty_tpl->tpl_vars['mainCategory']->value->getURL(),'nofollow'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        </li>
                    <?php
}
}
/* {/block 'snippets-categories-mega-recursive-child-header'} */
/* {block 'snippets-categories-mega-recursive-child-category-child'} */
class Block_6315566736790f970edeb32_84975894 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <li class="nav-item dropdown">
                                        <?php $_smarty_tpl->_subTemplateRender('file:snippets/categories_mega_recursive.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('mainCategory'=>$_smarty_tpl->tpl_vars['category']->value,'firstChild'=>false,'subCategory'=>$_smarty_tpl->tpl_vars['subCategory']->value+1), 0, true);
?>
                                    </li>
                                <?php
}
}
/* {/block 'snippets-categories-mega-recursive-child-category-child'} */
/* {block 'snippets-categories-mega-recursivechild-category-no-child'} */
class Block_16497826406790f970edfc94_76689924 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OSPanel\\domains\\JTL_shop\\includes\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>

                                    <?php $_block_plugin115 = isset($_smarty_tpl->smarty->registered_plugins['block']['navitem'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['navitem'][0][0] : null;
if (!is_callable(array($_block_plugin115, 'render'))) {
throw new SmartyException('block tag \'navitem\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('navitem', array('href'=>$_smarty_tpl->tpl_vars['category']->value->getURL(),'data'=>array("category-id"=>$_smarty_tpl->tpl_vars['category']->value->getID())));
$_block_repeat=true;
echo $_block_plugin115->render(array('href'=>$_smarty_tpl->tpl_vars['category']->value->getURL(),'data'=>array("category-id"=>$_smarty_tpl->tpl_vars['category']->value->getID())), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                        <span class="text-truncate d-block">
                                            <?php echo $_smarty_tpl->tpl_vars['category']->value->getShortName();
if ($_smarty_tpl->tpl_vars['category']->value->hasChildren()) {?><span class="more-subcategories">&nbsp;(<?php echo smarty_modifier_count($_smarty_tpl->tpl_vars['category']->value->getChildren());?>
)</span><?php }?>
                                        </span>
                                    <?php $_block_repeat=false;
echo $_block_plugin115->render(array('href'=>$_smarty_tpl->tpl_vars['category']->value->getURL(),'data'=>array("category-id"=>$_smarty_tpl->tpl_vars['category']->value->getID())), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                <?php
}
}
/* {/block 'snippets-categories-mega-recursivechild-category-no-child'} */
/* {block 'snippets-categories-mega-recursive-child-categories'} */
class Block_4065998866790f970edd545_53065871 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mainCategory']->value->getChildren(), 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                            <?php if ($_smarty_tpl->tpl_vars['category']->value->hasChildren() && $_smarty_tpl->tpl_vars['subCategory']->value+1 < $_smarty_tpl->tpl_vars['max_subsub_items']->value) {?>
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6315566736790f970edeb32_84975894', 'snippets-categories-mega-recursive-child-category-child', $this->tplIndex);
?>

                            <?php } else { ?>
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16497826406790f970edfc94_76689924', 'snippets-categories-mega-recursivechild-category-no-child', $this->tplIndex);
?>

                            <?php }?>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php
}
}
/* {/block 'snippets-categories-mega-recursive-child-categories'} */
/* {block 'snippets-categories-mega-recursive-child-content'} */
class Block_20410319016790f970edbb60_26935495 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div class="categories-recursive-dropdown dropdown-menu">
                <?php $_block_plugin113 = isset($_smarty_tpl->smarty->registered_plugins['block']['nav'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['nav'][0][0] : null;
if (!is_callable(array($_block_plugin113, 'render'))) {
throw new SmartyException('block tag \'nav\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('nav', array());
$_block_repeat=true;
echo $_block_plugin113->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5394625906790f970edc086_84794309', 'snippets-categories-mega-recursive-child-header', $this->tplIndex);
?>

                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4065998866790f970edd545_53065871', 'snippets-categories-mega-recursive-child-categories', $this->tplIndex);
?>

                <?php $_block_repeat=false;
echo $_block_plugin113->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            </div>
        <?php
}
}
/* {/block 'snippets-categories-mega-recursive-child-content'} */
/* {block 'snippets-categories-mega-recursive'} */
class Block_1180706936790f970ed06f9_63000215 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'snippets-categories-mega-recursive' => 
  array (
    0 => 'Block_1180706936790f970ed06f9_63000215',
  ),
  'snippets-categories-mega-recursive-max-subsub-items' => 
  array (
    0 => 'Block_5891531196790f970ed0c22_26808909',
  ),
  'snippets-categories-mega-recursive-main-link' => 
  array (
    0 => 'Block_14621069426790f970ed2212_62086487',
  ),
  'snippets-categories-mega-recursive-child-content' => 
  array (
    0 => 'Block_20410319016790f970edbb60_26935495',
  ),
  'snippets-categories-mega-recursive-child-header' => 
  array (
    0 => 'Block_5394625906790f970edc086_84794309',
  ),
  'snippets-categories-mega-recursive-child-categories' => 
  array (
    0 => 'Block_4065998866790f970edd545_53065871',
  ),
  'snippets-categories-mega-recursive-child-category-child' => 
  array (
    0 => 'Block_6315566736790f970edeb32_84975894',
  ),
  'snippets-categories-mega-recursivechild-category-no-child' => 
  array (
    0 => 'Block_16497826406790f970edfc94_76689924',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5891531196790f970ed0c22_26808909', 'snippets-categories-mega-recursive-max-subsub-items', $this->tplIndex);
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14621069426790f970ed2212_62086487', 'snippets-categories-mega-recursive-main-link', $this->tplIndex);
?>

    <?php if ($_smarty_tpl->tpl_vars['mainCategory']->value->hasChildren() && $_smarty_tpl->tpl_vars['Einstellungen']->value['template']['megamenu']['show_subcategories'] !== 'N' && $_smarty_tpl->tpl_vars['subCategory']->value < $_smarty_tpl->tpl_vars['max_subsub_items']->value) {?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20410319016790f970edbb60_26935495', 'snippets-categories-mega-recursive-child-content', $this->tplIndex);
?>

    <?php }
}
}
/* {/block 'snippets-categories-mega-recursive'} */
}

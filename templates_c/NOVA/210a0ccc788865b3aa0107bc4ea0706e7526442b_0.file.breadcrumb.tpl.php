<?php
/* Smarty version 4.3.1, created on 2025-01-22 14:58:18
  from 'C:\OSPanel\domains\JTL_shop\templates\NOVA\layout\breadcrumb.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6790f97a91f2a5_20481963',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '210a0ccc788865b3aa0107bc4ea0706e7526442b' => 
    array (
      0 => 'C:\\OSPanel\\domains\\JTL_shop\\templates\\NOVA\\layout\\breadcrumb.tpl',
      1 => 1694613031,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6790f97a91f2a5_20481963 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19123881626790f97a902e58_60552983', 'layout-breadcrumb');
?>

<?php }
/* {block 'layout-breadcrumb-sm-back'} */
class Block_8489034296790f97a9070e0_30282647 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OSPanel\\domains\\JTL_shop\\includes\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
$_smarty_tpl->_assignInScope('parent', $_smarty_tpl->tpl_vars['Brotnavi']->value[max((smarty_modifier_count($_smarty_tpl->tpl_vars['Brotnavi']->value)-2),0)]);
if ($_smarty_tpl->tpl_vars['nSeitenTyp']->value === (defined('PAGE_ARTIKEL') ? constant('PAGE_ARTIKEL') : null)) {
echo '<script'; ?>
>(function(){
                                if (window.should_render_backtolist_link) {
                                    // render back-to-list-link if allowed
                                    document.write(`
                                        <?php $_block_plugin134 = isset($_smarty_tpl->smarty->registered_plugins['block']['breadcrumbitem'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['breadcrumbitem'][0][0] : null;
if (!is_callable(array($_block_plugin134, 'render'))) {
throw new SmartyException('block tag \'breadcrumbitem\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('breadcrumbitem', array('attribs'=>array("onclick"=>"$".".evo.article().navigateBackToList()"),'class'=>"breadcrumb-backtolist",'href'=>"#"));
$_block_repeat=true;
echo $_block_plugin134->render(array('attribs'=>array("onclick"=>"$".".evo.article().navigateBackToList()"),'class'=>"breadcrumb-backtolist",'href'=>"#"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'goBackToList'),$_smarty_tpl ) );?>

                                        <?php $_block_repeat=false;
echo $_block_plugin134->render(array('attribs'=>array("onclick"=>"$".".evo.article().navigateBackToList()"),'class'=>"breadcrumb-backtolist",'href'=>"#"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                    `);
                                }
                            })();<?php echo '</script'; ?>
><?php }
if ($_smarty_tpl->tpl_vars['parent']->value !== null) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sanitizeTitle'][0], array( array('title'=>$_smarty_tpl->tpl_vars['parent']->value->getName()),$_smarty_tpl ) );
$_prefixVariable68 = ob_get_clean();
$_block_plugin135 = isset($_smarty_tpl->smarty->registered_plugins['block']['breadcrumbitem'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['breadcrumbitem'][0][0] : null;
if (!is_callable(array($_block_plugin135, 'render'))) {
throw new SmartyException('block tag \'breadcrumbitem\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('breadcrumbitem', array('class'=>"breadcrumb-arrow",'href'=>$_smarty_tpl->tpl_vars['parent']->value->getURLFull(),'title'=>$_prefixVariable68));
$_block_repeat=true;
echo $_block_plugin135->render(array('class'=>"breadcrumb-arrow",'href'=>$_smarty_tpl->tpl_vars['parent']->value->getURLFull(),'title'=>$_prefixVariable68), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><span itemprop="name"><?php echo $_smarty_tpl->tpl_vars['parent']->value->getName();?>
</span><?php $_block_repeat=false;
echo $_block_plugin135->render(array('class'=>"breadcrumb-arrow",'href'=>$_smarty_tpl->tpl_vars['parent']->value->getURLFull(),'title'=>$_prefixVariable68), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
/* {/block 'layout-breadcrumb-sm-back'} */
/* {block 'layout-breadcrumb-first-item'} */
class Block_7214483276790f97a90d639_62962100 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sanitizeTitle'][0], array( array('title'=>$_smarty_tpl->tpl_vars['oItem']->value->getName()),$_smarty_tpl ) );
$_prefixVariable69 = ob_get_clean();
$_block_plugin136 = isset($_smarty_tpl->smarty->registered_plugins['block']['breadcrumbitem'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['breadcrumbitem'][0][0] : null;
if (!is_callable(array($_block_plugin136, 'render'))) {
throw new SmartyException('block tag \'breadcrumbitem\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('breadcrumbitem', array('class'=>"first",'router-tag-itemprop'=>"url",'href'=>$_smarty_tpl->tpl_vars['oItem']->value->getURLFull(),'title'=>$_prefixVariable69,'itemprop'=>"itemListElement",'itemscope'=>true,'itemtype'=>"https://schema.org/ListItem"));
$_block_repeat=true;
echo $_block_plugin136->render(array('class'=>"first",'router-tag-itemprop'=>"url",'href'=>$_smarty_tpl->tpl_vars['oItem']->value->getURLFull(),'title'=>$_prefixVariable69,'itemprop'=>"itemListElement",'itemscope'=>true,'itemtype'=>"https://schema.org/ListItem"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><span itemprop="name"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['oItem']->value->getName(), ENT_QUOTES, 'utf-8', true);?>
</span><meta itemprop="item" content="<?php echo $_smarty_tpl->tpl_vars['oItem']->value->getURLFull();?>
" /><meta itemprop="position" content="<?php echo $_smarty_tpl->tpl_vars['oItem']->iteration;?>
" /><?php $_block_repeat=false;
echo $_block_plugin136->render(array('class'=>"first",'router-tag-itemprop'=>"url",'href'=>$_smarty_tpl->tpl_vars['oItem']->value->getURLFull(),'title'=>$_prefixVariable69,'itemprop'=>"itemListElement",'itemscope'=>true,'itemtype'=>"https://schema.org/ListItem"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
/* {/block 'layout-breadcrumb-first-item'} */
/* {block 'layout-breadcrumb-last-item'} */
class Block_11992652526790f97a910a63_03870236 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sanitizeTitle'][0], array( array('title'=>$_smarty_tpl->tpl_vars['oItem']->value->getName()),$_smarty_tpl ) );
$_prefixVariable70 = ob_get_clean();
$_block_plugin137 = isset($_smarty_tpl->smarty->registered_plugins['block']['breadcrumbitem'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['breadcrumbitem'][0][0] : null;
if (!is_callable(array($_block_plugin137, 'render'))) {
throw new SmartyException('block tag \'breadcrumbitem\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('breadcrumbitem', array('class'=>"last active",'router-tag-itemprop'=>"url",'href'=>((string)$_smarty_tpl->tpl_vars['oItem']->value->getURLFull()),'title'=>$_prefixVariable70,'itemprop'=>"itemListElement",'itemscope'=>true,'itemtype'=>"https://schema.org/ListItem"));
$_block_repeat=true;
echo $_block_plugin137->render(array('class'=>"last active",'router-tag-itemprop'=>"url",'href'=>((string)$_smarty_tpl->tpl_vars['oItem']->value->getURLFull()),'title'=>$_prefixVariable70,'itemprop'=>"itemListElement",'itemscope'=>true,'itemtype'=>"https://schema.org/ListItem"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><span itemprop="name"><?php if ($_smarty_tpl->tpl_vars['oItem']->value->getName() !== null) {
echo $_smarty_tpl->tpl_vars['oItem']->value->getName();
} elseif (!empty($_smarty_tpl->tpl_vars['Suchergebnisse']->value->getSearchTermWrite())) {
echo $_smarty_tpl->tpl_vars['Suchergebnisse']->value->getSearchTermWrite();
}?></span><meta itemprop="item" content="<?php echo $_smarty_tpl->tpl_vars['oItem']->value->getURLFull();?>
" /><meta itemprop="position" content="<?php echo $_smarty_tpl->tpl_vars['oItem']->iteration;?>
" /><?php $_block_repeat=false;
echo $_block_plugin137->render(array('class'=>"last active",'router-tag-itemprop'=>"url",'href'=>((string)$_smarty_tpl->tpl_vars['oItem']->value->getURLFull()),'title'=>$_prefixVariable70,'itemprop'=>"itemListElement",'itemscope'=>true,'itemtype'=>"https://schema.org/ListItem"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
/* {/block 'layout-breadcrumb-last-item'} */
/* {block 'layout-breadcrumb-item'} */
class Block_894823886790f97a914e41_36238932 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sanitizeTitle'][0], array( array('title'=>$_smarty_tpl->tpl_vars['oItem']->value->getName()),$_smarty_tpl ) );
$_prefixVariable71 = ob_get_clean();
$_block_plugin138 = isset($_smarty_tpl->smarty->registered_plugins['block']['breadcrumbitem'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['breadcrumbitem'][0][0] : null;
if (!is_callable(array($_block_plugin138, 'render'))) {
throw new SmartyException('block tag \'breadcrumbitem\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('breadcrumbitem', array('router-tag-itemprop'=>"url",'href'=>$_smarty_tpl->tpl_vars['oItem']->value->getURLFull(),'title'=>$_prefixVariable71,'itemprop'=>"itemListElement",'itemscope'=>true,'itemtype'=>"https://schema.org/ListItem"));
$_block_repeat=true;
echo $_block_plugin138->render(array('router-tag-itemprop'=>"url",'href'=>$_smarty_tpl->tpl_vars['oItem']->value->getURLFull(),'title'=>$_prefixVariable71,'itemprop'=>"itemListElement",'itemscope'=>true,'itemtype'=>"https://schema.org/ListItem"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><span itemprop="name"><?php echo $_smarty_tpl->tpl_vars['oItem']->value->getName();?>
</span><meta itemprop="item" content="<?php echo $_smarty_tpl->tpl_vars['oItem']->value->getURLFull();?>
" /><meta itemprop="position" content="<?php echo $_smarty_tpl->tpl_vars['oItem']->iteration;?>
" /><?php $_block_repeat=false;
echo $_block_plugin138->render(array('router-tag-itemprop'=>"url",'href'=>$_smarty_tpl->tpl_vars['oItem']->value->getURLFull(),'title'=>$_prefixVariable71,'itemprop'=>"itemListElement",'itemscope'=>true,'itemtype'=>"https://schema.org/ListItem"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
/* {/block 'layout-breadcrumb-item'} */
/* {block 'layout-breadcrumb-items'} */
class Block_10402404666790f97a90c4d7_18325896 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Brotnavi']->value, 'oItem', true);
$_smarty_tpl->tpl_vars['oItem']->iteration = 0;
$_smarty_tpl->tpl_vars['oItem']->index = -1;
$_smarty_tpl->tpl_vars['oItem']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['oItem']->value) {
$_smarty_tpl->tpl_vars['oItem']->do_else = false;
$_smarty_tpl->tpl_vars['oItem']->iteration++;
$_smarty_tpl->tpl_vars['oItem']->index++;
$_smarty_tpl->tpl_vars['oItem']->first = !$_smarty_tpl->tpl_vars['oItem']->index;
$_smarty_tpl->tpl_vars['oItem']->last = $_smarty_tpl->tpl_vars['oItem']->iteration === $_smarty_tpl->tpl_vars['oItem']->total;
$__foreach_oItem_99_saved = $_smarty_tpl->tpl_vars['oItem'];
if ($_smarty_tpl->tpl_vars['oItem']->first) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7214483276790f97a90d639_62962100', 'layout-breadcrumb-first-item', $this->tplIndex);
} elseif ($_smarty_tpl->tpl_vars['oItem']->last) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11992652526790f97a910a63_03870236', 'layout-breadcrumb-last-item', $this->tplIndex);
} else {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_894823886790f97a914e41_36238932', 'layout-breadcrumb-item', $this->tplIndex);
}
$_smarty_tpl->tpl_vars['oItem'] = $__foreach_oItem_99_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
/* {/block 'layout-breadcrumb-items'} */
/* {block 'layout-header-product-pagination'} */
class Block_3446397266790f97a918b29_27555883 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['NavigationBlaettern']->value->naechsterArtikel->kArtikel))) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sanitizeTitle'][0], array( array('title'=>$_smarty_tpl->tpl_vars['NavigationBlaettern']->value->naechsterArtikel->cName),$_smarty_tpl ) );
$_prefixVariable72 = ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('section'=>'productDetails','key'=>'nextProduct'),$_smarty_tpl ) );
$_prefixVariable73=ob_get_clean();
$_block_plugin140 = isset($_smarty_tpl->smarty->registered_plugins['block']['button'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['button'][0][0] : null;
if (!is_callable(array($_block_plugin140, 'render'))) {
throw new SmartyException('block tag \'button\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('button', array('variant'=>"link",'href'=>$_smarty_tpl->tpl_vars['NavigationBlaettern']->value->naechsterArtikel->cURLFull,'title'=>$_prefixVariable72,'aria'=>array("label"=>$_prefixVariable73.": ".((string)$_smarty_tpl->tpl_vars['NavigationBlaettern']->value->naechsterArtikel->cName))));
$_block_repeat=true;
echo $_block_plugin140->render(array('variant'=>"link",'href'=>$_smarty_tpl->tpl_vars['NavigationBlaettern']->value->naechsterArtikel->cURLFull,'title'=>$_prefixVariable72,'aria'=>array("label"=>$_prefixVariable73.": ".((string)$_smarty_tpl->tpl_vars['NavigationBlaettern']->value->naechsterArtikel->cName))), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><span class="fa fa-chevron-right"></span><?php $_block_repeat=false;
echo $_block_plugin140->render(array('variant'=>"link",'href'=>$_smarty_tpl->tpl_vars['NavigationBlaettern']->value->naechsterArtikel->cURLFull,'title'=>$_prefixVariable72,'aria'=>array("label"=>$_prefixVariable73.": ".((string)$_smarty_tpl->tpl_vars['NavigationBlaettern']->value->naechsterArtikel->cName))), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
if ((isset($_smarty_tpl->tpl_vars['NavigationBlaettern']->value->vorherigerArtikel->kArtikel))) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sanitizeTitle'][0], array( array('title'=>$_smarty_tpl->tpl_vars['NavigationBlaettern']->value->vorherigerArtikel->cName),$_smarty_tpl ) );
$_prefixVariable74 = ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('section'=>'productDetails','key'=>'previousProduct'),$_smarty_tpl ) );
$_prefixVariable75=ob_get_clean();
$_block_plugin141 = isset($_smarty_tpl->smarty->registered_plugins['block']['button'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['button'][0][0] : null;
if (!is_callable(array($_block_plugin141, 'render'))) {
throw new SmartyException('block tag \'button\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('button', array('variant'=>"link",'href'=>$_smarty_tpl->tpl_vars['NavigationBlaettern']->value->vorherigerArtikel->cURLFull,'title'=>$_prefixVariable74,'aria'=>array("label"=>$_prefixVariable75.": ".((string)$_smarty_tpl->tpl_vars['NavigationBlaettern']->value->vorherigerArtikel->cName))));
$_block_repeat=true;
echo $_block_plugin141->render(array('variant'=>"link",'href'=>$_smarty_tpl->tpl_vars['NavigationBlaettern']->value->vorherigerArtikel->cURLFull,'title'=>$_prefixVariable74,'aria'=>array("label"=>$_prefixVariable75.": ".((string)$_smarty_tpl->tpl_vars['NavigationBlaettern']->value->vorherigerArtikel->cName))), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><span class="fa fa-chevron-left"></span><?php $_block_repeat=false;
echo $_block_plugin141->render(array('variant'=>"link",'href'=>$_smarty_tpl->tpl_vars['NavigationBlaettern']->value->vorherigerArtikel->cURLFull,'title'=>$_prefixVariable74,'aria'=>array("label"=>$_prefixVariable75.": ".((string)$_smarty_tpl->tpl_vars['NavigationBlaettern']->value->vorherigerArtikel->cName))), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
/* {/block 'layout-header-product-pagination'} */
/* {block 'layout-breadcrumb'} */
class Block_19123881626790f97a902e58_60552983 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'layout-breadcrumb' => 
  array (
    0 => 'Block_19123881626790f97a902e58_60552983',
  ),
  'layout-breadcrumb-sm-back' => 
  array (
    0 => 'Block_8489034296790f97a9070e0_30282647',
  ),
  'layout-breadcrumb-items' => 
  array (
    0 => 'Block_10402404666790f97a90c4d7_18325896',
  ),
  'layout-breadcrumb-first-item' => 
  array (
    0 => 'Block_7214483276790f97a90d639_62962100',
  ),
  'layout-breadcrumb-last-item' => 
  array (
    0 => 'Block_11992652526790f97a910a63_03870236',
  ),
  'layout-breadcrumb-item' => 
  array (
    0 => 'Block_894823886790f97a914e41_36238932',
  ),
  'layout-header-product-pagination' => 
  array (
    0 => 'Block_3446397266790f97a918b29_27555883',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['has_boxes'][0], array( array('position'=>'left','assign'=>'hasLeftBox'),$_smarty_tpl ) );
if (!empty($_smarty_tpl->tpl_vars['Brotnavi']->value) && !$_smarty_tpl->tpl_vars['bExclusive']->value && !$_smarty_tpl->tpl_vars['bAjaxRequest']->value && $_smarty_tpl->tpl_vars['nSeitenTyp']->value !== (defined('PAGE_STARTSEITE') ? constant('PAGE_STARTSEITE') : null) && $_smarty_tpl->tpl_vars['nSeitenTyp']->value !== (defined('PAGE_BESTELLVORGANG') ? constant('PAGE_BESTELLVORGANG') : null) && $_smarty_tpl->tpl_vars['nSeitenTyp']->value !== (defined('PAGE_BESTELLSTATUS') ? constant('PAGE_BESTELLSTATUS') : null)) {
$_block_plugin131 = isset($_smarty_tpl->smarty->registered_plugins['block']['row'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['row'][0][0] : null;
if (!is_callable(array($_block_plugin131, 'render'))) {
throw new SmartyException('block tag \'row\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('row', array('no-gutters'=>true,'class'=>"breadcrumb-wrapper"));
$_block_repeat=true;
echo $_block_plugin131->render(array('no-gutters'=>true,'class'=>"breadcrumb-wrapper"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_plugin132 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin132, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>"auto"));
$_block_repeat=true;
echo $_block_plugin132->render(array('cols'=>"auto"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_plugin133 = isset($_smarty_tpl->smarty->registered_plugins['block']['breadcrumb'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['breadcrumb'][0][0] : null;
if (!is_callable(array($_block_plugin133, 'render'))) {
throw new SmartyException('block tag \'breadcrumb\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('breadcrumb', array('id'=>"breadcrumb",'itemprop'=>"breadcrumb",'itemscope'=>true,'itemtype'=>"https://schema.org/BreadcrumbList"));
$_block_repeat=true;
echo $_block_plugin133->render(array('id'=>"breadcrumb",'itemprop'=>"breadcrumb",'itemscope'=>true,'itemtype'=>"https://schema.org/BreadcrumbList"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8489034296790f97a9070e0_30282647', 'layout-breadcrumb-sm-back', $this->tplIndex);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10402404666790f97a90c4d7_18325896', 'layout-breadcrumb-items', $this->tplIndex);
$_block_repeat=false;
echo $_block_plugin133->render(array('id'=>"breadcrumb",'itemprop'=>"breadcrumb",'itemscope'=>true,'itemtype'=>"https://schema.org/BreadcrumbList"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_repeat=false;
echo $_block_plugin132->render(array('cols'=>"auto"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin139 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin139, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('class'=>'navigation-arrows'));
$_block_repeat=true;
echo $_block_plugin139->render(array('class'=>'navigation-arrows'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
if (!empty($_smarty_tpl->tpl_vars['NavigationBlaettern']->value)) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3446397266790f97a918b29_27555883', 'layout-header-product-pagination', $this->tplIndex);
}
$_block_repeat=false;
echo $_block_plugin139->render(array('class'=>'navigation-arrows'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_repeat=false;
echo $_block_plugin131->render(array('no-gutters'=>true,'class'=>"breadcrumb-wrapper"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
/* {/block 'layout-breadcrumb'} */
}

<?php
/* Smarty version 4.3.1, created on 2025-01-22 14:57:52
  from 'C:\OSPanel\domains\JTL_shop\templates\NOVA\layout\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6790f9604fb9f2_63330999',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '68bb88a47e1b61d2ad613e8b42d548f19276dfe4' => 
    array (
      0 => 'C:\\OSPanel\\domains\\JTL_shop\\templates\\NOVA\\layout\\index.tpl',
      1 => 1694613031,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/header.tpl' => 1,
    'file:layout/modal_header.tpl' => 1,
    'file:snippets/extension.tpl' => 1,
    'file:page/index.tpl' => 1,
    'file:page/shipping.tpl' => 1,
    'file:page/livesearch.tpl' => 1,
    'file:page/manufacturers.tpl' => 1,
    'file:page/newsletter_archive.tpl' => 1,
    'file:page/sitemap.tpl' => 1,
    'file:page/free_gift.tpl' => 1,
    'file:selectionwizard/index.tpl' => 1,
    'file:page/404.tpl' => 1,
    'file:layout/footer.tpl' => 1,
    'file:layout/modal_footer.tpl' => 1,
  ),
),false)) {
function content_6790f9604fb9f2_63330999 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_817429376790f9604c39b6_29403257', 'layout-index');
?>

<?php }
/* {block 'layout-index-plugin-template'} */
class Block_17590332956790f9604c4b28_23061509 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['cPluginTemplate']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        <?php
}
}
/* {/block 'layout-index-plugin-template'} */
/* {block 'layout-index-include-header'} */
class Block_20355044216790f9604c5838_21300842 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php if (!(isset($_smarty_tpl->tpl_vars['bAjaxRequest']->value)) || !$_smarty_tpl->tpl_vars['bAjaxRequest']->value) {?>
                <?php $_smarty_tpl->_subTemplateRender('file:layout/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php } else { ?>
                <?php $_smarty_tpl->_subTemplateRender('file:layout/modal_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php }?>
        <?php
}
}
/* {/block 'layout-index-include-header'} */
/* {block 'layout-index-heading'} */
class Block_3831777176790f9604c7468_98880964 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php if (!empty($_smarty_tpl->tpl_vars['Link']->value->getTitle())) {?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['opcMountPoint'][0], array( array('id'=>'opc_before_heading','inContainer'=>false),$_smarty_tpl ) );?>

                    <?php ob_start();
if ($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['theme']['left_sidebar'] === 'Y' && $_smarty_tpl->tpl_vars['boxesLeftActive']->value) {
echo "container-plus-sidebar";
}
$_prefixVariable5=ob_get_clean();
$_block_plugin10 = isset($_smarty_tpl->smarty->registered_plugins['block']['container'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['container'][0][0] : null;
if (!is_callable(array($_block_plugin10, 'render'))) {
throw new SmartyException('block tag \'container\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('container', array('fluid'=>$_smarty_tpl->tpl_vars['Link']->value->getIsFluid(),'class'=>"index-heading-wrapper ".$_prefixVariable5));
$_block_repeat=true;
echo $_block_plugin10->render(array('fluid'=>$_smarty_tpl->tpl_vars['Link']->value->getIsFluid(),'class'=>"index-heading-wrapper ".$_prefixVariable5), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <h1><?php echo $_smarty_tpl->tpl_vars['Link']->value->getTitle();?>
</h1>
                    <?php $_block_repeat=false;
echo $_block_plugin10->render(array('fluid'=>$_smarty_tpl->tpl_vars['Link']->value->getIsFluid(),'class'=>"index-heading-wrapper ".$_prefixVariable5), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php } elseif ((isset($_smarty_tpl->tpl_vars['bAjaxRequest']->value)) && $_smarty_tpl->tpl_vars['bAjaxRequest']->value) {?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['opcMountPoint'][0], array( array('id'=>'opc_before_heading','inContainer'=>false),$_smarty_tpl ) );?>

                    <?php ob_start();
if ($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['theme']['left_sidebar'] === 'Y' && $_smarty_tpl->tpl_vars['boxesLeftActive']->value) {
echo "container-plus-sidebar";
}
$_prefixVariable6=ob_get_clean();
$_block_plugin11 = isset($_smarty_tpl->smarty->registered_plugins['block']['container'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['container'][0][0] : null;
if (!is_callable(array($_block_plugin11, 'render'))) {
throw new SmartyException('block tag \'container\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('container', array('fluid'=>$_smarty_tpl->tpl_vars['Link']->value->getIsFluid(),'class'=>"index-heading-wrapper ".$_prefixVariable6));
$_block_repeat=true;
echo $_block_plugin11->render(array('fluid'=>$_smarty_tpl->tpl_vars['Link']->value->getIsFluid(),'class'=>"index-heading-wrapper ".$_prefixVariable6), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <h1><?php if (!empty($_smarty_tpl->tpl_vars['Link']->value->getMetaTitle())) {
echo $_smarty_tpl->tpl_vars['Link']->value->getMetaTitle();
} else {
echo $_smarty_tpl->tpl_vars['Link']->value->getName();
}?></h1>
                    <?php $_block_repeat=false;
echo $_block_plugin11->render(array('fluid'=>$_smarty_tpl->tpl_vars['Link']->value->getIsFluid(),'class'=>"index-heading-wrapper ".$_prefixVariable6), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php }?>
            <?php
}
}
/* {/block 'layout-index-heading'} */
/* {block 'layout-index-include-extension'} */
class Block_17544826996790f9604ce1f6_80234633 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_smarty_tpl->_subTemplateRender('file:snippets/extension.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php
}
}
/* {/block 'layout-index-include-extension'} */
/* {block 'layout-index-link-content'} */
class Block_15496710556790f9604cecf4_68053905 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php if (!empty($_smarty_tpl->tpl_vars['Link']->value->getContent())) {?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['opcMountPoint'][0], array( array('id'=>'opc_before_content','inContainer'=>false),$_smarty_tpl ) );?>

                    <?php ob_start();
if ($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['theme']['left_sidebar'] === 'Y' && $_smarty_tpl->tpl_vars['boxesLeftActive']->value) {
echo "container-plus-sidebar";
}
$_prefixVariable7=ob_get_clean();
$_block_plugin12 = isset($_smarty_tpl->smarty->registered_plugins['block']['container'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['container'][0][0] : null;
if (!is_callable(array($_block_plugin12, 'render'))) {
throw new SmartyException('block tag \'container\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('container', array('fluid'=>$_smarty_tpl->tpl_vars['Link']->value->getIsFluid(),'class'=>"link-content ".$_prefixVariable7));
$_block_repeat=true;
echo $_block_plugin12->render(array('fluid'=>$_smarty_tpl->tpl_vars['Link']->value->getIsFluid(),'class'=>"link-content ".$_prefixVariable7), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php echo $_smarty_tpl->tpl_vars['Link']->value->getContent();?>

                    <?php $_block_repeat=false;
echo $_block_plugin12->render(array('fluid'=>$_smarty_tpl->tpl_vars['Link']->value->getIsFluid(),'class'=>"link-content ".$_prefixVariable7), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php }?>
            <?php
}
}
/* {/block 'layout-index-link-content'} */
/* {block 'layout-index-link-type-tos'} */
class Block_10672371576790f9604d5724_99719824 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <div id="tos" class="well well-sm">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['opcMountPoint'][0], array( array('id'=>'opc_before_tos','inContainer'=>false),$_smarty_tpl ) );?>

                            <?php if ($_smarty_tpl->tpl_vars['AGB']->value !== false) {?>
                                <?php ob_start();
if ($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['theme']['left_sidebar'] === 'Y' && $_smarty_tpl->tpl_vars['boxesLeftActive']->value) {
echo "container-plus-sidebar";
}
$_prefixVariable8=ob_get_clean();
$_block_plugin13 = isset($_smarty_tpl->smarty->registered_plugins['block']['container'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['container'][0][0] : null;
if (!is_callable(array($_block_plugin13, 'render'))) {
throw new SmartyException('block tag \'container\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('container', array('fluid'=>$_smarty_tpl->tpl_vars['Link']->value->getIsFluid(),'class'=>$_prefixVariable8));
$_block_repeat=true;
echo $_block_plugin13->render(array('fluid'=>$_smarty_tpl->tpl_vars['Link']->value->getIsFluid(),'class'=>$_prefixVariable8), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <?php if ($_smarty_tpl->tpl_vars['AGB']->value->cAGBContentHtml) {?>
                                        <?php echo $_smarty_tpl->tpl_vars['AGB']->value->cAGBContentHtml;?>

                                    <?php } elseif ($_smarty_tpl->tpl_vars['AGB']->value->cAGBContentText) {?>
                                        <?php echo nl2br((string) $_smarty_tpl->tpl_vars['AGB']->value->cAGBContentText, (bool) 1);?>

                                    <?php }?>
                                <?php $_block_repeat=false;
echo $_block_plugin13->render(array('fluid'=>$_smarty_tpl->tpl_vars['Link']->value->getIsFluid(),'class'=>$_prefixVariable8), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php }?>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['opcMountPoint'][0], array( array('id'=>'opc_after_tos','inContainer'=>false),$_smarty_tpl ) );?>

                        </div>
                    <?php
}
}
/* {/block 'layout-index-link-type-tos'} */
/* {block 'layout-index-link-type-revocation'} */
class Block_8355831796790f9604de030_46106422 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <div id="revocation-instruction" class="well well-sm">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['opcMountPoint'][0], array( array('id'=>'opc_before_revocation','inContainer'=>false),$_smarty_tpl ) );?>

                            <?php if ($_smarty_tpl->tpl_vars['WRB']->value !== false) {?>
                                <?php ob_start();
if ($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['theme']['left_sidebar'] === 'Y' && $_smarty_tpl->tpl_vars['boxesLeftActive']->value) {
echo "container-plus-sidebar";
}
$_prefixVariable9=ob_get_clean();
$_block_plugin14 = isset($_smarty_tpl->smarty->registered_plugins['block']['container'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['container'][0][0] : null;
if (!is_callable(array($_block_plugin14, 'render'))) {
throw new SmartyException('block tag \'container\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('container', array('fluid'=>$_smarty_tpl->tpl_vars['Link']->value->getIsFluid(),'class'=>$_prefixVariable9));
$_block_repeat=true;
echo $_block_plugin14->render(array('fluid'=>$_smarty_tpl->tpl_vars['Link']->value->getIsFluid(),'class'=>$_prefixVariable9), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <?php if ($_smarty_tpl->tpl_vars['WRB']->value->cWRBContentHtml) {?>
                                        <?php echo $_smarty_tpl->tpl_vars['WRB']->value->cWRBContentHtml;?>

                                    <?php } elseif ($_smarty_tpl->tpl_vars['WRB']->value->cWRBContentText) {?>
                                        <?php echo nl2br((string) $_smarty_tpl->tpl_vars['WRB']->value->cWRBContentText, (bool) 1);?>

                                    <?php }?>
                                <?php $_block_repeat=false;
echo $_block_plugin14->render(array('fluid'=>$_smarty_tpl->tpl_vars['Link']->value->getIsFluid(),'class'=>$_prefixVariable9), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php }?>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['opcMountPoint'][0], array( array('id'=>'opc_after_revocation','inContainer'=>false),$_smarty_tpl ) );?>

                        </div>
                    <?php
}
}
/* {/block 'layout-index-link-type-revocation'} */
/* {block 'layout-index-link-type-revocation-form'} */
class Block_7284041156790f9604e2d05_05222824 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <div id="revocation-form" class="well well-sm">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['opcMountPoint'][0], array( array('id'=>'opc_before_revocation_form','inContainer'=>false),$_smarty_tpl ) );?>

                            <?php if ($_smarty_tpl->tpl_vars['WRB']->value !== false) {?>
                                <?php ob_start();
if ($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['theme']['left_sidebar'] === 'Y' && $_smarty_tpl->tpl_vars['boxesLeftActive']->value) {
echo "container-plus-sidebar";
}
$_prefixVariable10=ob_get_clean();
$_block_plugin15 = isset($_smarty_tpl->smarty->registered_plugins['block']['container'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['container'][0][0] : null;
if (!is_callable(array($_block_plugin15, 'render'))) {
throw new SmartyException('block tag \'container\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('container', array('fluid'=>$_smarty_tpl->tpl_vars['Link']->value->getIsFluid(),'class'=>$_prefixVariable10));
$_block_repeat=true;
echo $_block_plugin15->render(array('fluid'=>$_smarty_tpl->tpl_vars['Link']->value->getIsFluid(),'class'=>$_prefixVariable10), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <?php if ($_smarty_tpl->tpl_vars['WRB']->value->cWRBFormContentHtml) {?>
                                        <?php echo $_smarty_tpl->tpl_vars['WRB']->value->cWRBFormContentHtml;?>

                                    <?php } elseif ($_smarty_tpl->tpl_vars['WRB']->value->cWRBFormContentText) {?>
                                        <?php echo nl2br((string) $_smarty_tpl->tpl_vars['WRB']->value->cWRBFormContentText, (bool) 1);?>

                                    <?php }?>
                                <?php $_block_repeat=false;
echo $_block_plugin15->render(array('fluid'=>$_smarty_tpl->tpl_vars['Link']->value->getIsFluid(),'class'=>$_prefixVariable10), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php }?>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['opcMountPoint'][0], array( array('id'=>'opc_after_revocation_form','inContainer'=>false),$_smarty_tpl ) );?>

                        </div>
                    <?php
}
}
/* {/block 'layout-index-link-type-revocation-form'} */
/* {block 'layout-index-link-type-data-privacy'} */
class Block_290649256790f9604e78e9_08271072 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <div id="data-privacy" class="well well-sm">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['opcMountPoint'][0], array( array('id'=>'opc_before_data_privacy','inContainer'=>false),$_smarty_tpl ) );?>

                            <?php if ($_smarty_tpl->tpl_vars['WRB']->value !== false) {?>
                                <?php ob_start();
if ($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['theme']['left_sidebar'] === 'Y' && $_smarty_tpl->tpl_vars['boxesLeftActive']->value) {
echo "container-plus-sidebar";
}
$_prefixVariable11=ob_get_clean();
$_block_plugin16 = isset($_smarty_tpl->smarty->registered_plugins['block']['container'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['container'][0][0] : null;
if (!is_callable(array($_block_plugin16, 'render'))) {
throw new SmartyException('block tag \'container\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('container', array('fluid'=>$_smarty_tpl->tpl_vars['Link']->value->getIsFluid(),'class'=>$_prefixVariable11));
$_block_repeat=true;
echo $_block_plugin16->render(array('fluid'=>$_smarty_tpl->tpl_vars['Link']->value->getIsFluid(),'class'=>$_prefixVariable11), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <?php if ($_smarty_tpl->tpl_vars['WRB']->value->cDSEContentHtml) {?>
                                        <?php echo $_smarty_tpl->tpl_vars['WRB']->value->cDSEContentHtml;?>

                                    <?php } elseif ($_smarty_tpl->tpl_vars['WRB']->value->cDSEContentText) {?>
                                        <?php echo nl2br((string) $_smarty_tpl->tpl_vars['WRB']->value->cDSEContentText, (bool) 1);?>

                                    <?php }?>
                                <?php $_block_repeat=false;
echo $_block_plugin16->render(array('fluid'=>$_smarty_tpl->tpl_vars['Link']->value->getIsFluid(),'class'=>$_prefixVariable11), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php }?>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['opcMountPoint'][0], array( array('id'=>'opc_after_data_privacy','inContainer'=>false),$_smarty_tpl ) );?>

                        </div>
                    <?php
}
}
/* {/block 'layout-index-link-type-data-privacy'} */
/* {block 'layout-index-include-index'} */
class Block_10467409386790f9604ec755_93216724 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_smarty_tpl->_subTemplateRender('file:page/index.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <?php
}
}
/* {/block 'layout-index-include-index'} */
/* {block 'layout-index-include-shipping'} */
class Block_14169571136790f9604edc79_27493629 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_smarty_tpl->_subTemplateRender('file:page/shipping.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <?php
}
}
/* {/block 'layout-index-include-shipping'} */
/* {block 'layout-index-include-livesearch'} */
class Block_7904250516790f9604ef109_29157041 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_smarty_tpl->_subTemplateRender('file:page/livesearch.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <?php
}
}
/* {/block 'layout-index-include-livesearch'} */
/* {block 'layout-index-include-manufacturers'} */
class Block_17455805566790f9604f0499_08653191 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_smarty_tpl->_subTemplateRender('file:page/manufacturers.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <?php
}
}
/* {/block 'layout-index-include-manufacturers'} */
/* {block 'layout-index-include-newsletter-archive'} */
class Block_5628158176790f9604f1832_46207387 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_smarty_tpl->_subTemplateRender('file:page/newsletter_archive.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <?php
}
}
/* {/block 'layout-index-include-newsletter-archive'} */
/* {block 'layout-index-include-sitemap'} */
class Block_21123346636790f9604f2c46_27963285 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_smarty_tpl->_subTemplateRender('file:page/sitemap.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <?php
}
}
/* {/block 'layout-index-include-sitemap'} */
/* {block 'layout-index-include-free-gift'} */
class Block_13647548536790f9604f3fe1_69684589 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_smarty_tpl->_subTemplateRender('file:page/free_gift.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <?php
}
}
/* {/block 'layout-index-include-free-gift'} */
/* {block 'layout-index-include-plugin'} */
class Block_687370826790f9604f55f6_51590263 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['cPluginTemplate']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                    <?php
}
}
/* {/block 'layout-index-include-plugin'} */
/* {block 'layout-index-include-selection-wizard'} */
class Block_4096447476790f9604f6ba4_07252157 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_smarty_tpl->_subTemplateRender('file:selectionwizard/index.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <?php
}
}
/* {/block 'layout-index-include-selection-wizard'} */
/* {block 'layout-index-include-404'} */
class Block_10334774406790f9604f7e48_13070882 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_smarty_tpl->_subTemplateRender('file:page/404.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <?php
}
}
/* {/block 'layout-index-include-404'} */
/* {block 'layout-index-link-types'} */
class Block_16961859516790f9604d2169_37634112 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php if ($_smarty_tpl->tpl_vars['Link']->value->getLinkType() === (defined('LINKTYP_AGB') ? constant('LINKTYP_AGB') : null)) {?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10672371576790f9604d5724_99719824', 'layout-index-link-type-tos', $this->tplIndex);
?>

                <?php } elseif ($_smarty_tpl->tpl_vars['Link']->value->getLinkType() === (defined('LINKTYP_WRB') ? constant('LINKTYP_WRB') : null)) {?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8355831796790f9604de030_46106422', 'layout-index-link-type-revocation', $this->tplIndex);
?>

                <?php } elseif ($_smarty_tpl->tpl_vars['Link']->value->getLinkType() === (defined('LINKTYP_WRB_FORMULAR') ? constant('LINKTYP_WRB_FORMULAR') : null)) {?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7284041156790f9604e2d05_05222824', 'layout-index-link-type-revocation-form', $this->tplIndex);
?>

                <?php } elseif ($_smarty_tpl->tpl_vars['Link']->value->getLinkType() === (defined('LINKTYP_DATENSCHUTZ') ? constant('LINKTYP_DATENSCHUTZ') : null)) {?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_290649256790f9604e78e9_08271072', 'layout-index-link-type-data-privacy', $this->tplIndex);
?>

                <?php } elseif ($_smarty_tpl->tpl_vars['Link']->value->getLinkType() === (defined('LINKTYP_STARTSEITE') ? constant('LINKTYP_STARTSEITE') : null)) {?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10467409386790f9604ec755_93216724', 'layout-index-include-index', $this->tplIndex);
?>

                <?php } elseif ($_smarty_tpl->tpl_vars['Link']->value->getLinkType() === (defined('LINKTYP_VERSAND') ? constant('LINKTYP_VERSAND') : null)) {?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14169571136790f9604edc79_27493629', 'layout-index-include-shipping', $this->tplIndex);
?>

                <?php } elseif ($_smarty_tpl->tpl_vars['Link']->value->getLinkType() === (defined('LINKTYP_LIVESUCHE') ? constant('LINKTYP_LIVESUCHE') : null)) {?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7904250516790f9604ef109_29157041', 'layout-index-include-livesearch', $this->tplIndex);
?>

                <?php } elseif ($_smarty_tpl->tpl_vars['Link']->value->getLinkType() === (defined('LINKTYP_HERSTELLER') ? constant('LINKTYP_HERSTELLER') : null)) {?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17455805566790f9604f0499_08653191', 'layout-index-include-manufacturers', $this->tplIndex);
?>

                <?php } elseif ($_smarty_tpl->tpl_vars['Link']->value->getLinkType() === (defined('LINKTYP_NEWSLETTERARCHIV') ? constant('LINKTYP_NEWSLETTERARCHIV') : null)) {?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5628158176790f9604f1832_46207387', 'layout-index-include-newsletter-archive', $this->tplIndex);
?>

                <?php } elseif ($_smarty_tpl->tpl_vars['Link']->value->getLinkType() === (defined('LINKTYP_SITEMAP') ? constant('LINKTYP_SITEMAP') : null)) {?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21123346636790f9604f2c46_27963285', 'layout-index-include-sitemap', $this->tplIndex);
?>

                <?php } elseif ($_smarty_tpl->tpl_vars['Link']->value->getLinkType() === (defined('LINKTYP_GRATISGESCHENK') ? constant('LINKTYP_GRATISGESCHENK') : null)) {?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13647548536790f9604f3fe1_69684589', 'layout-index-include-free-gift', $this->tplIndex);
?>

                <?php } elseif ($_smarty_tpl->tpl_vars['Link']->value->getLinkType() === (defined('LINKTYP_PLUGIN') ? constant('LINKTYP_PLUGIN') : null) && empty($_smarty_tpl->tpl_vars['nFullscreenTemplate']->value)) {?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_687370826790f9604f55f6_51590263', 'layout-index-include-plugin', $this->tplIndex);
?>

                <?php } elseif ($_smarty_tpl->tpl_vars['Link']->value->getLinkType() === (defined('LINKTYP_AUSWAHLASSISTENT') ? constant('LINKTYP_AUSWAHLASSISTENT') : null)) {?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4096447476790f9604f6ba4_07252157', 'layout-index-include-selection-wizard', $this->tplIndex);
?>

                <?php } elseif ($_smarty_tpl->tpl_vars['Link']->value->getLinkType() === (defined('LINKTYP_404') ? constant('LINKTYP_404') : null)) {?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10334774406790f9604f7e48_13070882', 'layout-index-include-404', $this->tplIndex);
?>

                <?php }?>
            <?php
}
}
/* {/block 'layout-index-link-types'} */
/* {block 'layout-index-content'} */
class Block_4187649916790f9604c7119_04089363 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3831777176790f9604c7468_98880964', 'layout-index-heading', $this->tplIndex);
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17544826996790f9604ce1f6_80234633', 'layout-index-include-extension', $this->tplIndex);
?>


            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15496710556790f9604cecf4_68053905', 'layout-index-link-content', $this->tplIndex);
?>


            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16961859516790f9604d2169_37634112', 'layout-index-link-types', $this->tplIndex);
?>


            <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['theme']['left_sidebar'] === 'Y' && $_smarty_tpl->tpl_vars['boxesLeftActive']->value) {?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['opcMountPoint'][0], array( array('id'=>'opc_inner_content'),$_smarty_tpl ) );?>

            <?php }?>
        <?php
}
}
/* {/block 'layout-index-content'} */
/* {block 'layout-index-include-footer'} */
class Block_21294695786790f9604f9ea1_52708333 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php if (!(isset($_smarty_tpl->tpl_vars['bAjaxRequest']->value)) || !$_smarty_tpl->tpl_vars['bAjaxRequest']->value) {?>
                <?php $_smarty_tpl->_subTemplateRender('file:layout/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php } else { ?>
                <?php $_smarty_tpl->_subTemplateRender('file:layout/modal_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php }?>
        <?php
}
}
/* {/block 'layout-index-include-footer'} */
/* {block 'layout-index'} */
class Block_817429376790f9604c39b6_29403257 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'layout-index' => 
  array (
    0 => 'Block_817429376790f9604c39b6_29403257',
  ),
  'layout-index-plugin-template' => 
  array (
    0 => 'Block_17590332956790f9604c4b28_23061509',
  ),
  'layout-index-include-header' => 
  array (
    0 => 'Block_20355044216790f9604c5838_21300842',
  ),
  'layout-index-content' => 
  array (
    0 => 'Block_4187649916790f9604c7119_04089363',
  ),
  'layout-index-heading' => 
  array (
    0 => 'Block_3831777176790f9604c7468_98880964',
  ),
  'layout-index-include-extension' => 
  array (
    0 => 'Block_17544826996790f9604ce1f6_80234633',
  ),
  'layout-index-link-content' => 
  array (
    0 => 'Block_15496710556790f9604cecf4_68053905',
  ),
  'layout-index-link-types' => 
  array (
    0 => 'Block_16961859516790f9604d2169_37634112',
  ),
  'layout-index-link-type-tos' => 
  array (
    0 => 'Block_10672371576790f9604d5724_99719824',
  ),
  'layout-index-link-type-revocation' => 
  array (
    0 => 'Block_8355831796790f9604de030_46106422',
  ),
  'layout-index-link-type-revocation-form' => 
  array (
    0 => 'Block_7284041156790f9604e2d05_05222824',
  ),
  'layout-index-link-type-data-privacy' => 
  array (
    0 => 'Block_290649256790f9604e78e9_08271072',
  ),
  'layout-index-include-index' => 
  array (
    0 => 'Block_10467409386790f9604ec755_93216724',
  ),
  'layout-index-include-shipping' => 
  array (
    0 => 'Block_14169571136790f9604edc79_27493629',
  ),
  'layout-index-include-livesearch' => 
  array (
    0 => 'Block_7904250516790f9604ef109_29157041',
  ),
  'layout-index-include-manufacturers' => 
  array (
    0 => 'Block_17455805566790f9604f0499_08653191',
  ),
  'layout-index-include-newsletter-archive' => 
  array (
    0 => 'Block_5628158176790f9604f1832_46207387',
  ),
  'layout-index-include-sitemap' => 
  array (
    0 => 'Block_21123346636790f9604f2c46_27963285',
  ),
  'layout-index-include-free-gift' => 
  array (
    0 => 'Block_13647548536790f9604f3fe1_69684589',
  ),
  'layout-index-include-plugin' => 
  array (
    0 => 'Block_687370826790f9604f55f6_51590263',
  ),
  'layout-index-include-selection-wizard' => 
  array (
    0 => 'Block_4096447476790f9604f6ba4_07252157',
  ),
  'layout-index-include-404' => 
  array (
    0 => 'Block_10334774406790f9604f7e48_13070882',
  ),
  'layout-index-include-footer' => 
  array (
    0 => 'Block_21294695786790f9604f9ea1_52708333',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ((isset($_smarty_tpl->tpl_vars['nFullscreenTemplate']->value)) && $_smarty_tpl->tpl_vars['nFullscreenTemplate']->value == 1) {?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17590332956790f9604c4b28_23061509', 'layout-index-plugin-template', $this->tplIndex);
?>

    <?php } else { ?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20355044216790f9604c5838_21300842', 'layout-index-include-header', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4187649916790f9604c7119_04089363', 'layout-index-content', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21294695786790f9604f9ea1_52708333', 'layout-index-include-footer', $this->tplIndex);
?>

    <?php }
}
}
/* {/block 'layout-index'} */
}

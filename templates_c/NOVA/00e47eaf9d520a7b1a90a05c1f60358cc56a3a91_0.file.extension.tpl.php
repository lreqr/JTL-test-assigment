<?php
/* Smarty version 4.3.1, created on 2025-01-22 14:58:19
  from 'C:\OSPanel\domains\JTL_shop\templates\NOVA\snippets\extension.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6790f97b038575_46027030',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '00e47eaf9d520a7b1a90a05c1f60358cc56a3a91' => 
    array (
      0 => 'C:\\OSPanel\\domains\\JTL_shop\\templates\\NOVA\\snippets\\extension.tpl',
      1 => 1694613031,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:snippets/banner.tpl' => 1,
    'file:snippets/slider.tpl' => 1,
  ),
),false)) {
function content_6790f97b038575_46027030 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9132624666790f97b032311_43761368', 'snippets-extension');
?>

<?php }
/* {block 'snippets-extension-include-banner'} */
class Block_18484184176790f97b033fb0_20778607 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:snippets/banner.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('isFluid'=>false), 0, false);
?>
        <?php
}
}
/* {/block 'snippets-extension-include-banner'} */
/* {block 'snippets-extension-include-slider'} */
class Block_9132740256790f97b037711_57953261 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:snippets/slider.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('isFluid'=>false), 0, false);
?>
        <?php
}
}
/* {/block 'snippets-extension-include-slider'} */
/* {block 'snippets-extension'} */
class Block_9132624666790f97b032311_43761368 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'snippets-extension' => 
  array (
    0 => 'Block_9132624666790f97b032311_43761368',
  ),
  'snippets-extension-include-banner' => 
  array (
    0 => 'Block_18484184176790f97b033fb0_20778607',
  ),
  'snippets-extension-include-slider' => 
  array (
    0 => 'Block_9132740256790f97b037711_57953261',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_assignInScope('isFluidBanner', $_smarty_tpl->tpl_vars['Einstellungen']->value['template']['theme']['banner_full_width'] === 'Y' && (isset($_smarty_tpl->tpl_vars['oImageMap']->value)));?>
    <?php if (!$_smarty_tpl->tpl_vars['isFluidBanner']->value) {?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18484184176790f97b033fb0_20778607', 'snippets-extension-include-banner', $this->tplIndex);
?>

    <?php }?>

    <?php $_smarty_tpl->_assignInScope('isFluidSlider', $_smarty_tpl->tpl_vars['Einstellungen']->value['template']['theme']['slider_full_width'] === 'Y' && (isset($_smarty_tpl->tpl_vars['oSlider']->value)) && count($_smarty_tpl->tpl_vars['oSlider']->value->getSlides()) > 0);?>
    <?php if (!$_smarty_tpl->tpl_vars['isFluidSlider']->value) {?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9132740256790f97b037711_57953261', 'snippets-extension-include-slider', $this->tplIndex);
?>

    <?php }
}
}
/* {/block 'snippets-extension'} */
}

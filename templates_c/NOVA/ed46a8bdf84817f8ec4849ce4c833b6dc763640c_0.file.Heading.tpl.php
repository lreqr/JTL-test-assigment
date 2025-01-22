<?php
/* Smarty version 4.3.1, created on 2025-01-22 14:58:18
  from 'C:\OSPanel\domains\JTL_shop\includes\src\OPC\Portlets\Heading\Heading.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6790f97a378601_46984644',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed46a8bdf84817f8ec4849ce4c833b6dc763640c' => 
    array (
      0 => 'C:\\OSPanel\\domains\\JTL_shop\\includes\\src\\OPC\\Portlets\\Heading\\Heading.tpl',
      1 => 1694613030,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6790f97a378601_46984644 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('htag', ('h').($_smarty_tpl->tpl_vars['instance']->value->getProperty('level')));?>

<<?php echo $_smarty_tpl->tpl_vars['htag']->value;?>
 style="<?php echo $_smarty_tpl->tpl_vars['instance']->value->getStyleString();?>
 text-align:<?php echo $_smarty_tpl->tpl_vars['instance']->value->getProperty('align');?>
"
         class="<?php echo $_smarty_tpl->tpl_vars['instance']->value->getAnimationClass();?>
 <?php echo $_smarty_tpl->tpl_vars['instance']->value->getStyleClasses();?>
"
         <?php echo $_smarty_tpl->tpl_vars['instance']->value->getAnimationDataAttributeString();?>
>
    <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['instance']->value->getProperty('text'), ENT_QUOTES, 'utf-8', true);?>

</<?php echo $_smarty_tpl->tpl_vars['htag']->value;?>
><?php }
}

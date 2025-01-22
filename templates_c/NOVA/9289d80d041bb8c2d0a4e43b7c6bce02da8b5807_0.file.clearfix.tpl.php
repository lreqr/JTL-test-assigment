<?php
/* Smarty version 4.3.1, created on 2025-01-22 14:58:16
  from 'C:\OSPanel\domains\JTL_shop\includes\vendor\jtlshop\scc\src\scc\templates\clearfix.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6790f9780e06c6_00002897',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9289d80d041bb8c2d0a4e43b7c6bce02da8b5807' => 
    array (
      0 => 'C:\\OSPanel\\domains\\JTL_shop\\includes\\vendor\\jtlshop\\scc\\src\\scc\\templates\\clearfix.tpl',
      1 => 1669365122,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6790f9780e06c6_00002897 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['params']->value['visible-size']->hasValue()) {?>
    <?php $_smarty_tpl->_assignInScope('visibleSize', $_smarty_tpl->tpl_vars['params']->value['visible-size']->getValue());?>
    <?php if ($_smarty_tpl->tpl_vars['visibleSize']->value === 'xs') {?>
        <?php $_smarty_tpl->_assignInScope('nextSize', 'sm');?>
    <?php } elseif ($_smarty_tpl->tpl_vars['visibleSize']->value === 'sm') {?>
        <?php $_smarty_tpl->_assignInScope('nextSize', 'md');?>
    <?php } elseif ($_smarty_tpl->tpl_vars['visibleSize']->value === 'md') {?>
        <?php $_smarty_tpl->_assignInScope('nextSize', 'lg');?>
    <?php } elseif ($_smarty_tpl->tpl_vars['visibleSize']->value === 'lg') {?>
        <?php $_smarty_tpl->_assignInScope('nextSize', 'xl');?>
    <?php } elseif ($_smarty_tpl->tpl_vars['visibleSize']->value === 'xl') {?>
        <?php $_smarty_tpl->_assignInScope('nextSize', null);?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['visibleSize']->value === 'xs') {?>
        <div class="clearfix d-block d-<?php echo $_smarty_tpl->tpl_vars['nextSize']->value;?>
-none"></div>
    <?php } elseif (!empty($_smarty_tpl->tpl_vars['nextSize']->value)) {?>
        <div class="clearfix d-none d-<?php echo $_smarty_tpl->tpl_vars['visibleSize']->value;?>
-block d-<?php echo $_smarty_tpl->tpl_vars['nextSize']->value;?>
-none"></div>
    <?php } else { ?>
        <div class="clearfix d-none d-<?php echo $_smarty_tpl->tpl_vars['visibleSize']->value;?>
-block"></div>
    <?php }
} else { ?>
    <div class="clearfix"></div>
<?php }
}
}

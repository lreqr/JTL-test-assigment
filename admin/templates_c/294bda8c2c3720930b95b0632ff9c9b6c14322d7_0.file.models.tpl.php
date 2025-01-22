<?php
/* Smarty version 4.3.1, created on 2025-01-22 17:03:45
  from 'C:\OSPanel\domains\JTL_shop\plugins\jtl_test\adminmenu\templates\models.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_679116e1f0f1d1_71594431',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '294bda8c2c3720930b95b0632ff9c9b6c14322d7' => 
    array (
      0 => 'C:\\OSPanel\\domains\\JTL_shop\\plugins\\jtl_test\\adminmenu\\templates\\models.tpl',
      1 => 1737561781,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl_inc/model_list.tpl' => 1,
    'file:tpl_inc/model_detail.tpl' => 1,
  ),
),false)) {
function content_679116e1f0f1d1_71594431 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['step']->value === 'overview') {?>
    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/model_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('items'=>$_smarty_tpl->tpl_vars['models']->value,'includeHeader'=>false,'create'=>true,'tabs'=>false,'select'=>true,'edit'=>true,'search'=>true,'delete'=>true,'disable'=>true,'enable'=>true), 0, false);
} elseif ($_smarty_tpl->tpl_vars['step']->value === 'detail') {?>
    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/model_detail.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('item'=>$_smarty_tpl->tpl_vars['item']->value,'includeHeader'=>false,'tabs'=>false,'saveAndContinue'=>true,'save'=>true,'cancel'=>true), 0, false);
}
}
}

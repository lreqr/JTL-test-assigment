<?php
/* Smarty version 4.3.1, created on 2025-01-22 14:57:36
  from 'C:\OSPanel\domains\JTL_shop\includes\vendor\jtlshop\scc\src\scc\templates\csrf_token.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6790f9506c8ae9_52353765',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '28c8afa913357bdd56368dc47f275538f1062ebc' => 
    array (
      0 => 'C:\\OSPanel\\domains\\JTL_shop\\includes\\vendor\\jtlshop\\scc\\src\\scc\\templates\\csrf_token.tpl',
      1 => 1669365122,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6790f9506c8ae9_52353765 (Smarty_Internal_Template $_smarty_tpl) {
?><input type="hidden" class="jtl_token" name="jtl_token" value="<?php echo $_SESSION['jtl_token'];?>
" />
<?php }
}

<?php
/* Smarty version 4.3.1, created on 2025-01-22 14:58:03
  from 'C:\OSPanel\domains\JTL_shop\includes\vendor\jtlshop\scc\src\scc\templates\csrf_token.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6790f96bc4a048_85211001',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18e43a6777238ce491507f4869cecc0968490def' => 
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
function content_6790f96bc4a048_85211001 (Smarty_Internal_Template $_smarty_tpl) {
?><input type="hidden" class="jtl_token" name="jtl_token" value="<?php echo $_SESSION['jtl_token'];?>
" />
<?php }
}

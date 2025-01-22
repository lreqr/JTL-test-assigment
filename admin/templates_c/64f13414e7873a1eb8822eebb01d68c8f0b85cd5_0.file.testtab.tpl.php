<?php
/* Smarty version 4.3.1, created on 2025-01-22 17:03:45
  from 'C:\OSPanel\domains\JTL_shop\plugins\jtl_test\adminmenu\templates\testtab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_679116e1c16be0_93400580',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64f13414e7873a1eb8822eebb01d68c8f0b85cd5' => 
    array (
      0 => 'C:\\OSPanel\\domains\\JTL_shop\\plugins\\jtl_test\\adminmenu\\templates\\testtab.tpl',
      1 => 1737561781,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_679116e1c16be0_93400580 (Smarty_Internal_Template $_smarty_tpl) {
?><form class="someform" method="post" action="<?php echo $_smarty_tpl->tpl_vars['backendURL']->value;?>
">
    <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

    <input type="hidden" name="kPluginAdminMenu" value="<?php echo $_smarty_tpl->tpl_vars['menuID']->value;?>
">
    <button name="clear-cache" value="1" class="btn btn-danger" type="submit">
        <i class="fa fa-trash"></i> <?php echo __('Clear plugin cache');?>

    </button>
</form>
<?php }
}

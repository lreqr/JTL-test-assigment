<?php
/* Smarty version 4.3.1, created on 2025-01-22 17:03:45
  from 'C:\OSPanel\domains\JTL_shop\plugins\jtl_test\adminmenu\templates\tab2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_679116e1ceb7b5_15280304',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee988b51d246358db9d11232c8e2c6dc9e3e1a53' => 
    array (
      0 => 'C:\\OSPanel\\domains\\JTL_shop\\plugins\\jtl_test\\adminmenu\\templates\\tab2.tpl',
      1 => 1737561781,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_679116e1ceb7b5_15280304 (Smarty_Internal_Template $_smarty_tpl) {
?><form method="post" class="form-inline">
    <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

    <div class="form-group">
        <div class="form-group mr-2">
            <input type="hidden" name="kPluginAdminMenu" value="<?php echo $_smarty_tpl->tpl_vars['menuID']->value;?>
">
            <input type="text" name="tab2_input" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['posted']->value ?? null)===null||$tmp==='' ? '' : $tmp);?>
" class="form-control" size="22">
        </div>
        <button class="btn btn-primary" type="submit"><?php echo __('submit');?>
</button>
    </div>
</form>
<?php }
}

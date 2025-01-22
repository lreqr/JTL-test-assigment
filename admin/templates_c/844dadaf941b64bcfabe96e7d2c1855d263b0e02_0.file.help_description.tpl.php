<?php
/* Smarty version 4.3.1, created on 2025-01-22 14:56:48
  from 'C:\OSPanel\domains\JTL_shop\admin\templates\bootstrap\tpl_inc\help_description.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6790f920397fa1_05939806',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '844dadaf941b64bcfabe96e7d2c1855d263b0e02' => 
    array (
      0 => 'C:\\OSPanel\\domains\\JTL_shop\\admin\\templates\\bootstrap\\tpl_inc\\help_description.tpl',
      1 => 1694613029,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6790f920397fa1_05939806 (Smarty_Internal_Template $_smarty_tpl) {
?><span data-html="true"
        data-toggle="tooltip"
        data-placement="<?php echo $_smarty_tpl->tpl_vars['placement']->value;?>
"
        title="<?php if ($_smarty_tpl->tpl_vars['description']->value !== null) {
echo $_smarty_tpl->tpl_vars['description']->value;
}
if ($_smarty_tpl->tpl_vars['cID']->value !== null && $_smarty_tpl->tpl_vars['description']->value !== null) {?><hr><?php }
if ($_smarty_tpl->tpl_vars['cID']->value !== null) {?><p><strong><?php echo __('settingNumberShort');?>
: </strong><?php echo $_smarty_tpl->tpl_vars['cID']->value;?>
</p><?php }?>">
    <?php if ($_smarty_tpl->tpl_vars['iconQuestion']->value) {?>
        <span class="fas fa-question-circle fa-fw"></span>
    <?php } else { ?>
        <span class="fas fa-info-circle fa-fw"></span>
    <?php }?>
</span>
<?php }
}

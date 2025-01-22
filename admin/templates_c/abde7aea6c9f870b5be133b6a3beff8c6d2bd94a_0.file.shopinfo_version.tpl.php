<?php
/* Smarty version 4.3.1, created on 2025-01-22 14:57:48
  from 'C:\OSPanel\domains\JTL_shop\admin\templates\bootstrap\tpl_inc\widgets\shopinfo_version.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6790f95c078cf9_45107991',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'abde7aea6c9f870b5be133b6a3beff8c6d2bd94a' => 
    array (
      0 => 'C:\\OSPanel\\domains\\JTL_shop\\admin\\templates\\bootstrap\\tpl_inc\\widgets\\shopinfo_version.tpl',
      1 => 1694613029,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6790f95c078cf9_45107991 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['oSubscription']->value || $_smarty_tpl->tpl_vars['oVersion']->value) {?>
    <table class="table table-condensed table-hover table-blank">
        <tbody>
            <?php if ($_smarty_tpl->tpl_vars['oSubscription']->value) {?>
                <tr>
                    <td width="50%"><?php echo __('subscriptionValidUntil');?>
</td>
                    <td width="50%" id="subscription">
                        <?php if ($_smarty_tpl->tpl_vars['oSubscription']->value->nDayDiff < 0) {?>
                            <a href="https://jtl-url.de/subscription" target="_blank"><?php echo __('expired');?>
</a>
                        <?php } else { ?>
                            <?php echo $_smarty_tpl->tpl_vars['oSubscription']->value->dDownloadBis_DE;?>

                        <?php }?>
                    </td>
                </tr>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['oVersion']->value) {?>
                <tr>
                    <td colspan="2" id="version" class="h1">
                        <?php if ($_smarty_tpl->tpl_vars['bUpdateAvailable']->value) {?>
                            <span class="badge badge-info"><?php echo sprintf(__('Version %s available'),$_smarty_tpl->tpl_vars['strLatestVersion']->value);?>
</span>
                        <?php } else { ?>
                            <span class="badge badge-success"><?php echo __('shopVersionUpToDate');?>
</span>
                        <?php }?>
                    </td>
                </tr>
            <?php }?>
        </tbody>
    </table>
<?php }
}
}

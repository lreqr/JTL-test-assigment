<?php
/* Smarty version 4.3.1, created on 2025-01-22 14:57:43
  from 'C:\OSPanel\domains\JTL_shop\admin\templates\bootstrap\tpl_inc\widgets\shopinfo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6790f95783cf23_86213979',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9454ba413da07bc1bcdb916cbfd2240883b52a41' => 
    array (
      0 => 'C:\\OSPanel\\domains\\JTL_shop\\admin\\templates\\bootstrap\\tpl_inc\\widgets\\shopinfo.tpl',
      1 => 1694613029,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6790f95783cf23_86213979 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="widget-custom-data">
    <table class="table table-condensed table-hover table-blank">
        <tbody>
        <tr>
            <td width="50%"><?php echo __('shopVersion');?>
</td>
            <td width="50%" id="current_shop_version"><?php echo $_smarty_tpl->tpl_vars['strFileVersion']->value;?>
 <?php if (!empty($_smarty_tpl->tpl_vars['strMinorVersion']->value)) {?>(Build: <?php echo $_smarty_tpl->tpl_vars['strMinorVersion']->value;?>
)<?php }?></td>
        </tr>
        <tr>
            <td width="50%"><?php echo __('templateVersion');?>
</td>
            <td width="50%" id="current_tpl_version"><?php echo $_smarty_tpl->tpl_vars['strTplVersion']->value;?>
</td>
        </tr>
        <tr>
            <td width="50%"><?php echo __('dbVersion');?>
</td>
            <td width="50%"><?php echo $_smarty_tpl->tpl_vars['strDBVersion']->value;?>
</td>
        </tr>
        <tr>
            <td width="50%"><?php echo __('dbLastUpdate');?>
</td>
            <td width="50%"><?php echo $_smarty_tpl->tpl_vars['strUpdated']->value;?>
</td>
        </tr>
        </tbody>
    </table>
    <div id="version_data_wrapper">
        <p class="text-center ajax_preloader update"><i class="fa fas fa-spinner fa-spin"></i> <?php echo __('loading');?>
</p>
    </div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
    $(document).ready(function () {
        ioCall(
            'getShopInfo',
            ['widgets/shopinfo_version.tpl', 'version_data_wrapper'],
            undefined,
            undefined,
            undefined,
            true
        );
    });
<?php echo '</script'; ?>
>
<?php }
}

<?php
/* Smarty version 4.3.1, created on 2025-01-22 14:57:43
  from 'C:\OSPanel\domains\JTL_shop\admin\templates\bootstrap\tpl_inc\widgets\serverinfo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6790f957d58421_79017820',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d1e43dab802dc9910899037c8ee8f64412c91a4' => 
    array (
      0 => 'C:\\OSPanel\\domains\\JTL_shop\\admin\\templates\\bootstrap\\tpl_inc\\widgets\\serverinfo.tpl',
      1 => 1694613029,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6790f957d58421_79017820 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="widget-custom-data table-responsive">
    <table class="table table-condensed table-hover table-blank">
        <tbody>
            <tr>
                <td><?php echo __('domain');?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['cShopHost']->value;?>
</td>
                <td></td>
            </tr>
            <tr>
                <td><?php echo __('host');?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['serverHTTPHost']->value;?>
 (<?php echo $_smarty_tpl->tpl_vars['serverAddress']->value;?>
)</td>
                <td></td>
            </tr>
            <tr>
                <td><?php echo __('system');?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['phpOS']->value;?>
</td>
                <td></td>
            </tr>
            <tr>
                <td><?php echo __('phpVersion');?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['phpVersion']->value;?>
</td>
                <td></td>
            </tr>
            <?php if ((isset($_smarty_tpl->tpl_vars['mySQLStats']->value)) && $_smarty_tpl->tpl_vars['mySQLStats']->value !== '-') {?>
                <tr>
                    <td class="nowrap"><?php echo __('mysqlStatistic');?>
</td>
                    <td class="small"><?php echo $_smarty_tpl->tpl_vars['mySQLStats']->value;?>
</td>
                    <td></td>
                </tr>
            <?php }?>
            <tr>
                <td class="nowrap"><?php echo __('mysqlVersion');?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['mySQLVersion']->value;?>
</td>
                <td class="text-right">
                    <?php if ($_smarty_tpl->tpl_vars['mySQLVersion']->value < 5) {?>
                        <a class="label label-warning" href="<?php echo $_smarty_tpl->tpl_vars['adminURL']->value;?>
/status" title="<?php echo __('moreInfo');?>
">
                            <i class="fa fa-exclamation-triangle" aria-hidden="true"></i><span class="sr-only"><?php echo __('warning');?>
</span>
                        </a>
                    <?php }?>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<?php }
}

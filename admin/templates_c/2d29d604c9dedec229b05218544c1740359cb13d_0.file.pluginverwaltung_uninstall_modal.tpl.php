<?php
/* Smarty version 4.3.1, created on 2025-01-22 14:57:26
  from 'C:\OSPanel\domains\JTL_shop\admin\templates\bootstrap\tpl_inc\pluginverwaltung_uninstall_modal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6790f9461d9fb3_28270624',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2d29d604c9dedec229b05218544c1740359cb13d' => 
    array (
      0 => 'C:\\OSPanel\\domains\\JTL_shop\\admin\\templates\\bootstrap\\tpl_inc\\pluginverwaltung_uninstall_modal.tpl',
      1 => 1694613029,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6790f9461d9fb3_28270624 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="uninstall-<?php echo $_smarty_tpl->tpl_vars['context']->value;?>
-modal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title"><?php echo __('deletePluginData');?>
</h2>
                <button type="button" class="close" data-dismiss="modal">
                    <i class="fal fa-times"></i>
                </button>
            </div>
            <div class="modal-body">
                <p><?php echo __('deletePluginDataInfo');?>
</p>
                <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="delete-data" type="checkbox" id="delete-data-<?php echo $_smarty_tpl->tpl_vars['context']->value;?>
" checked>
                    <label class="custom-control-label" for="delete-data-<?php echo $_smarty_tpl->tpl_vars['context']->value;?>
"><?php echo __('deletePluginDataQuestion');?>
</label>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getHelpDesc'][0], array( array('cDesc'=>__('deletePluginDataQuestionDesc')),$_smarty_tpl ) );?>

                </div>
                <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="delete-files" type="checkbox" id="delete-files-<?php echo $_smarty_tpl->tpl_vars['context']->value;?>
">
                    <label class="custom-control-label" for="delete-files-<?php echo $_smarty_tpl->tpl_vars['context']->value;?>
"><?php echo __('deletePluginFilesQuestion');?>
</label>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getHelpDesc'][0], array( array('cDesc'=>__('deletePluginFilesQuestionDesc')),$_smarty_tpl ) );?>

                </div>
            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="ml-auto col-sm-6 col-xl-auto submit">
                        <button type="button" class="delete-plugindata-yes btn btn-danger btn-bock">
                            <i class="fa fa-trash-alt"></i>&nbsp;<?php echo __('deletePluginDataYes');?>

                        </button>
                    </div>
                    <div class="col-sm-6 col-xl-auto submit">
                        <button type="button" class="btn btn-primary" name="cancel" data-dismiss="modal">
                            <?php echo __('cancelWithIcon');?>

                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo '<script'; ?>
>
    $(document).ready(function() {
        var disModal = $('#uninstall-<?php echo $_smarty_tpl->tpl_vars['context']->value;?>
-modal');
        $('<?php echo $_smarty_tpl->tpl_vars['button']->value;?>
').on('click', function(event) {
            disModal.modal('show');
            return false;
        });
        $('#uninstall-<?php echo $_smarty_tpl->tpl_vars['context']->value;?>
-modal .delete-plugindata-yes').on('click', function (event) {
            disModal.modal('hide');
            uninstall($('#delete-data-<?php echo $_smarty_tpl->tpl_vars['context']->value;?>
').is(':checked'));
        });
        function uninstall(deleteData) {
            var data = $('<?php echo $_smarty_tpl->tpl_vars['selector']->value;?>
').serialize();
            data += '&deinstallieren=1&delete-data=';
            if (deleteData === true) {
                data += '1';
            } else {
                data += '0';
            }
            data += '&delete-files=';
            if (document.getElementById('delete-files-<?php echo $_smarty_tpl->tpl_vars['context']->value;?>
').checked) {
                data += '1'
            } else {
                data += '0'
            }
            simpleAjaxCall('<?php echo $_smarty_tpl->tpl_vars['adminURL']->value;
echo $_smarty_tpl->tpl_vars['route']->value;?>
', data, function () {
                location.reload();
            });
            return false;
        }
    });
<?php echo '</script'; ?>
>
<?php }
}

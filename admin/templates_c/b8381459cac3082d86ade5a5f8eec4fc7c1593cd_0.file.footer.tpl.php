<?php
/* Smarty version 4.3.1, created on 2025-01-22 14:56:37
  from 'C:\OSPanel\domains\JTL_shop\admin\templates\bootstrap\tpl_inc\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6790f9159935c4_32569755',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b8381459cac3082d86ade5a5f8eec4fc7c1593cd' => 
    array (
      0 => 'C:\\OSPanel\\domains\\JTL_shop\\admin\\templates\\bootstrap\\tpl_inc\\footer.tpl',
      1 => 1694613029,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6790f9159935c4_32569755 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['account']->value) {?>
        <button class="navbar-toggler sidebar-toggler collapsed" type="button" data-toggle="collapse" data-target="#sidebar" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="modal" tabindex="-1" role="dialog" id="modal-footer">
            <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal-title"></h2>
                        <button type="button" class="close" data-dismiss="modal">
                            <i class="fal fa-times"></i>
                        </button>
                    </div>
                    <div class="modal-body"></div>
                    <div class="modal-footer"></div>
                </div>
            </div>
        </div>

        <div class="modal" tabindex="-1" role="dialog" id="modal-footer-delete-confirm">
            <div id="modal-footer-delete-confirm-default-title" class="d-none"><?php echo __('defaultDeleteConfirmTitle');?>
</div>
            <div id="modal-footer-delete-confirm-default-submit" class="d-none"><?php echo __('delete');?>
</div>
            <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal-title"></h2>
                        <button type="button" class="close" data-dismiss="modal">
                            <i class="fal fa-times"></i>
                        </button>
                    </div>
                    <div class="modal-body"></div>
                    <div class="modal-footer">
                        <div class="row">
                            <div class="ml-auto col-sm-6 col-xl-auto mb-2">
                                <button type="button" id="modal-footer-delete-confirm-yes" class="btn btn-danger btn-block">
                                    <i class="fas fa-trash-alt"></i> <?php echo __('delete');?>

                                </button>
                            </div>
                            <div class="col-sm-6 col-xl-auto">
                                <button type="button" class="btn btn-outline-primary btn-block" data-dismiss="modal">
                                    <?php echo __('cancelWithIcon');?>

                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>
    </div>
</div><?php $_smarty_tpl->_assignInScope('finderURL', (($_smarty_tpl->tpl_vars['adminURL']->value).('/')).(JTL\Router\Route::ELFINDER));
echo '<script'; ?>
>
    if(typeof CKEDITOR !== 'undefined') {
        CKEDITOR.editorConfig = function(config) {
            config.language = '<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
';
            config.removeDialogTabs = 'link:upload;image:Upload';
            config.defaultLanguage = 'en';
            config.startupMode = '<?php if (((($tmp = $_smarty_tpl->tpl_vars['config']->value['global']['admin_ckeditor_mode'] ?? null)===null||$tmp==='' ? '' : $tmp)) === 'Q') {?>source<?php } else { ?>wysiwyg<?php }?>';
            config.htmlEncodeOutput = false;
            config.basicEntities = false;
            config.htmlEncodeOutput = false;
            config.allowedContent = true;
            config.enterMode = CKEDITOR.ENTER_P;
            config.entities = false;
            config.entities_latin = false;
            config.entities_greek = false;
            config.ignoreEmptyParagraph = false;
            config.filebrowserBrowseUrl      = '<?php echo $_smarty_tpl->tpl_vars['finderURL']->value;?>
?ckeditor=1&mediafilesType=misc&token=<?php echo $_SESSION['jtl_token'];?>
';
            config.filebrowserImageBrowseUrl = '<?php echo $_smarty_tpl->tpl_vars['finderURL']->value;?>
?ckeditor=1&mediafilesType=image&token=<?php echo $_SESSION['jtl_token'];?>
';
            config.filebrowserFlashBrowseUrl = '<?php echo $_smarty_tpl->tpl_vars['finderURL']->value;?>
?ckeditor=1&mediafilesType=video&token=<?php echo $_SESSION['jtl_token'];?>
';
            config.filebrowserUploadUrl      = '<?php echo $_smarty_tpl->tpl_vars['finderURL']->value;?>
?ckeditor=1&mediafilesType=misc&token=<?php echo $_SESSION['jtl_token'];?>
';
            config.filebrowserImageUploadUrl = '<?php echo $_smarty_tpl->tpl_vars['finderURL']->value;?>
?ckeditor=1&mediafilesType=image&token=<?php echo $_SESSION['jtl_token'];?>
';
            config.filebrowserFlashUploadUrl = '<?php echo $_smarty_tpl->tpl_vars['finderURL']->value;?>
?ckeditor=1&mediafilesType=video&token=<?php echo $_SESSION['jtl_token'];?>
';
            config.extraPlugins = 'codemirror';
            config.fillEmptyBlocks = false;
            config.autoParagraph = false;
        };
        CKEDITOR.editorConfig(CKEDITOR.config);
        $.each(CKEDITOR.dtd.$removeEmpty, function (i, value) {
            CKEDITOR.dtd.$removeEmpty[i] = false;
        });
        CKEDITOR.on( 'instanceReady', function( evt ) {
            evt.editor.dataProcessor.htmlFilter.addRules( {
                elements: {
                    img: function(el) {
                        el.addClass('img-fluid');
                    }
                }
            });
        });
    }
    $('.select2').select2();
    $(function() {
        ioCall('notificationAction', ['update'], undefined, undefined, undefined, true);
    });

    $( document ).scroll(function () {
        $('[name="scrollPosition"]').val(window.scrollY);
    });

    <?php if (!empty($_smarty_tpl->tpl_vars['scrollPosition']->value)) {?>
        var scrollPosition = '<?php echo $_smarty_tpl->tpl_vars['scrollPosition']->value;?>
';
        $('html, body').animate({
            scrollTop: $("html").offset().top + scrollPosition
        }, 1000);
    <?php }
echo '</script'; ?>
>

<?php }?>
</body></html>
<?php }
}

<?php
/* Smarty version 4.3.1, created on 2025-01-22 17:03:50
  from 'C:\OSPanel\domains\JTL_shop\admin\templates\bootstrap\tpl_inc\dbupdater_scripts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_679116e63314d2_74489461',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '17d4068dbc3ade4106c12a817a8647bda6a5ec7b' => 
    array (
      0 => 'C:\\OSPanel\\domains\\JTL_shop\\admin\\templates\\bootstrap\\tpl_inc\\dbupdater_scripts.tpl',
      1 => 1694613029,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_679116e63314d2_74489461 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
    var adminPath = '<?php echo $_smarty_tpl->tpl_vars['adminURL']->value;?>
/';
    

    function backup($element)
    {
        disableUpdateControl(true);

        var url = $element.attr('href'),
            download = !!$element.data('download');

        pushEvent('Starte Sicherungskopie');
        ioManagedCall(
            adminPath, 'dbupdaterBackup', [],
            function (result, error) {
                disableUpdateControl(false);

                var message = error
                    ? '<?php echo __('errorSaveCopy');?>
'
                    : (download
                        ? '<?php echo __('saveCopy');?>
' + '"<strong>' + result.file + '</strong>"' + '<?php echo __('isDownloaded');?>
'
                        : '<?php echo __('saveCopy');?>
' + '"<strong>' + result.file + '</strong>"' + '<?php echo __('createSuccess');?>
');

                showNotify(error ? 'danger' : 'success', 'Sicherungskopie', message);
                pushEvent(message);

                if (!error && download) {
                    ioDownload('dbupdaterDownload', [result.file]);
                }
            }
        );
    }

    function doUpdate(callback)
    {
        ioManagedCall(
            adminPath, 'dbUpdateIO', [],
            function (result, error) {
                if (!error) {
                    callback(result);

                    if (result.availableUpdate) {
                        doUpdate(callback);
                    } else {
                        location.reload();
                    }
                } else {
                    callback(undefined, error);
                }
            }
        );
    }

    function update($element)
    {
        var url = $element.attr('href');
        disableUpdateControl(true);
        pushEvent('Starte Update');

        doUpdate(function(data, error) {
            var _once = function() {
                var message = error
                    ? '<?php echo __('infoUpdatePause');?>
' + error.message
                    : '<?php echo __('successUpdate');?>
'
                showNotify(error ? 'danger' : 'success', 'Update', message);
                disableUpdateControl(false);
            };

            if (error) {
                pushEvent('Fehler bei Update: ' + error.message);
                _once();
            } else {
                pushEvent('     Update auf ' + formatVersion(data.result) + ' erfolgreich');
                if (!data.availableUpdate) {
                    //pushEvent('Update beendet');
                    updateStatusTpl(null);
                    _once();
                }
            }
        });
    }

    function updateStatusTpl(plugin)
    {
        ioManagedCall(adminPath, 'dbupdaterStatusTpl', [plugin], function(result, error) {
            if (error) {
                pushEvent(error.message);
            } else {
                $('#update-status').html(result.tpl);
                init_bindings();
            }
        });

        // update notifications
        updateNotifyDrop();
    }

    function toggleDirection($element)
    {
        $element.parent()
            .children()
            .attr('disabled', false)
            .toggle();
    }

    function migration($element)
    {
        var id = $element.data('id'),
            url = $element.attr('href'),
            dir = $element.data('dir'),
            plugin = $element.data('plugin'),
            params = {dir: dir};

        $element.attr('disabled', true);

        if (id !== undefined) {
            params = $.extend({}, { id: id }, params);
        }
        if (plugin === undefined) {
            plugin = null;
        }

        ioManagedCall(adminPath, 'dbupdaterMigration', [id, null, dir, plugin], function(result, error) {
            $element
                .attr('disabled', false)
                .closest('tr')
                .find('.migration-created')
                .fadeOut();

            if (!error) {
                toggleDirection($element);
            }

            var message = error
                ? error.message
                : '<?php echo __('successMigration');?>
';

            showNotify(error ? 'danger' : 'success', 'Migration', message);

            if (!error) {
                if (result.forceReload === true) {
                    location.reload();
                }
                updateStatusTpl(plugin);
                if (dir === 'up') {
                    pushEvent(sprintf('<?php echo __('updateTosuccessfull');?>
', formatVersion(result.result)));
                }
            }

            if (dir === 'down') {
                $('#resultLog').show();
            }
        });
    }

    function pushEvent(message)
    {
        $('#debug').append($('<div/>').html(message));
    }

    function formatVersion(version)
    {
        var v = parseInt(version);
        if (v >= 300 && v < 500) {
            return v / 100;
        }
        return version;
    }

    function disableUpdateControl(disable)
    {
        var $container = $('#btn-update-group'),
            $buttons = $('#btn-update-group a.btn'),
            $ladda = Ladda.create($('#backup-button')[0]),
            $resultLog = $('#resultLog');

        if (!!disable) {
            $ladda.start();
            $buttons.attr('disabled', true);
            $resultLog.show();
        } else {
            $ladda.stop();
            $buttons.attr('disabled', false);
        }
    }

    function init_bindings()
    {
        $('[data-callback]').on('click', function(e) {
            e.preventDefault();
            var $element = $(this);
            if ($element.attr('disabled') !== undefined) {
                return false;
            }
            var callback = $element.data('callback');
            if (!$(e.target).attr('disabled')) {
                window[callback]($element);
            }
        });
    }

    $(function() {
        init_bindings();
    });

    
<?php echo '</script'; ?>
>
<?php }
}

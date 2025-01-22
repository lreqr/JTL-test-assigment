<?php
/* Smarty version 4.3.1, created on 2025-01-22 14:57:36
  from 'C:\OSPanel\domains\JTL_shop\admin\templates\bootstrap\tpl_inc\licenses_scripts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6790f950786b66_54760049',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '394603d72204c8ace66fe008c9a8b487848075c8' => 
    array (
      0 => 'C:\\OSPanel\\domains\\JTL_shop\\admin\\templates\\bootstrap\\tpl_inc\\licenses_scripts.tpl',
      1 => 1694613029,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6790f950786b66_54760049 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
    const showUpdateAll = function () {
        const btn = $('#update-all');
        btn.attr('disabled', false);
        btn.find('i').removeClass('fa-spin');
    };
    const hideUpdateAll = function () {
        const btn = $('#update-all');
        btn.attr('disabled', true);
        btn.find('i').addClass('fa-spin');
    };
    const showInstallAll = function () {
        const btn = $('#install-all');
        btn.attr('disabled', false);
        btn.find('i').removeClass('fa-spin');
    };
    const hideInstallAll = function () {
        const btn = $('#install-all');
        btn.attr('disabled', true);
        btn.find('i').addClass('fa-spin');
    };
    const dlCallback = function (btn, e) {
        btn.attr('disabled', true);
        btn.find('i').addClass('fa-spin');
        $.ajax({
            method: 'POST',
            url: '<?php echo $_smarty_tpl->tpl_vars['adminURL']->value;
echo $_smarty_tpl->tpl_vars['route']->value;?>
',
            data: $(e.target).serialize()
        }).done(function (result) {
            if (result.id && result.html) {
                let itemID = '#' + result.id;
                if (result.notification) {
                    $('#updates-drop').html(result.notification);
                }
                if (result.action === 'update' || result.action === 'install') {
                    itemID = '#license-item-' + result.id;
                }
                $(itemID).replaceWith(result.html);
                btn.attr('disabled', false);
                btn.find('i').removeClass('fa-spin');
            } else if (result.error) {
                const errorItem = document.getElementById('error-placeholder');
                errorItem.innerHTML = result.error;
                errorItem.classList.remove('d-none');
                errorItem.scrollIntoView(false);
            }
            ++done;
            if (formCount > 0 && formCount === done) {
                showUpdateAll();
                showInstallAll();
            }
        });
        return false;
    };
    const bindCallback = function (btn, e) {
        btn.attr('disabled', true);
        btn.find('i').addClass('fa-spin');
        $.ajax({
            method: 'POST',
            url: '<?php echo $_smarty_tpl->tpl_vars['adminURL']->value;
echo $_smarty_tpl->tpl_vars['route']->value;?>
',
            data: $(e.target).serialize()
        }).done(function (result) {
            if (result.status === 'OK' && result.redirect !== null) {
                window.location = result.redirect;
                return false;
            }
            if (result.replaceWith) {
                for (let itemID in result.replaceWith) {
                    $(itemID).replaceWith(result.replaceWith[itemID]);
                }
            }
            btn.attr('disabled', false);
            btn.find('i').removeClass('fa-spin');
        });
        return false;
    };
    var formCount = 0,
        done = 0;
    $(document).ready(function () {
        $('#content_wrapper').on('submit', '#bound-licenses .update-item-form', function (e) {
            return dlCallback($(e.target).find('.update-item'), e);
        }).on('submit', '#bound-licenses .install-item-form', function (e) {
            return dlCallback($(e.target).find('.install-item'), e);
        }).on('click', '#bound-licenses #update-all', function (e) {
            const forms = $('#bound-licenses .update-item-form');
            if (forms.length === 0) {
                return false;
            }
            hideUpdateAll();
            done = 0;
            formCount = forms.length;
            forms.submit();
            return false;
        }).on('click', '#bound-licenses #install-all', function (e) {
            const forms = $('#bound-licenses .install-item-form');
            if (forms.length === 0) {
                return false;
            }
            hideInstallAll();
            done = 0;
            formCount = forms.length;
            forms.submit();
            return false;
        }).on('submit', '#unbound-licenses .set-binding-form', function (e) {
            return bindCallback($(e.target).find('.set-binding'), e);
        }).on('submit', '.clear-binding-form', function (e) {
            return bindCallback($(e.target).find('.clear-binding'), e);
        }).on('submit', '.extend-license-form', function (e) {
            return bindCallback($(e.target).find('.extend-license'), e);
        }).on('submit', '.upgrade-license-form', function (e) {
            return bindCallback($(e.target).find('.upgrade-license'), e);
        });
    });
<?php echo '</script'; ?>
>
<?php }
}

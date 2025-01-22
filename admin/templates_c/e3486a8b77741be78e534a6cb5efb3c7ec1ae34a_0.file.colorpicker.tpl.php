<?php
/* Smarty version 4.3.1, created on 2025-01-22 17:03:48
  from 'C:\OSPanel\domains\JTL_shop\admin\templates\bootstrap\snippets\colorpicker.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_679116e46420c6_12207704',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e3486a8b77741be78e534a6cb5efb3c7ec1ae34a' => 
    array (
      0 => 'C:\\OSPanel\\domains\\JTL_shop\\admin\\templates\\bootstrap\\snippets\\colorpicker.tpl',
      1 => 1694613029,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_679116e46420c6_12207704 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="input-group" id="<?php echo $_smarty_tpl->tpl_vars['cpID']->value;?>
-group">
    <input type="text" class="form-control colorpicker-input"
           name="<?php echo $_smarty_tpl->tpl_vars['cpName']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['cpValue']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['cpID']->value;?>
"
           autocomplete="off">
    <span class="input-group-append">
        <span class="input-group-text colorpicker-input-addon">
            <i></i>
        </span>
    </span>
</div>
<?php echo '<script'; ?>
>
    $('#<?php echo $_smarty_tpl->tpl_vars['cpID']->value;?>
-group').colorpicker({
        format: 'rgba',
        fallbackColor: 'rgb(255, 255, 255)',
        autoInputFallback: true,
        useAlpha: <?php if ((($tmp = $_smarty_tpl->tpl_vars['useAlpha']->value ?? null)===null||$tmp==='' ? false : $tmp)) {?>true<?php } else { ?>false<?php }?>
    });
<?php echo '</script'; ?>
>
<?php }
}

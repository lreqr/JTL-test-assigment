<?php
/* Smarty version 4.3.1, created on 2025-01-22 14:57:43
  from 'C:\OSPanel\domains\JTL_shop\admin\templates\bootstrap\tpl_inc\widgets\patch.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6790f9576d0a45_61976449',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f7c548dcab7af21a54f865421a054803378a51d' => 
    array (
      0 => 'C:\\OSPanel\\domains\\JTL_shop\\admin\\templates\\bootstrap\\tpl_inc\\widgets\\patch.tpl',
      1 => 1694613029,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6790f9576d0a45_61976449 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
    $(document).ready(function () {
        ioCall(
            'getRemoteData',
            ['<?php echo (defined('JTLURL_GET_SHOPPATCH') ? constant('JTLURL_GET_SHOPPATCH') : null);?>
?v=<?php echo $_smarty_tpl->tpl_vars['version']->value;?>
',
                'oPatch_arr',
                'widgets/patch_data.tpl',
                'patch_data_wrapper'],
            undefined,
            undefined,
            undefined,
            true
        );
    });
<?php echo '</script'; ?>
>

<div class="widget-custom-data widget-patch">
    <div id="patch_data_wrapper">
        <p class="ajax_preloader"><?php echo __('loading');?>
</p>
    </div>
</div>
<?php }
}

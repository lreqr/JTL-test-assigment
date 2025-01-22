<?php
/* Smarty version 4.3.1, created on 2025-01-22 14:56:37
  from 'C:\OSPanel\domains\JTL_shop\admin\templates\bootstrap\snippets\selectpicker.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6790f9157f5852_03424027',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ca10a903188e02b76da0c831733e600808937c8' => 
    array (
      0 => 'C:\\OSPanel\\domains\\JTL_shop\\admin\\templates\\bootstrap\\snippets\\selectpicker.tpl',
      1 => 1694613029,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6790f9157f5852_03424027 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="module">
    
        $('.selectpicker').selectpicker({
            noneSelectedText: '<?php echo __('selectPickerNoneSelectedText');?>
',
            noneResultsText: '<?php echo __('selectPickerNoneResultsText');?>
',
            countSelectedText: '<?php echo __('selectPickerCountSelectedText');?>
',
            maxOptionsText: () => [
                '<?php echo __('selectPickerLimitReached');?>
',
                '<?php echo __('selectPickerGroupLimitReached');?>
',
            ],
            selectAllText: '<?php echo __('selectPickerSelectAllText');?>
',
            deselectAllText: '<?php echo __('selectPickerDeselectAllText');?>
',
            doneButtonText: '<?php echo __('close');?>
',
            style: ''
        });
    
<?php echo '</script'; ?>
>
<?php }
}

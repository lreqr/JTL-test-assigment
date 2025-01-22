<?php
/* Smarty version 4.3.1, created on 2025-01-22 14:57:42
  from 'C:\OSPanel\domains\JTL_shop\admin\templates\bootstrap\tpl_inc\widgets\news.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6790f956f0aed8_39302440',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '546952896f52cf42e607bfca3297e5aa3ed03599' => 
    array (
      0 => 'C:\\OSPanel\\domains\\JTL_shop\\admin\\templates\\bootstrap\\tpl_inc\\widgets\\news.tpl',
      1 => 1694613029,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6790f956f0aed8_39302440 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
    $(document).ready(function () {
        ioCall(
            'getRemoteData',
            ['<?php echo (defined('JTLURL_GET_SHOPNEWS') ? constant('JTLURL_GET_SHOPNEWS') : null);?>
',
                'oNews_arr',
                'widgets/news_data.tpl',
                'news_data_wrapper'],
            undefined,
            undefined,
            undefined,
            true
        );
    });
<?php echo '</script'; ?>
>

<div class="widget-custom-data">
    <div id="news_data_wrapper">
        <p class="ajax_preloader"><i class="fa fas fa-spinner fa-spin"></i> <?php echo __('loading');?>
</p>
    </div>
</div>
<?php }
}

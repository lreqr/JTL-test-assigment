<?php
/* Smarty version 4.3.1, created on 2025-01-22 14:57:46
  from 'C:\OSPanel\domains\JTL_shop\admin\templates\bootstrap\tpl_inc\widgets\news_data.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6790f95ae300b7_71599790',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7eb7ffbc96ac97735aa7bd5f7b1d5ed924ec72d6' => 
    array (
      0 => 'C:\\OSPanel\\domains\\JTL_shop\\admin\\templates\\bootstrap\\tpl_inc\\widgets\\news_data.tpl',
      1 => 1694613029,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6790f95ae300b7_71599790 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OSPanel\\domains\\JTL_shop\\includes\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
if (is_object($_smarty_tpl->tpl_vars['oNews_arr']->value) && !empty($_smarty_tpl->tpl_vars['oNews_arr']->value->channel->item)) {?>
    <ul class="linklist">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oNews_arr']->value->channel->item, 'oNews');
$_smarty_tpl->tpl_vars['oNews']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['oNews']->value) {
$_smarty_tpl->tpl_vars['oNews']->do_else = false;
?><li><p><a class="" href="<?php echo urldecode($_smarty_tpl->tpl_vars['oNews']->value->link);?>
" target="_blank" rel="noopener"><span class="date label label-default pull-right"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['oNews']->value->pubDate,'d.m.Y');?>
</span><?php echo $_smarty_tpl->tpl_vars['oNews']->value->title;?>
</a></p></li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
<?php } else { ?>
    <div class="widget-container"><div class="alert alert-error"><?php echo __('noDataAvailable');?>
</div></div>
<?php }
}
}

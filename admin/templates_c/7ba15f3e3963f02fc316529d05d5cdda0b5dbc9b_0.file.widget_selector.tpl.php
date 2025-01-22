<?php
/* Smarty version 4.3.1, created on 2025-01-22 14:57:44
  from 'C:\OSPanel\domains\JTL_shop\admin\templates\bootstrap\tpl_inc\widget_selector.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6790f95812f685_96222775',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ba15f3e3963f02fc316529d05d5cdda0b5dbc9b' => 
    array (
      0 => 'C:\\OSPanel\\domains\\JTL_shop\\admin\\templates\\bootstrap\\tpl_inc\\widget_selector.tpl',
      1 => 1694613029,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6790f95812f685_96222775 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oAvailableWidget_arr']->value, 'oAvailableWidget', true);
$_smarty_tpl->tpl_vars['oAvailableWidget']->iteration = 0;
$_smarty_tpl->tpl_vars['oAvailableWidget']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['oAvailableWidget']->value) {
$_smarty_tpl->tpl_vars['oAvailableWidget']->do_else = false;
$_smarty_tpl->tpl_vars['oAvailableWidget']->iteration++;
$_smarty_tpl->tpl_vars['oAvailableWidget']->last = $_smarty_tpl->tpl_vars['oAvailableWidget']->iteration === $_smarty_tpl->tpl_vars['oAvailableWidget']->total;
$__foreach_oAvailableWidget_5_saved = $_smarty_tpl->tpl_vars['oAvailableWidget'];
?>
    <a href="#" class="dropdown-item" data-widget-add="1" onclick="addWidget(<?php echo $_smarty_tpl->tpl_vars['oAvailableWidget']->value->kWidget;?>
)">
        <div class="row no-gutters">
            <div class="col col-1"><span href="#" class="fal fa-plus text-primary"></span></div>
            <div class="col col-11 font-weight-bold"><?php echo $_smarty_tpl->tpl_vars['oAvailableWidget']->value->cTitle;?>
</div>
            <div class="col col-1"></div>
            <div class="col col-11"><?php echo $_smarty_tpl->tpl_vars['oAvailableWidget']->value->cDescription;?>
</div>
        </div>
    </a>
    <?php if (!$_smarty_tpl->tpl_vars['oAvailableWidget']->last) {?>
        <div class="dropdown-divider"></div>
    <?php }
$_smarty_tpl->tpl_vars['oAvailableWidget'] = $__foreach_oAvailableWidget_5_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if (count($_smarty_tpl->tpl_vars['oAvailableWidget_arr']->value) == 0) {?>
    <span class="ml-3 font-weight-bold"><?php echo __('noMoreWidgets');?>
</span>
<?php }
}
}

<?php
/* Smarty version 4.3.1, created on 2025-01-22 14:58:11
  from 'C:\OSPanel\domains\JTL_shop\includes\src\OPC\Portlets\Row\Row.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6790f97367b396_38822390',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b0e49710b3dd90041c19a0af72a1f811c4bd3c4' => 
    array (
      0 => 'C:\\OSPanel\\domains\\JTL_shop\\includes\\src\\OPC\\Portlets\\Row\\Row.tpl',
      1 => 1694613030,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6790f97367b396_38822390 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('data', $_smarty_tpl->tpl_vars['instance']->value->getAnimationData());?>

<?php if ($_smarty_tpl->tpl_vars['isPreview']->value) {?>
    <?php $_smarty_tpl->_assignInScope('areaClass', 'opc-area opc-col');
}?>

<?php if ($_smarty_tpl->tpl_vars['inContainer']->value === false) {?>
    <div class="container-fluid">
<?php }?>

<?php $_block_plugin128 = isset($_smarty_tpl->smarty->registered_plugins['block']['row'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['row'][0][0] : null;
if (!is_callable(array($_block_plugin128, 'render'))) {
throw new SmartyException('block tag \'row\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('row', array('data'=>(($tmp = $_smarty_tpl->tpl_vars['data']->value ?? null)===null||$tmp==='' ? array() : $tmp),'class'=>(($_smarty_tpl->tpl_vars['instance']->value->getAnimationClass()).(' ')).($_smarty_tpl->tpl_vars['instance']->value->getStyleClasses()),'style'=>(($tmp = $_smarty_tpl->tpl_vars['instance']->value->getStyleString() ?? null)===null||$tmp==='' ? null : $tmp)));
$_block_repeat=true;
echo $_block_plugin128->render(array('data'=>(($tmp = $_smarty_tpl->tpl_vars['data']->value ?? null)===null||$tmp==='' ? array() : $tmp),'class'=>(($_smarty_tpl->tpl_vars['instance']->value->getAnimationClass()).(' ')).($_smarty_tpl->tpl_vars['instance']->value->getStyleClasses()),'style'=>(($tmp = $_smarty_tpl->tpl_vars['instance']->value->getStyleString() ?? null)===null||$tmp==='' ? null : $tmp)), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['portlet']->value->getLayouts($_smarty_tpl->tpl_vars['instance']->value), 'colLayout', false, 'i');
$_smarty_tpl->tpl_vars['colLayout']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['colLayout']->value) {
$_smarty_tpl->tpl_vars['colLayout']->do_else = false;
?>
        <?php $_smarty_tpl->_assignInScope('areaId', "col-".((string)$_smarty_tpl->tpl_vars['i']->value));?>
        <?php $_block_plugin129 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin129, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('class'=>(($tmp = $_smarty_tpl->tpl_vars['areaClass']->value ?? null)===null||$tmp==='' ? null : $tmp),'cols'=>(($tmp = $_smarty_tpl->tpl_vars['colLayout']->value['xs'] ?? null)===null||$tmp==='' ? false : $tmp),'md'=>(($tmp = $_smarty_tpl->tpl_vars['colLayout']->value['sm'] ?? null)===null||$tmp==='' ? false : $tmp),'lg'=>(($tmp = $_smarty_tpl->tpl_vars['colLayout']->value['md'] ?? null)===null||$tmp==='' ? false : $tmp),'xl'=>(($tmp = $_smarty_tpl->tpl_vars['colLayout']->value['lg'] ?? null)===null||$tmp==='' ? false : $tmp),'data'=>array('area-id'=>$_smarty_tpl->tpl_vars['areaId']->value)));
$_block_repeat=true;
echo $_block_plugin129->render(array('class'=>(($tmp = $_smarty_tpl->tpl_vars['areaClass']->value ?? null)===null||$tmp==='' ? null : $tmp),'cols'=>(($tmp = $_smarty_tpl->tpl_vars['colLayout']->value['xs'] ?? null)===null||$tmp==='' ? false : $tmp),'md'=>(($tmp = $_smarty_tpl->tpl_vars['colLayout']->value['sm'] ?? null)===null||$tmp==='' ? false : $tmp),'lg'=>(($tmp = $_smarty_tpl->tpl_vars['colLayout']->value['md'] ?? null)===null||$tmp==='' ? false : $tmp),'xl'=>(($tmp = $_smarty_tpl->tpl_vars['colLayout']->value['lg'] ?? null)===null||$tmp==='' ? false : $tmp),'data'=>array('area-id'=>$_smarty_tpl->tpl_vars['areaId']->value)), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php if ($_smarty_tpl->tpl_vars['isPreview']->value) {?>
                <?php echo $_smarty_tpl->tpl_vars['instance']->value->getSubareaPreviewHtml($_smarty_tpl->tpl_vars['areaId']->value);?>

            <?php } else { ?>
                <?php echo $_smarty_tpl->tpl_vars['instance']->value->getSubareaFinalHtml($_smarty_tpl->tpl_vars['areaId']->value);?>

            <?php }?>
        <?php $_block_repeat=false;
echo $_block_plugin129->render(array('class'=>(($tmp = $_smarty_tpl->tpl_vars['areaClass']->value ?? null)===null||$tmp==='' ? null : $tmp),'cols'=>(($tmp = $_smarty_tpl->tpl_vars['colLayout']->value['xs'] ?? null)===null||$tmp==='' ? false : $tmp),'md'=>(($tmp = $_smarty_tpl->tpl_vars['colLayout']->value['sm'] ?? null)===null||$tmp==='' ? false : $tmp),'lg'=>(($tmp = $_smarty_tpl->tpl_vars['colLayout']->value['md'] ?? null)===null||$tmp==='' ? false : $tmp),'xl'=>(($tmp = $_smarty_tpl->tpl_vars['colLayout']->value['lg'] ?? null)===null||$tmp==='' ? false : $tmp),'data'=>array('area-id'=>$_smarty_tpl->tpl_vars['areaId']->value)), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['colLayout']->value['divider'], 'value', false, 'size');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['size']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
            <?php if (!empty($_smarty_tpl->tpl_vars['value']->value)) {?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['clearfix'][0], array( array('visible-size'=>$_smarty_tpl->tpl_vars['size']->value),$_smarty_tpl ) );?>

            <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_block_repeat=false;
echo $_block_plugin128->render(array('data'=>(($tmp = $_smarty_tpl->tpl_vars['data']->value ?? null)===null||$tmp==='' ? array() : $tmp),'class'=>(($_smarty_tpl->tpl_vars['instance']->value->getAnimationClass()).(' ')).($_smarty_tpl->tpl_vars['instance']->value->getStyleClasses()),'style'=>(($tmp = $_smarty_tpl->tpl_vars['instance']->value->getStyleString() ?? null)===null||$tmp==='' ? null : $tmp)), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php if ($_smarty_tpl->tpl_vars['inContainer']->value === false) {?>
    </div>
<?php }
}
}

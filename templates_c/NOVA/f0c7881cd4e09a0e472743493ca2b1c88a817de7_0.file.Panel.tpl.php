<?php
/* Smarty version 4.3.1, created on 2025-01-22 14:58:11
  from 'C:\OSPanel\domains\JTL_shop\includes\src\OPC\Portlets\Panel\Panel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6790f97322fcb5_60429604',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f0c7881cd4e09a0e472743493ca2b1c88a817de7' => 
    array (
      0 => 'C:\\OSPanel\\domains\\JTL_shop\\includes\\src\\OPC\\Portlets\\Panel\\Panel.tpl',
      1 => 1694613030,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6790f97322fcb5_60429604 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('data', $_smarty_tpl->tpl_vars['instance']->value->getAnimationData());?>

<?php if ($_smarty_tpl->tpl_vars['isPreview']->value) {?>
    <?php $_smarty_tpl->_assignInScope('areaClass', 'opc-area');
}?>

<?php if ($_smarty_tpl->tpl_vars['instance']->value->getProperty('panel-state') !== 'default') {?>
    <?php $_smarty_tpl->_assignInScope('stateClass', $_smarty_tpl->tpl_vars['instance']->value->getProperty('panel-state'));
}?>

<?php $_block_plugin124 = isset($_smarty_tpl->smarty->registered_plugins['block']['card'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['card'][0][0] : null;
if (!is_callable(array($_block_plugin124, 'render'))) {
throw new SmartyException('block tag \'card\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('card', array('no-body'=>true,'data'=>(($tmp = $_smarty_tpl->tpl_vars['data']->value ?? null)===null||$tmp==='' ? null : $tmp),'border-variant'=>(($tmp = $_smarty_tpl->tpl_vars['stateClass']->value ?? null)===null||$tmp==='' ? null : $tmp),'style'=>$_smarty_tpl->tpl_vars['instance']->value->getStyleString(),'class'=>(($_smarty_tpl->tpl_vars['instance']->value->getAnimationClass()).(' ')).($_smarty_tpl->tpl_vars['instance']->value->getStyleClasses())));
$_block_repeat=true;
echo $_block_plugin124->render(array('no-body'=>true,'data'=>(($tmp = $_smarty_tpl->tpl_vars['data']->value ?? null)===null||$tmp==='' ? null : $tmp),'border-variant'=>(($tmp = $_smarty_tpl->tpl_vars['stateClass']->value ?? null)===null||$tmp==='' ? null : $tmp),'style'=>$_smarty_tpl->tpl_vars['instance']->value->getStyleString(),'class'=>(($_smarty_tpl->tpl_vars['instance']->value->getAnimationClass()).(' ')).($_smarty_tpl->tpl_vars['instance']->value->getStyleClasses())), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <?php if ($_smarty_tpl->tpl_vars['instance']->value->getProperty('title-flag')) {?>
        <?php $_block_plugin125 = isset($_smarty_tpl->smarty->registered_plugins['block']['cardheader'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['cardheader'][0][0] : null;
if (!is_callable(array($_block_plugin125, 'render'))) {
throw new SmartyException('block tag \'cardheader\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('cardheader', array('class'=>(($tmp = $_smarty_tpl->tpl_vars['areaClass']->value ?? null)===null||$tmp==='' ? null : $tmp),'data'=>array('area-id'=>'header')));
$_block_repeat=true;
echo $_block_plugin125->render(array('class'=>(($tmp = $_smarty_tpl->tpl_vars['areaClass']->value ?? null)===null||$tmp==='' ? null : $tmp),'data'=>array('area-id'=>'header')), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php if ($_smarty_tpl->tpl_vars['isPreview']->value) {?>
                <?php echo $_smarty_tpl->tpl_vars['instance']->value->getSubareaPreviewHtml('header');?>

            <?php } else { ?>
                <?php echo $_smarty_tpl->tpl_vars['instance']->value->getSubareaFinalHtml('header');?>

            <?php }?>
        <?php $_block_repeat=false;
echo $_block_plugin125->render(array('class'=>(($tmp = $_smarty_tpl->tpl_vars['areaClass']->value ?? null)===null||$tmp==='' ? null : $tmp),'data'=>array('area-id'=>'header')), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php }?>
    <?php $_block_plugin126 = isset($_smarty_tpl->smarty->registered_plugins['block']['cardbody'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['cardbody'][0][0] : null;
if (!is_callable(array($_block_plugin126, 'render'))) {
throw new SmartyException('block tag \'cardbody\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('cardbody', array('class'=>(($tmp = $_smarty_tpl->tpl_vars['areaClass']->value ?? null)===null||$tmp==='' ? null : $tmp),'data'=>array('area-id'=>'body')));
$_block_repeat=true;
echo $_block_plugin126->render(array('class'=>(($tmp = $_smarty_tpl->tpl_vars['areaClass']->value ?? null)===null||$tmp==='' ? null : $tmp),'data'=>array('area-id'=>'body')), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php if ($_smarty_tpl->tpl_vars['isPreview']->value) {?>
            <?php echo $_smarty_tpl->tpl_vars['instance']->value->getSubareaPreviewHtml('body');?>

        <?php } else { ?>
            <?php echo $_smarty_tpl->tpl_vars['instance']->value->getSubareaFinalHtml('body');?>

        <?php }?>
    <?php $_block_repeat=false;
echo $_block_plugin126->render(array('class'=>(($tmp = $_smarty_tpl->tpl_vars['areaClass']->value ?? null)===null||$tmp==='' ? null : $tmp),'data'=>array('area-id'=>'body')), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php if ($_smarty_tpl->tpl_vars['instance']->value->getProperty('footer-flag')) {?>
        <?php $_block_plugin127 = isset($_smarty_tpl->smarty->registered_plugins['block']['cardfooter'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['cardfooter'][0][0] : null;
if (!is_callable(array($_block_plugin127, 'render'))) {
throw new SmartyException('block tag \'cardfooter\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('cardfooter', array('class'=>(($tmp = $_smarty_tpl->tpl_vars['areaClass']->value ?? null)===null||$tmp==='' ? null : $tmp),'data'=>array('area-id'=>'footer')));
$_block_repeat=true;
echo $_block_plugin127->render(array('class'=>(($tmp = $_smarty_tpl->tpl_vars['areaClass']->value ?? null)===null||$tmp==='' ? null : $tmp),'data'=>array('area-id'=>'footer')), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php if ($_smarty_tpl->tpl_vars['isPreview']->value) {?>
                <?php echo $_smarty_tpl->tpl_vars['instance']->value->getSubareaPreviewHtml('footer');?>

            <?php } else { ?>
                <?php echo $_smarty_tpl->tpl_vars['instance']->value->getSubareaFinalHtml('footer');?>

            <?php }?>
        <?php $_block_repeat=false;
echo $_block_plugin127->render(array('class'=>(($tmp = $_smarty_tpl->tpl_vars['areaClass']->value ?? null)===null||$tmp==='' ? null : $tmp),'data'=>array('area-id'=>'footer')), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php }
$_block_repeat=false;
echo $_block_plugin124->render(array('no-body'=>true,'data'=>(($tmp = $_smarty_tpl->tpl_vars['data']->value ?? null)===null||$tmp==='' ? null : $tmp),'border-variant'=>(($tmp = $_smarty_tpl->tpl_vars['stateClass']->value ?? null)===null||$tmp==='' ? null : $tmp),'style'=>$_smarty_tpl->tpl_vars['instance']->value->getStyleString(),'class'=>(($_smarty_tpl->tpl_vars['instance']->value->getAnimationClass()).(' ')).($_smarty_tpl->tpl_vars['instance']->value->getStyleClasses())), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}

<?php
/* Smarty version 4.3.1, created on 2025-01-22 14:58:10
  from 'C:\OSPanel\domains\JTL_shop\includes\src\OPC\Portlets\Container\Container.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6790f972a3d189_05731152',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6682d10c0e1225f5be6803f8ac869f45b8e015cc' => 
    array (
      0 => 'C:\\OSPanel\\domains\\JTL_shop\\includes\\src\\OPC\\Portlets\\Container\\Container.tpl',
      1 => 1694613030,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6790f972a3d189_05731152 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'containerContent' => 
  array (
    'compiled_filepath' => 'C:\\OSPanel\\domains\\JTL_shop\\templates_c\\NOVA\\6682d10c0e1225f5be6803f8ac869f45b8e015cc_0.file.Container.tpl.php',
    'uid' => '6682d10c0e1225f5be6803f8ac869f45b8e015cc',
    'call_name' => 'smarty_template_function_containerContent_12162566336790f9729f9f34_17893591',
  ),
));
ob_start();
if ($_smarty_tpl->tpl_vars['instance']->value->getProperty('min-height')) {
echo "min-height:";
echo (string)$_smarty_tpl->tpl_vars['instance']->value->getProperty('min-height');
echo "px;";
}
$_prefixVariable66=ob_get_clean();
$_smarty_tpl->_assignInScope('style', ((string)$_smarty_tpl->tpl_vars['instance']->value->getStyleString()).";".$_prefixVariable66." position:relative;");
$_smarty_tpl->_assignInScope('class', ((('opc-Container ').($_smarty_tpl->tpl_vars['instance']->value->getAnimationClass())).(' ')).($_smarty_tpl->tpl_vars['instance']->value->getStyleClasses()));
$_smarty_tpl->_assignInScope('data', $_smarty_tpl->tpl_vars['instance']->value->getAnimationData());
$_smarty_tpl->_assignInScope('fluid', $_smarty_tpl->tpl_vars['instance']->value->getProperty('boxed') === false);?>

<?php if ($_smarty_tpl->tpl_vars['instance']->value->getProperty('background-flag') === 'still' && !empty($_smarty_tpl->tpl_vars['instance']->value->getProperty('still-src'))) {?>
    <?php $_smarty_tpl->_assignInScope('name', basename($_smarty_tpl->tpl_vars['instance']->value->getProperty('still-src')));?>
    <?php $_smarty_tpl->_assignInScope('imgAttribs', $_smarty_tpl->tpl_vars['instance']->value->getImageAttributes($_smarty_tpl->tpl_vars['instance']->value->getProperty('still-src')));?>
    <?php $_smarty_tpl->_assignInScope('style', ((string)$_smarty_tpl->tpl_vars['style']->value)." background-image:url('".((string)$_smarty_tpl->tpl_vars['imgAttribs']->value['src'])."');");
} elseif ($_smarty_tpl->tpl_vars['instance']->value->getProperty('background-flag') === 'image' && !empty($_smarty_tpl->tpl_vars['instance']->value->getProperty('src'))) {?>
    <?php $_smarty_tpl->_assignInScope('name', basename($_smarty_tpl->tpl_vars['instance']->value->getProperty('src')));?>
    <?php $_smarty_tpl->_assignInScope('class', ((string)$_smarty_tpl->tpl_vars['class']->value)." parallax-window");?>
    <?php $_smarty_tpl->_assignInScope('imgAttribs', $_smarty_tpl->tpl_vars['instance']->value->getImageAttributes());?>
    <?php if ($_smarty_tpl->tpl_vars['isPreview']->value) {?>
        <?php $_smarty_tpl->_assignInScope('style', ((string)$_smarty_tpl->tpl_vars['style']->value)." background-image:url('".((string)$_smarty_tpl->tpl_vars['imgAttribs']->value['src'])."');");?>
        <?php $_smarty_tpl->_assignInScope('style', ((string)$_smarty_tpl->tpl_vars['style']->value)." background-size:cover;");?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('data', array_merge($_smarty_tpl->tpl_vars['data']->value,array('parallax'=>'scroll','z-index'=>'1','image-src'=>$_smarty_tpl->tpl_vars['imgAttribs']->value['src'])));?>
    <?php }
} elseif ($_smarty_tpl->tpl_vars['instance']->value->getProperty('background-flag') === 'video') {?>
    <?php $_smarty_tpl->_assignInScope('style', ((string)$_smarty_tpl->tpl_vars['style']->value)." overflow:hidden;");?>
    <?php $_smarty_tpl->_assignInScope('imgAttribs', $_smarty_tpl->tpl_vars['instance']->value->getImageAttributes($_smarty_tpl->tpl_vars['instance']->value->getProperty('video-poster')));?>
    <?php $_smarty_tpl->_assignInScope('videoPosterUrl', $_smarty_tpl->tpl_vars['imgAttribs']->value['src']);?>
    <?php $_smarty_tpl->_assignInScope('name', basename($_smarty_tpl->tpl_vars['instance']->value->getProperty('video-src')));?>
    <?php ob_start();
echo Shop::getURL();
$_prefixVariable67=ob_get_clean();
$_smarty_tpl->_assignInScope('videoSrcUrl', $_prefixVariable67."/".((string)(defined('PFAD_MEDIA_VIDEO') ? constant('PFAD_MEDIA_VIDEO') : null)).((string)$_smarty_tpl->tpl_vars['name']->value));
}?>



<?php if ($_smarty_tpl->tpl_vars['inContainer']->value) {?>
    <div style="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
" class="<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
"
         <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
             data-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
"
         <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>>
        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'containerContent', array(), true);?>

    </div>
<?php } else { ?>
    <?php $_block_plugin123 = isset($_smarty_tpl->smarty->registered_plugins['block']['container'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['container'][0][0] : null;
if (!is_callable(array($_block_plugin123, 'render'))) {
throw new SmartyException('block tag \'container\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('container', array('style'=>$_smarty_tpl->tpl_vars['style']->value,'class'=>$_smarty_tpl->tpl_vars['class']->value,'data'=>$_smarty_tpl->tpl_vars['data']->value,'fluid'=>$_smarty_tpl->tpl_vars['fluid']->value));
$_block_repeat=true;
echo $_block_plugin123->render(array('style'=>$_smarty_tpl->tpl_vars['style']->value,'class'=>$_smarty_tpl->tpl_vars['class']->value,'data'=>$_smarty_tpl->tpl_vars['data']->value,'fluid'=>$_smarty_tpl->tpl_vars['fluid']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'containerContent', array(), true);?>

    <?php $_block_repeat=false;
echo $_block_plugin123->render(array('style'=>$_smarty_tpl->tpl_vars['style']->value,'class'=>$_smarty_tpl->tpl_vars['class']->value,'data'=>$_smarty_tpl->tpl_vars['data']->value,'fluid'=>$_smarty_tpl->tpl_vars['fluid']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
/* smarty_template_function_containerContent_12162566336790f9729f9f34_17893591 */
if (!function_exists('smarty_template_function_containerContent_12162566336790f9729f9f34_17893591')) {
function smarty_template_function_containerContent_12162566336790f9729f9f34_17893591(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

    <?php if ($_smarty_tpl->tpl_vars['instance']->value->getProperty('background-flag') === 'video' && !empty($_smarty_tpl->tpl_vars['instance']->value->getProperty('video-src'))) {?>
        <video autoplay loop muted poster="<?php echo $_smarty_tpl->tpl_vars['videoPosterUrl']->value;?>
"
               style="display: inherit; width: 100%; position: absolute; left: 0; top: 0; opacity: 0.7;">
            <?php if (!$_smarty_tpl->tpl_vars['isPreview']->value) {?>
                <source src="<?php echo $_smarty_tpl->tpl_vars['videoSrcUrl']->value;?>
" type="video/mp4">
            <?php }?>
        </video>
    <?php }?>
    <div <?php if ($_smarty_tpl->tpl_vars['isPreview']->value) {?>class='opc-area' data-area-id='container'<?php }?> style="position: relative;">
        <?php if ($_smarty_tpl->tpl_vars['isPreview']->value) {?>
            <?php echo $_smarty_tpl->tpl_vars['instance']->value->getSubareaPreviewHtml('container');?>

        <?php } else { ?>
            <?php echo $_smarty_tpl->tpl_vars['instance']->value->getSubareaFinalHtml('container');?>

        <?php }?>
    </div>
<?php
}}
/*/ smarty_template_function_containerContent_12162566336790f9729f9f34_17893591 */
}

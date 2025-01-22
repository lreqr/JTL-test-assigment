<?php
/* Smarty version 4.3.1, created on 2025-01-22 14:58:11
  from 'C:\OSPanel\domains\JTL_shop\includes\src\OPC\Portlets\Image\Image.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6790f9739bd1d6_52767339',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'abf1c22fa682d036d1658a5238239b46e385fe1e' => 
    array (
      0 => 'C:\\OSPanel\\domains\\JTL_shop\\includes\\src\\OPC\\Portlets\\Image\\Image.tpl',
      1 => 1694613030,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6790f9739bd1d6_52767339 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('imgAttribs', $_smarty_tpl->tpl_vars['instance']->value->getImageAttributes());?>

<?php if ($_smarty_tpl->tpl_vars['isPreview']->value && empty($_smarty_tpl->tpl_vars['imgAttribs']->value['src'])) {?>
    <div class="opc-Image" style="<?php echo $_smarty_tpl->tpl_vars['instance']->value->getStyleString();?>
">
        <div>
            <i class="far fa-image"></i>
            <span><?php echo __('Image');?>
</span>
        </div>
    </div>
<?php } elseif (!empty($_smarty_tpl->tpl_vars['imgAttribs']->value['src'])) {?>
    <?php $_smarty_tpl->_assignInScope('alignCSS', '');?>
    <?php if ($_smarty_tpl->tpl_vars['instance']->value->getProperty('align') === 'left') {?>
        <?php $_smarty_tpl->_assignInScope('alignCSS', 'margin-right: auto;');?>
    <?php } elseif ($_smarty_tpl->tpl_vars['instance']->value->getProperty('align') === 'right') {?>
        <?php $_smarty_tpl->_assignInScope('alignCSS', 'margin-left: auto;');?>
    <?php } elseif ($_smarty_tpl->tpl_vars['instance']->value->getProperty('align') === 'center') {?>
        <?php $_smarty_tpl->_assignInScope('alignCSS', 'margin-left: auto;margin-right: auto;');?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['isPreview']->value) {?>
        <div class="opc-Image-with-image">
    <?php }?>
    <div style="max-width: <?php echo $_smarty_tpl->tpl_vars['imgAttribs']->value['realWidth'];?>
px; <?php echo $_smarty_tpl->tpl_vars['alignCSS']->value;?>
" class="<?php echo $_smarty_tpl->tpl_vars['instance']->value->getStyleClasses();?>
">
        <?php $_smarty_tpl->_assignInScope('isLink', $_smarty_tpl->tpl_vars['instance']->value->getProperty('is-link'));?>
        <?php $_smarty_tpl->_assignInScope('href', $_smarty_tpl->tpl_vars['instance']->value->getProperty('url'));?>

        <?php if ($_smarty_tpl->tpl_vars['isLink']->value && !$_smarty_tpl->tpl_vars['isPreview']->value && !empty($_smarty_tpl->tpl_vars['href']->value)) {?>
            <a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'utf-8', true);?>
"
                <?php if (!empty($_smarty_tpl->tpl_vars['instance']->value->getProperty('link-title'))) {?>
                    title = "<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['instance']->value->getProperty('link-title'), ENT_QUOTES, 'utf-8', true);?>
"
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['instance']->value->getProperty('new-tab') === true) {?>
                    target = "_blank"
                <?php }?>>
        <?php }?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0], array( array('src'=>$_smarty_tpl->tpl_vars['imgAttribs']->value['src'],'srcset'=>$_smarty_tpl->tpl_vars['imgAttribs']->value['srcset'],'sizes'=>$_smarty_tpl->tpl_vars['imgAttribs']->value['srcsizes'],'class'=>'img-aspect-ratio','width'=>$_smarty_tpl->tpl_vars['imgAttribs']->value['realWidth'],'height'=>$_smarty_tpl->tpl_vars['imgAttribs']->value['realHeight'],'alt'=>htmlspecialchars((string)$_smarty_tpl->tpl_vars['imgAttribs']->value['alt'], ENT_QUOTES, 'utf-8', true),'title'=>$_smarty_tpl->tpl_vars['imgAttribs']->value['title'],'style'=>$_smarty_tpl->tpl_vars['instance']->value->getStyleString(),'rounded'=>$_smarty_tpl->tpl_vars['portlet']->value->getRoundedProp($_smarty_tpl->tpl_vars['instance']->value),'thumbnail'=>$_smarty_tpl->tpl_vars['portlet']->value->getThumbnailProp($_smarty_tpl->tpl_vars['instance']->value),'fluid-grow'=>true,'webp'=>true,'attribs'=>array('draggable'=>'false')),$_smarty_tpl ) );?>

        <?php if ($_smarty_tpl->tpl_vars['isLink']->value && !$_smarty_tpl->tpl_vars['isPreview']->value && !empty($_smarty_tpl->tpl_vars['href']->value)) {?>
            </a>
        <?php }?>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['isPreview']->value) {?>
        </div>
    <?php }
}
}
}

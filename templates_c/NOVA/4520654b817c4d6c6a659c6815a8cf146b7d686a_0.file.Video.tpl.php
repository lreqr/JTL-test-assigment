<?php
/* Smarty version 4.3.1, created on 2025-01-22 14:58:17
  from 'C:\OSPanel\domains\JTL_shop\includes\src\OPC\Portlets\Video\Video.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6790f979481011_42303145',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4520654b817c4d6c6a659c6815a8cf146b7d686a' => 
    array (
      0 => 'C:\\OSPanel\\domains\\JTL_shop\\includes\\src\\OPC\\Portlets\\Video\\Video.tpl',
      1 => 1694613030,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6790f979481011_42303145 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OSPanel\\domains\\JTL_shop\\includes\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
if ($_smarty_tpl->tpl_vars['isPreview']->value) {?>
    <div <?php echo $_smarty_tpl->tpl_vars['instance']->value->getAttributeString();?>
 class="opc-Video" style="position: relative">
        <?php if (!empty($_smarty_tpl->tpl_vars['instance']->value->getProperty('video-responsive'))) {?>
            <?php $_smarty_tpl->_assignInScope('style', 'width:100%;');?>
        <?php } else { ?>
            <?php $_smarty_tpl->_assignInScope('style', 'width:');?>
            <?php $_smarty_tpl->_assignInScope('style', ($_smarty_tpl->tpl_vars['style']->value).($_smarty_tpl->tpl_vars['instance']->value->getProperty('video-width')));?>
            <?php $_smarty_tpl->_assignInScope('style', ($_smarty_tpl->tpl_vars['style']->value).('px;height:'));?>
            <?php $_smarty_tpl->_assignInScope('style', ($_smarty_tpl->tpl_vars['style']->value).($_smarty_tpl->tpl_vars['instance']->value->getProperty('video-height')));?>
            <?php $_smarty_tpl->_assignInScope('style', ($_smarty_tpl->tpl_vars['style']->value).('px;'));?>
        <?php }?>

        <?php $_smarty_tpl->_assignInScope('src', $_smarty_tpl->tpl_vars['portlet']->value->getPreviewImageUrl($_smarty_tpl->tpl_vars['instance']->value));?>

        <?php if ($_smarty_tpl->tpl_vars['src']->value !== null && $_smarty_tpl->tpl_vars['instance']->value->getProperty('video-vendor') === 'youtube') {?>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0], array( array('src'=>$_smarty_tpl->tpl_vars['src']->value,'alt'=>'YouTube Video','fluid'=>true,'style'=>$_smarty_tpl->tpl_vars['style']->value),$_smarty_tpl ) );?>

            <div class="give-consent-preview" style="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
background-image: url(<?php echo $_smarty_tpl->tpl_vars['portlet']->value->getPreviewOverlayUrl();?>
)"></div>
        <?php } elseif ($_smarty_tpl->tpl_vars['src']->value !== null && $_smarty_tpl->tpl_vars['instance']->value->getProperty('video-vendor') === 'vimeo') {?>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0], array( array('src'=>$_smarty_tpl->tpl_vars['src']->value,'alt'=>'Vimeo Video','fluid'=>true,'style'=>$_smarty_tpl->tpl_vars['style']->value),$_smarty_tpl ) );?>

            <div class="give-consent-preview" style="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
background-image: url(<?php echo $_smarty_tpl->tpl_vars['portlet']->value->getPreviewOverlayUrl();?>
)"></div>
        <?php } else { ?>
            <div>
                <i class="fas fa-film"></i>
                <span><?php echo __('Video');?>
</span>
            </div>
        <?php }?>
    </div>
<?php } else { ?>
    <?php $_smarty_tpl->_assignInScope('previewImageUrl', $_smarty_tpl->tpl_vars['portlet']->value->getPreviewImageUrl($_smarty_tpl->tpl_vars['instance']->value));?>

    <div id="<?php echo $_smarty_tpl->tpl_vars['instance']->value->getUid();?>
" <?php echo $_smarty_tpl->tpl_vars['instance']->value->getAttributeString();?>
 class="opc-Video <?php echo $_smarty_tpl->tpl_vars['instance']->value->getStyleClasses();?>
">
        <?php if (!empty($_smarty_tpl->tpl_vars['instance']->value->getProperty('video-title'))) {?>
            <label><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['instance']->value->getProperty('video-title'), ENT_QUOTES, 'utf-8', true);?>
</label>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['instance']->value->getProperty('video-vendor') === 'youtube') {?>
            <div class="opc-Video-iframe-wrapper <?php if ($_smarty_tpl->tpl_vars['instance']->value->getProperty('video-responsive')) {?>embed-responsive embed-responsive-16by9<?php }?>">
                <iframe data-src="https://www.youtube-nocookie.com/embed/<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['instance']->value->getProperty('video-yt-id'), ENT_QUOTES, 'utf-8', true);?>
?controls=<?php echo $_smarty_tpl->tpl_vars['instance']->value->getProperty('video-yt-controls');?>
&loop=<?php echo $_smarty_tpl->tpl_vars['instance']->value->getProperty('video-yt-loop');?>
&rel=<?php echo $_smarty_tpl->tpl_vars['instance']->value->getProperty('video-yt-rel');?>
&showinfo=0&color=<?php echo $_smarty_tpl->tpl_vars['instance']->value->getProperty('video-yt-color');?>
&iv_load_policy=3<?php if (!empty($_smarty_tpl->tpl_vars['instance']->value->getProperty('video-yt-playlist'))) {?>&playlist=<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['instance']->value->getProperty('video-yt-playlist'), ENT_QUOTES, 'utf-8', true);
}
if (!empty($_smarty_tpl->tpl_vars['instance']->value->getProperty('video-yt-start'))) {?>&start=<?php echo $_smarty_tpl->tpl_vars['instance']->value->getProperty('video-yt-start');
}
if (!empty($_smarty_tpl->tpl_vars['instance']->value->getProperty('video-yt-end'))) {?>&end=<?php echo $_smarty_tpl->tpl_vars['instance']->value->getProperty('video-yt-end');
}?>"
                        class="needs-consent youtube
                            <?php if ($_smarty_tpl->tpl_vars['instance']->value->getProperty('video-responsive')) {?>embed-responsive-item<?php }?>"
                        <?php if (!empty($_smarty_tpl->tpl_vars['instance']->value->getProperty('video-title'))) {?>
                            title="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['instance']->value->getProperty('video-title'), ENT_QUOTES, 'utf-8', true);?>
"
                        <?php }?>
                        <?php if (!$_smarty_tpl->tpl_vars['instance']->value->getProperty('video-responsive')) {?>
                            width="<?php echo $_smarty_tpl->tpl_vars['instance']->value->getProperty('video-width');?>
"
                            height="<?php echo $_smarty_tpl->tpl_vars['instance']->value->getProperty('video-height');?>
"
                        <?php }?>
                        allowfullscreen></iframe>
                <a href="#" class="trigger give-consent give-consent-preview"
                   data-consent="youtube"
                   style="background-image:
                           url(<?php echo $_smarty_tpl->tpl_vars['portlet']->value->getPreviewOverlayUrl();?>
)
                           <?php if ($_smarty_tpl->tpl_vars['previewImageUrl']->value !== null) {?>,url(<?php echo $_smarty_tpl->tpl_vars['previewImageUrl']->value;?>
);<?php }?>">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'allowConsentYouTube'),$_smarty_tpl ) );?>

                </a>
            </div>
        <?php } elseif ($_smarty_tpl->tpl_vars['instance']->value->getProperty('video-vendor') === 'vimeo') {?>
            <div class="opc-Video-iframe-wrapper <?php if ($_smarty_tpl->tpl_vars['instance']->value->getProperty('video-responsive')) {?>embed-responsive embed-responsive-16by9<?php }?>">
                <iframe data-src="https://player.vimeo.com/video/<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['instance']->value->getProperty('video-vim-id'), ENT_QUOTES, 'utf-8', true);?>
?color=<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['instance']->value->getProperty('video-vim-color'),'#','');?>
&portrait=<?php echo $_smarty_tpl->tpl_vars['instance']->value->getProperty('video-vim-img');?>
&title=<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['instance']->value->getProperty('video-vim-title'), ENT_QUOTES, 'utf-8', true);?>
&byline=<?php echo $_smarty_tpl->tpl_vars['instance']->value->getProperty('video-vim-byline');?>
&loop=<?php echo $_smarty_tpl->tpl_vars['instance']->value->getProperty('video-vim-loop');?>
"
                        class="needs-consent vimeo
                            <?php if ($_smarty_tpl->tpl_vars['instance']->value->getProperty('video-responsive')) {?>embed-responsive-item<?php }?>"
                        allowfullscreen
                        <?php if (!empty($_smarty_tpl->tpl_vars['instance']->value->getProperty('video-title'))) {?>
                            title="<?php echo $_smarty_tpl->tpl_vars['instance']->value->getProperty('video-title');?>
"
                        <?php }?>
                        <?php if (!$_smarty_tpl->tpl_vars['instance']->value->getProperty('video-responsive')) {?>
                            width="<?php echo $_smarty_tpl->tpl_vars['instance']->value->getProperty('video-width');?>
"
                            height="<?php echo $_smarty_tpl->tpl_vars['instance']->value->getProperty('video-height');?>
"
                        <?php }?>></iframe>
                <a href="#" class="trigger give-consent give-consent-preview"
                   data-consent="vimeo"
                   style="background-image:
                           url(<?php echo $_smarty_tpl->tpl_vars['portlet']->value->getPreviewOverlayUrl();?>
)
                           <?php if ($_smarty_tpl->tpl_vars['previewImageUrl']->value !== null) {?>,url(<?php echo $_smarty_tpl->tpl_vars['previewImageUrl']->value;?>
);<?php }?>">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'allowConsentVimeo'),$_smarty_tpl ) );?>

                </a>
            </div>
        <?php } else { ?>
            <div class="opc-Video-iframe-wrapper <?php if ($_smarty_tpl->tpl_vars['instance']->value->getProperty('video-responsive')) {?>embed-responsive embed-responsive-16by9<?php }?>">
                <video <?php if ($_smarty_tpl->tpl_vars['instance']->value->getProperty('video-width')) {?>width="<?php echo $_smarty_tpl->tpl_vars['instance']->value->getProperty('video-width');?>
"<?php }?>
                       <?php if ($_smarty_tpl->tpl_vars['instance']->value->getProperty('video-height')) {?>height="<?php echo $_smarty_tpl->tpl_vars['instance']->value->getProperty('video-height');?>
"<?php }?>
                       <?php if ($_smarty_tpl->tpl_vars['instance']->value->getProperty('video-local-autoplay')) {?> autoplay<?php }?>
                       <?php if ($_smarty_tpl->tpl_vars['instance']->value->getProperty('video-local-mute')) {?> muted<?php }?>
                       <?php if ($_smarty_tpl->tpl_vars['instance']->value->getProperty('video-local-loop')) {?> loop<?php }?>
                       <?php if ($_smarty_tpl->tpl_vars['instance']->value->getProperty('video-local-controls')) {?> controls<?php }?> style="">
                    <source src="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['instance']->value->getProperty('video-local-url'), ENT_QUOTES, 'utf-8', true);?>
" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        <?php }?>
    </div>
<?php }
}
}

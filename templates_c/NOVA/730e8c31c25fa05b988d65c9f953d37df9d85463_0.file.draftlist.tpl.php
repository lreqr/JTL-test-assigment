<?php
/* Smarty version 4.3.1, created on 2025-01-22 17:00:23
  from 'C:\OSPanel\domains\JTL_shop\admin\opc\tpl\draftlist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_67911617e4b051_11805119',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '730e8c31c25fa05b988d65c9f953d37df9d85463' => 
    array (
      0 => 'C:\\OSPanel\\domains\\JTL_shop\\admin\\opc\\tpl\\draftlist.tpl',
      1 => 1694613029,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67911617e4b051_11805119 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OSPanel\\domains\\JTL_shop\\includes\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pageDrafts']->value, 'draft', false, 'i');
$_smarty_tpl->tpl_vars['draft']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['draft']->value) {
$_smarty_tpl->tpl_vars['draft']->do_else = false;
?>
    <?php $_smarty_tpl->_assignInScope('draftStatus', $_smarty_tpl->tpl_vars['draft']->value->getStatus($_smarty_tpl->tpl_vars['publicDraftKey']->value));?>
    <li class="opc-draft" id="opc-draft-<?php echo $_smarty_tpl->tpl_vars['draft']->value->getKey();?>
" data-draft-status="<?php echo $_smarty_tpl->tpl_vars['draftStatus']->value;?>
"
        data-draft-name="<?php echo $_smarty_tpl->tpl_vars['draft']->value->getName();?>
" data-draft-key="<?php echo $_smarty_tpl->tpl_vars['draft']->value->getKey();?>
">
        <input type="checkbox" id="check-<?php echo $_smarty_tpl->tpl_vars['draft']->value->getKey();?>
" onchange="opcDraftCheckboxChanged()"
               class="draft-checkbox filtered-draft">
        <label for="check-<?php echo $_smarty_tpl->tpl_vars['draft']->value->getKey();?>
" class="opc-draft-name" title="<?php echo $_smarty_tpl->tpl_vars['draft']->value->getName();?>
">
            <?php echo $_smarty_tpl->tpl_vars['draft']->value->getName();?>

        </label>
        <?php if ($_smarty_tpl->tpl_vars['draftStatus']->value === 0) {?>
            <span class="opc-draft-status opc-public">
                <i class="fa fas fa-circle fa-xs"></i> <?php echo __('active');?>

            </span>
        <?php } elseif ($_smarty_tpl->tpl_vars['draftStatus']->value === 1) {?>
            <span class="opc-draft-status opc-planned">
                <i class="fa fas fa-circle fa-xs"></i> <?php echo __('planned');?>

            </span>
        <?php } elseif ($_smarty_tpl->tpl_vars['draftStatus']->value === 2) {?>
            <span class="opc-draft-status opc-status-draft">
                <i class="fa fas fa-circle fa-xs"></i> <?php echo __('draft');?>

            </span>
        <?php } elseif ($_smarty_tpl->tpl_vars['draftStatus']->value === 3) {?>
            <span class="opc-draft-status opc-backdate">
                <i class="fa fas fa-circle fa-xs"></i> <?php echo __('past');?>

            </span>
        <?php }?>
        <div class="opc-draft-info">
            <div class="opc-draft-info-line">
                <?php if ($_smarty_tpl->tpl_vars['draftStatus']->value === 0) {?>
                    <?php if ($_smarty_tpl->tpl_vars['draft']->value->getPublishTo() === null) {?>
                        <span class="opc-public"><?php echo __('activeSince');?>
</span>
                        <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['draft']->value->getPublishFrom(),'d.m.Y - H:i');?>

                    <?php } else { ?>
                        <span class="opc-public"><?php echo __('activeUntil');?>
</span>
                        <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['draft']->value->getPublishTo(),'d.m.Y - H:i');?>

                    <?php }?>
                <?php } elseif ($_smarty_tpl->tpl_vars['draftStatus']->value === 1) {?>
                    <span class="opc-planned"><?php echo __('scheduledFor');?>
</span>
                    <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['draft']->value->getPublishFrom(),'d.m.Y - H:i');?>

                <?php } elseif ($_smarty_tpl->tpl_vars['draftStatus']->value === 2) {?>
                    <span class="opc-status-draft"><?php echo __('notScheduled');?>
</span>
                <?php } elseif ($_smarty_tpl->tpl_vars['draftStatus']->value === 3) {?>
                    <span class="opc-backdate"><?php echo __('expiredOn');?>
</span>
                    <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['draft']->value->getPublishTo(),'d.m.Y - H:i');?>

                <?php }?>
            </div>
            <div class="opc-draft-actions">
                <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['opcStartUrl']->value;?>
">
                    <input type="hidden" name="jtl_token" value="<?php echo $_smarty_tpl->tpl_vars['adminSessionToken']->value;?>
">
                    <input type="hidden" name="pageKey" value="<?php echo $_smarty_tpl->tpl_vars['draft']->value->getKey();?>
">
                    <button type="submit" name="action" value="edit" data-toggle="tooltip"
                            title="<?php echo __('modify');?>
" data-placement="bottom" data-container="#opc">
                        <i class="fa fa-lg fa-fw fas fa-pencil-alt fa-pencil"></i>
                    </button>
                </form>
                <button type="button" onclick="duplicateOpcDraft(<?php echo $_smarty_tpl->tpl_vars['draft']->value->getKey();?>
)"
                        data-toggle="tooltip" title="<?php echo __('duplicate');?>
" data-placement="bottom"
                        data-container="#opc">
                    <i class="fa fa-lg fa-fw far fa-clone"></i>
                </button>
                <div class="opc-dropdown">
                    <button type="button"
                            data-toggle="dropdown" title="<?php echo __('useForOtherLang');?>
" data-container="#opc">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['ShopURL']->value;?>
/admin/opc/gfx/icon-copysprache.svg" width="26" height="17" alt="<?php echo __('useForOtherLang');?>
">
                    </button>
                    <div class="dropdown-menu opc-dropdown-menu">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'lang');
$_smarty_tpl->tpl_vars['lang']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['lang']->value) {
$_smarty_tpl->tpl_vars['lang']->do_else = false;
?>
                            <?php if ($_smarty_tpl->tpl_vars['lang']->value->id !== $_smarty_tpl->tpl_vars['currentLanguage']->value->id) {?>
                                <?php if ((isset($_smarty_tpl->tpl_vars['lang']->value->pageId))) {?>
                                    <?php $_smarty_tpl->_assignInScope('langPageId', $_smarty_tpl->tpl_vars['lang']->value->pageId);?>
                                <?php } else { ?>
                                    <?php $_smarty_tpl->_assignInScope('langPageId', $_smarty_tpl->tpl_vars['opcPageService']->value->createCurrentPageId($_smarty_tpl->tpl_vars['lang']->value->id));?>
                                <?php }?>
                                <?php if ((isset($_smarty_tpl->tpl_vars['lang']->value->pageUri))) {?>
                                    <?php $_smarty_tpl->_assignInScope('langPageUri', $_smarty_tpl->tpl_vars['lang']->value->pageUri);?>
                                <?php } else { ?>
                                    <?php $_smarty_tpl->_assignInScope('langPageUri', $_smarty_tpl->tpl_vars['opcPageService']->value->getCurPageUri($_smarty_tpl->tpl_vars['lang']->value->id));?>
                                <?php }?>
                                <form method="post"
                                      action="<?php echo $_smarty_tpl->tpl_vars['opcStartUrl']->value;?>
">
                                    <input type="hidden" name="jtl_token" value="<?php echo $_smarty_tpl->tpl_vars['adminSessionToken']->value;?>
">
                                    <input type="hidden" name="action" value="adopt">
                                    <input type="hidden" name="pageKey" value="<?php echo $_smarty_tpl->tpl_vars['draft']->value->getKey();?>
">
                                    <input type="hidden" name="pageId" value="<?php echo htmlentities($_smarty_tpl->tpl_vars['langPageId']->value);?>
">
                                    <input type="hidden" name="pageName" value="<?php echo $_smarty_tpl->tpl_vars['draft']->value->getName();?>
 (<?php echo $_smarty_tpl->tpl_vars['lang']->value->nameDE;?>
)">
                                    <button type="submit" name="pageUrl" class="opc-dropdown-item"
                                            value="<?php echo $_smarty_tpl->tpl_vars['langPageUri']->value;?>
">
                                        <?php echo $_smarty_tpl->tpl_vars['lang']->value->nameDE;?>

                                    </button>
                                </form>
                            <?php }?>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                </div>
                <button type="button" onclick="deleteOpcDraft(<?php echo $_smarty_tpl->tpl_vars['draft']->value->getKey();?>
, '<?php echo $_smarty_tpl->tpl_vars['draft']->value->getName();?>
')"
                        data-toggle="tooltip" title="<?php echo __('delete');?>
"
                        data-placement="bottom" data-container="#opc">
                    <i class="fa fa-lg fa-fw fas fa-trash"></i>
                </button>
            </div>
        </div>
    </li>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}

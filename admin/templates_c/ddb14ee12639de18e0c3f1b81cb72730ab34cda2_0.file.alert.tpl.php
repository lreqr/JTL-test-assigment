<?php
/* Smarty version 4.3.1, created on 2025-01-22 17:03:37
  from 'C:\OSPanel\domains\JTL_shop\admin\templates\bootstrap\snippets\alert.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_679116d9beb892_88276075',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ddb14ee12639de18e0c3f1b81cb72730ab34cda2' => 
    array (
      0 => 'C:\\OSPanel\\domains\\JTL_shop\\admin\\templates\\bootstrap\\snippets\\alert.tpl',
      1 => 1694613029,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_679116d9beb892_88276075 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="alert alert-<?php echo $_smarty_tpl->tpl_vars['alert']->value->getCssType();?>
 align-items-center"
    data-fade-out="<?php echo $_smarty_tpl->tpl_vars['alert']->value->getFadeOut();?>
"
    data-key="<?php echo $_smarty_tpl->tpl_vars['alert']->value->getKey();?>
"
    <?php if ($_smarty_tpl->tpl_vars['alert']->value->getId()) {?>id="<?php echo $_smarty_tpl->tpl_vars['alert']->value->getId();?>
"<?php }?>
>
    <?php if ($_smarty_tpl->tpl_vars['alert']->value->getIcon() === 'danger' || $_smarty_tpl->tpl_vars['alert']->value->getIcon() === 'warning') {?>
        <?php $_smarty_tpl->_assignInScope('icon', 'exclamation-triangle');?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('icon', $_smarty_tpl->tpl_vars['alert']->value->getIcon());?>
    <?php }?>
    <div class="row mr-0">
        <div class="col">
            <?php if ($_smarty_tpl->tpl_vars['alert']->value->getIcon()) {?><i class="fal fa-<?php echo $_smarty_tpl->tpl_vars['icon']->value;?>
 mr-2"></i><?php }?>
            <?php if (!empty($_smarty_tpl->tpl_vars['alert']->value->getLinkHref()) && empty($_smarty_tpl->tpl_vars['alert']->value->getLinkText())) {?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['alert']->value->getLinkHref();?>
"><?php echo $_smarty_tpl->tpl_vars['alert']->value->getMessage();?>
</a>
            <?php } elseif (!empty($_smarty_tpl->tpl_vars['alert']->value->getLinkHref()) && !empty($_smarty_tpl->tpl_vars['alert']->value->getLinkText())) {?>
                <?php echo $_smarty_tpl->tpl_vars['alert']->value->getMessage();?>

                <a href="<?php echo $_smarty_tpl->tpl_vars['alert']->value->getLinkHref();?>
"><?php echo $_smarty_tpl->tpl_vars['alert']->value->getLinkText();?>
</a>
            <?php } else { ?>
                <?php echo $_smarty_tpl->tpl_vars['alert']->value->getMessage();?>

            <?php }?>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['alert']->value->getDismissable()) {?>
            <div class="col-auto ml-auto">
                <div class="close">&times;</div>
            </div>
        <?php }?>
    </div>
</div>
<?php }
}

<?php
/* Smarty version 4.3.1, created on 2025-01-22 17:03:46
  from 'C:\OSPanel\domains\JTL_shop\admin\templates\bootstrap\tpl_inc\model_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_679116e22b6490_74336713',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '300d98471cc4cd56d7a9898fa02f23ba484d6dd2' => 
    array (
      0 => 'C:\\OSPanel\\domains\\JTL_shop\\admin\\templates\\bootstrap\\tpl_inc\\model_list.tpl',
      1 => 1694613029,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl_inc/seite_header.tpl' => 1,
    'file:tpl_inc/pagination.tpl' => 2,
  ),
),false)) {
function content_679116e22b6490_74336713 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('select', (($tmp = $_smarty_tpl->tpl_vars['select']->value ?? null)===null||$tmp==='' ? true : $tmp));
$_smarty_tpl->_assignInScope('create', (($tmp = $_smarty_tpl->tpl_vars['create']->value ?? null)===null||$tmp==='' ? false : $tmp));
$_smarty_tpl->_assignInScope('edit', (($tmp = $_smarty_tpl->tpl_vars['edit']->value ?? null)===null||$tmp==='' ? true : $tmp));
$_smarty_tpl->_assignInScope('delete', (($tmp = $_smarty_tpl->tpl_vars['delete']->value ?? null)===null||$tmp==='' ? false : $tmp));
$_smarty_tpl->_assignInScope('save', (($tmp = $_smarty_tpl->tpl_vars['save']->value ?? null)===null||$tmp==='' ? false : $tmp));
$_smarty_tpl->_assignInScope('enable', (($tmp = $_smarty_tpl->tpl_vars['enable']->value ?? null)===null||$tmp==='' ? false : $tmp));
$_smarty_tpl->_assignInScope('disable', (($tmp = $_smarty_tpl->tpl_vars['disable']->value ?? null)===null||$tmp==='' ? false : $tmp));
$_smarty_tpl->_assignInScope('action', (($tmp = $_smarty_tpl->tpl_vars['action']->value ?? null)===null||$tmp==='' ? (($_smarty_tpl->tpl_vars['shopURL']->value).($_SERVER['PHP_SELF'])) : $tmp));
$_smarty_tpl->_assignInScope('search', (($tmp = $_smarty_tpl->tpl_vars['search']->value ?? null)===null||$tmp==='' ? false : $tmp));
$_smarty_tpl->_assignInScope('searchQuery', (($tmp = $_smarty_tpl->tpl_vars['searchQuery']->value ?? null)===null||$tmp==='' ? null : $tmp));
$_smarty_tpl->_assignInScope('pagination', (($tmp = $_smarty_tpl->tpl_vars['pagination']->value ?? null)===null||$tmp==='' ? null : $tmp));
$_smarty_tpl->_assignInScope('method', (($tmp = $_smarty_tpl->tpl_vars['method']->value ?? null)===null||$tmp==='' ? 'post' : $tmp));
$_smarty_tpl->_assignInScope('settings', (($tmp = $_smarty_tpl->tpl_vars['settings']->value ?? null)===null||$tmp==='' ? null : $tmp));
$_smarty_tpl->_assignInScope('tabs', (($tmp = $_smarty_tpl->tpl_vars['settings']->value ?? null)===null||$tmp==='' ? null : $tmp));
$_smarty_tpl->_assignInScope('includeHeader', (($tmp = $_smarty_tpl->tpl_vars['includeHeader']->value ?? null)===null||$tmp==='' ? true : $tmp));
$_smarty_tpl->_assignInScope('params', null);?>

<?php if ($_smarty_tpl->tpl_vars['includeHeader']->value === true) {?>
    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/seite_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cTitel'=>__('pageTitle'),'cBeschreibung'=>__('pageDesc'),'cDokuURL'=>__('docURL')), 0, false);
}?>

<?php if ($_smarty_tpl->tpl_vars['items']->value->count() > 0) {?>
    <?php if ($_smarty_tpl->tpl_vars['search']->value === true) {?>
        <div class="search-toolbar mb-3">
            <form name="datamodel" method="post" action="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
                <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

                <input type="hidden" name="Suche" value="1" />
                <div class="form-row">
                    <label class="col-sm-auto col-form-label" for="modelsearch"><?php echo __('search');?>
:</label>
                    <div class="col-sm-auto mb-2">
                        <input class="form-control" name="cSuche" type="text" value="<?php if ($_smarty_tpl->tpl_vars['searchQuery']->value !== null) {
echo $_smarty_tpl->tpl_vars['searchQuery']->value;
}?>" id="modelsearch" />
                    </div>
                    <span class="col-sm-auto">
                        <button name="submitSuche" type="submit" class="btn btn-primary btn-block"><i class="fal fa-search"></i></button>
                    </span>
                </div>
            </form>
        </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['searchQuery']->value !== null) {?>
        <?php $_smarty_tpl->_assignInScope('params', array('cSuche'=>$_smarty_tpl->tpl_vars['searchQuery']->value));?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['pagination']->value !== null) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pagination'=>$_smarty_tpl->tpl_vars['pagination']->value,'cParam_arr'=>$_smarty_tpl->tpl_vars['params']->value), 0, false);
?>
    <?php }?>
    <form name="modelform" id="modelform" method="<?php echo $_smarty_tpl->tpl_vars['method']->value;?>
" action="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
        <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

        <input type="hidden" name="id" id="modelid" />
        <?php if ($_smarty_tpl->tpl_vars['search']->value !== null) {?>
            <input type="hidden" name="cSuche" value="<?php echo $_smarty_tpl->tpl_vars['search']->value;?>
" />
        <?php }?>
        <?php $_smarty_tpl->_assignInScope('first', $_smarty_tpl->tpl_vars['items']->value->first());?>
        <div class="table-responsive">
            <table class="table table-striped table-align-top">
                <thead>
                <tr>
                    <?php if ($_smarty_tpl->tpl_vars['select']->value === true) {?>
                        <th class="check">&nbsp;</th>
                    <?php }?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['first']->value->getAttributes(), 'attr');
$_smarty_tpl->tpl_vars['attr']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['attr']->value) {
$_smarty_tpl->tpl_vars['attr']->do_else = false;
?>
                        <?php $_smarty_tpl->_assignInScope('type', $_smarty_tpl->tpl_vars['attr']->value->getDataType());?>
                        <?php if ($_smarty_tpl->tpl_vars['attr']->value->getInputConfig()->isHidden() === false && (strpos($_smarty_tpl->tpl_vars['type']->value,"\\") === false || !class_exists($_smarty_tpl->tpl_vars['type']->value))) {?>
                            <th><?php ob_start();
echo $_smarty_tpl->tpl_vars['attr']->value->getName();
$_prefixVariable1 = ob_get_clean();
echo __($_prefixVariable1);?>
</th>
                        <?php }?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php if ($_smarty_tpl->tpl_vars['edit']->value === true) {?>
                        <th class="text-center">&nbsp;</th>
                    <?php }?>
                </tr>
                </thead>
                <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item');
$_smarty_tpl->tpl_vars['item']->index = -1;
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
$_smarty_tpl->tpl_vars['item']->index++;
$__foreach_item_1_saved = $_smarty_tpl->tpl_vars['item'];
?>
                    <tr>
                        <?php if ($_smarty_tpl->tpl_vars['select']->value === true) {?>
                            <td class="check">
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" name="mid[<?php echo $_smarty_tpl->tpl_vars['item']->index;?>
]" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->getId();?>
" id="mid-<?php echo $_smarty_tpl->tpl_vars['item']->value->getId();?>
" />
                                    <label class="custom-control-label" for="mid-<?php echo $_smarty_tpl->tpl_vars['item']->value->getId();?>
"></label>
                                </div>
                            </td>
                        <?php }?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value->getAttributes(), 'attr');
$_smarty_tpl->tpl_vars['attr']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['attr']->value) {
$_smarty_tpl->tpl_vars['attr']->do_else = false;
?>
                            <?php $_smarty_tpl->_assignInScope('type', $_smarty_tpl->tpl_vars['attr']->value->getDataType());?>
                            <?php if ($_smarty_tpl->tpl_vars['attr']->value->getInputConfig()->isHidden() === false && (strpos($_smarty_tpl->tpl_vars['type']->value,"\\") === false || !class_exists($_smarty_tpl->tpl_vars['type']->value))) {?>
                                <td>
                                    <?php $_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['item']->value->getAttribValue($_smarty_tpl->tpl_vars['attr']->value->getName()));?>
                                    <?php if ($_smarty_tpl->tpl_vars['attr']->value->getDataType() === 'tinyint' && count($_smarty_tpl->tpl_vars['attr']->value->getInputConfig()->getAllowedValues()) === 2 && in_array($_smarty_tpl->tpl_vars['value']->value,array(0,1),true)) {?>
                                        <?php if ($_smarty_tpl->tpl_vars['value']->value === 0) {?>
                                            <i class="far fa-times"></i>
                                        <?php } else { ?>
                                            <i class="far fa-check"></i>
                                        <?php }?>
                                    <?php } else { ?>
                                        <?php echo $_smarty_tpl->tpl_vars['value']->value;?>

                                    <?php }?>
                                </td>
                            <?php }?>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php if ($_smarty_tpl->tpl_vars['edit']->value === true) {?>
                            <td class="text-center">
                                <div class="btn-group">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
?action=detail&id=<?php echo $_smarty_tpl->tpl_vars['item']->value->getId();?>
"
                                       class="btn-prg btn btn-link px-2"
                                       title="<?php echo __('modify');?>
"
                                       data-toggle="tooltip">
                                        <span class="icon-hover">
                                            <span class="fal fa-edit"></span>
                                            <span class="fas fa-edit"></span>
                                        </span>
                                    </a>
                                </div>
                            </td>
                        <?php }?>
                    </tr>
                <?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_1_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>
        </div>
        <div class="save-wrapper">
            <div class="row <?php if ($_smarty_tpl->tpl_vars['select']->value === true) {?>second-ml-auto<?php } else { ?>first-ml-auto<?php }?>">
                <?php if ($_smarty_tpl->tpl_vars['select']->value === true) {?>
                    <div class="col-sm-6 col-xl-auto text-left">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" name="ALLMSGS" id="ALLMSGS" type="checkbox" onclick="AllMessages(this.form);" />
                            <label class="custom-control-label" for="ALLMSGS"><?php echo __('globalSelectAll');?>
</label>
                        </div>
                    </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['delete']->value === true) {?>
                    <div class="col-sm-6 col-xl-auto">
                        <button name="model-delete" type="submit" value="1" class="btn btn-danger btn-block">
                            <i class="fas fa-trash-alt"></i> <?php echo __('delete');?>

                        </button>
                    </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['create']->value === true) {?>
                    <div class="col-sm-6 col-xl-auto">
                        <button name="model-create" type="submit" value="1" class="btn btn-default btn-block">
                            <i class="fas fa-share"></i> <?php echo __('create');?>

                        </button>
                    </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['save']->value === true) {?>
                    <div class="col-sm-6 col-xl-auto">
                        <button name="model-save" type="submit" value="1" class="btn btn-primary btn-block">
                            <i class="fal fa-save"></i> <?php echo __('save');?>

                        </button>
                    </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['disable']->value === true) {?>
                    <div class="col-sm-6 col-xl-auto">
                        <button name="model-disable" type="submit" value="1" class="btn btn-warning btn-block">
                            <i class="fa fa-close"></i> <?php echo __('disable');?>

                        </button>
                    </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['enable']->value === true) {?>
                    <div class="col-sm-6 col-xl-auto">
                        <button name="model-enable" type="submit" value="1" class="btn btn-primary btn-block">
                            <i class="fa fa-check"></i> <?php echo __('enable');?>

                        </button>
                    </div>
                <?php }?>
            </div>
        </div>
    </form>
    <?php if ($_smarty_tpl->tpl_vars['pagination']->value !== null) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pagination'=>$_smarty_tpl->tpl_vars['pagination']->value,'cParam_arr'=>$_smarty_tpl->tpl_vars['params']->value,'isBottom'=>true), 0, true);
?>
    <?php }
} else { ?>
    <div class="alert alert-info"><i class="fal fa-info-circle"></i> <?php echo __('noDataAvailable');?>
</div>
    <?php if ($_smarty_tpl->tpl_vars['create']->value === true) {?>
        <form name="modelform" id="modelform" method="<?php echo $_smarty_tpl->tpl_vars['method']->value;?>
" action="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
            <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

            <input type="hidden" name="id" id="modelid" />
            <div class="save-wrapper">
                <div class="row first-ml-auto">
                    <div class="col-sm-6 col-xl-auto">
                        <button name="model-create" type="submit" value="1" class="btn btn-default btn-block">
                            <i class="fas fa-share"></i> <?php echo __('create');?>

                        </button>
                    </div>
                </div>
            </div>
        </form>
    <?php }
}
}
}

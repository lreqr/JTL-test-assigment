<?php
/* Smarty version 4.3.1, created on 2025-01-22 14:56:48
  from 'C:\OSPanel\domains\JTL_shop\admin\templates\bootstrap\tpl_inc\wizard_question.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6790f9204fa247_40660646',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ac0061b70d953098a21cc2da2b1fe7386d4f4bd' => 
    array (
      0 => 'C:\\OSPanel\\domains\\JTL_shop\\admin\\templates\\bootstrap\\tpl_inc\\wizard_question.tpl',
      1 => 1694613029,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6790f9204fa247_40660646 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="<?php if ($_smarty_tpl->tpl_vars['question']->value->isFullWidth()) {?>col-12<?php } else { ?>col-xl-6<?php }?>">
    <?php if ($_smarty_tpl->tpl_vars['question']->value->getType() === JTL\Backend\Wizard\QuestionType::TEXT || $_smarty_tpl->tpl_vars['question']->value->getType() === JTL\Backend\Wizard\QuestionType::EMAIL) {?>
        <div class="form-group-lg mb-4">
            <span class="form-title">
                <?php echo $_smarty_tpl->tpl_vars['question']->value->getText();?>
:
                <?php if ($_smarty_tpl->tpl_vars['question']->value->getDescription() !== null) {?>
                    <span class="fal fa-info-circle text-muted ml-3" data-toggle="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['question']->value->getDescription();?>
"></span>
                <?php }?>
            </span>
            <div>
                <input type="<?php if ($_smarty_tpl->tpl_vars['question']->value->getType() === JTL\Backend\Wizard\QuestionType::EMAIL) {?>email<?php } else { ?>text<?php }?>"
                       class="form-control rounded-pill"
                       id="question-<?php echo $_smarty_tpl->tpl_vars['question']->value->getID();?>
"
                       placeholder=""
                       data-setup-summary-id="question-<?php echo $_smarty_tpl->tpl_vars['question']->value->getID();?>
"
                       name="question-<?php echo $_smarty_tpl->tpl_vars['question']->value->getID();?>
"
                       value="<?php if ($_smarty_tpl->tpl_vars['question']->value->getValue() !== null) {
echo $_smarty_tpl->tpl_vars['question']->value->getValue();
}?>"
                       <?php if ($_smarty_tpl->tpl_vars['question']->value->isRequired()) {?>required<?php }?>
                >
            </div>
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['question']->value->getType() === JTL\Backend\Wizard\QuestionType::NUMBER) {?>
        <div class="form-group-lg mb-4">
            <span class="form-title">
                <?php echo $_smarty_tpl->tpl_vars['question']->value->getText();?>
:
                <?php if ($_smarty_tpl->tpl_vars['question']->value->getDescription() !== null) {?>
                    <span class="fal fa-info-circle text-muted ml-3" data-toggle="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['question']->value->getDescription();?>
"></span>
                <?php }?>
            </span>
            <div class="input-group form-counter min-w-sm">
                <div class="input-group-prepend">
                    <button type="button" class="btn btn-outline-secondary border-0" data-count-down>
                        <span class="fas fa-minus"></span>
                    </button>
                </div>
                <input type="number"
                       class="form-control rounded-pill"
                       id="question-<?php echo $_smarty_tpl->tpl_vars['question']->value->getID();?>
"
                       placeholder=""
                       data-setup-summary-id="question-<?php echo $_smarty_tpl->tpl_vars['question']->value->getID();?>
"
                       name="question-<?php echo $_smarty_tpl->tpl_vars['question']->value->getID();?>
"
                       value="<?php if ($_smarty_tpl->tpl_vars['question']->value->getValue() !== null) {
echo $_smarty_tpl->tpl_vars['question']->value->getValue();
}?>"
                       <?php if ($_smarty_tpl->tpl_vars['question']->value->isRequired()) {?>required<?php }?>
                >
                <div class="input-group-append">
                    <button type="button" class="btn btn-outline-secondary border-0" data-count-up>
                        <span class="fas fa-plus"></span>
                    </button>
                </div>
            </div>
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['question']->value->getType() === JTL\Backend\Wizard\QuestionType::BOOL) {?>
        <?php if ($_smarty_tpl->tpl_vars['question']->value->getText() !== null) {?>
            <span class="form-title">
                <?php echo $_smarty_tpl->tpl_vars['question']->value->getText();?>
:
                <?php if ($_smarty_tpl->tpl_vars['question']->value->getDescription() !== null) {?>
                    <span class="fal fa-info-circle text-muted ml-3" data-toggle="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['question']->value->getDescription();?>
"></span>
                <?php }?>
            </span>
        <?php }?>
        <div class="custom-control custom-checkbox">
            <input type="checkbox"
                   class="custom-control-input"
                   id="question-<?php echo $_smarty_tpl->tpl_vars['question']->value->getID();?>
"
                   name="question-<?php echo $_smarty_tpl->tpl_vars['question']->value->getID();?>
"
                   data-setup-summary-id="question-<?php echo $_smarty_tpl->tpl_vars['question']->value->getID();?>
"
                   data-setup-summary-text="<?php if ($_smarty_tpl->tpl_vars['question']->value->getText() !== null) {
echo $_smarty_tpl->tpl_vars['question']->value->getText();
} else {
echo $_smarty_tpl->tpl_vars['question']->value->getSummaryText();
}?>"
                    <?php if (!empty($_smarty_tpl->tpl_vars['question']->value->getValue())) {?> checked<?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['question']->value->isRequired()) {?>required<?php }?>
            >
            <label class="custom-control-label" for="question-<?php echo $_smarty_tpl->tpl_vars['question']->value->getID();?>
">
                <?php echo $_smarty_tpl->tpl_vars['question']->value->getLabel();?>

                <?php if ($_smarty_tpl->tpl_vars['question']->value->getText() === null && $_smarty_tpl->tpl_vars['question']->value->getDescription() !== null) {?>
                    <span class="fal fa-info-circle text-muted ml-3" data-toggle="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['question']->value->getDescription();?>
"></span>
                <?php }?>
            </label>
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['question']->value->getType() === JTL\Backend\Wizard\QuestionType::MULTI_BOOL) {?>
        <div>
            <div id="question-<?php echo $_smarty_tpl->tpl_vars['question']->value->getID();?>
"></div>
        </div>
        <div class="form-group-lg mb-4">
            <span class="form-title">
                <?php echo $_smarty_tpl->tpl_vars['question']->value->getText();?>
:
                <?php if ($_smarty_tpl->tpl_vars['question']->value->getDescription() !== null) {?>
                    <span class="fal fa-info-circle text-muted ml-3" data-toggle="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['question']->value->getDescription();?>
"></span>
                <?php }?>
            </span>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['question']->value->getOptions(), 'option');
$_smarty_tpl->tpl_vars['option']->index = -1;
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
$_smarty_tpl->tpl_vars['option']->index++;
$__foreach_option_15_saved = $_smarty_tpl->tpl_vars['option'];
?>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox"
                           class="custom-control-input"
                           id="question-<?php echo $_smarty_tpl->tpl_vars['question']->value->getID();?>
-<?php echo $_smarty_tpl->tpl_vars['option']->index;?>
"
                           name="question-<?php echo $_smarty_tpl->tpl_vars['question']->value->getID();?>
[]"
                           data-setup-summary-id="question-<?php echo $_smarty_tpl->tpl_vars['question']->value->getID();?>
"
                           data-setup-summary-text="<?php echo $_smarty_tpl->tpl_vars['option']->value->getName();?>
"
                           value="<?php echo $_smarty_tpl->tpl_vars['option']->value->getValue();?>
"
                            <?php if ($_smarty_tpl->tpl_vars['option']->value->isSelected($_smarty_tpl->tpl_vars['question']->value->getValue())) {?> checked<?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['question']->value->isRequired()) {?>required<?php }?>
                    >
                    <label class="custom-control-label" for="question-<?php echo $_smarty_tpl->tpl_vars['question']->value->getID();?>
-<?php echo $_smarty_tpl->tpl_vars['option']->index;?>
">
                        <?php echo $_smarty_tpl->tpl_vars['option']->value->getName();?>

                    </label>
                </div>
            <?php
$_smarty_tpl->tpl_vars['option'] = $__foreach_option_15_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['question']->value->getType() === JTL\Backend\Wizard\QuestionType::PLUGIN) {?>
        <div>
            <div id="question-<?php echo $_smarty_tpl->tpl_vars['question']->value->getID();?>
"></div>
        </div>
        <div class="form-group-list">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['question']->value->getOptions(), 'option');
$_smarty_tpl->tpl_vars['option']->index = -1;
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
$_smarty_tpl->tpl_vars['option']->index++;
$__foreach_option_16_saved = $_smarty_tpl->tpl_vars['option'];
?>
                <div class="form-group-list-item py-2">
                    <div class="form-row">
                        <div class="col-xl-3">
                            <div class="custom-control custom-checkbox custom-checkbox-centered">
                                <input type="checkbox"
                                       class="custom-control-input"
                                       id="question-<?php echo $_smarty_tpl->tpl_vars['question']->value->getID();?>
-<?php echo $_smarty_tpl->tpl_vars['option']->index;?>
"
                                       name="question-<?php echo $_smarty_tpl->tpl_vars['question']->value->getID();?>
[]"
                                       data-setup-summary-id="question-<?php echo $_smarty_tpl->tpl_vars['question']->value->getID();?>
"
                                       data-setup-summary-text="<?php echo $_smarty_tpl->tpl_vars['option']->value->getName();?>
"
                                       value="<?php echo $_smarty_tpl->tpl_vars['option']->value->getValue();?>
"
                                        <?php if ($_smarty_tpl->tpl_vars['option']->value->isSelected($_smarty_tpl->tpl_vars['question']->value->getValue())) {?> checked<?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['question']->value->isRequired()) {?>required<?php }?>
                                >
                                <label class="custom-control-label" for="question-<?php echo $_smarty_tpl->tpl_vars['question']->value->getID();?>
-<?php echo $_smarty_tpl->tpl_vars['option']->index;?>
">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['option']->value->getLogoPath();?>
" width="80" height="80" loading="lazy" alt="<?php echo $_smarty_tpl->tpl_vars['option']->value->getName();?>
">
                                </label>
                            </div>
                        </div>
                        <div class="col-xl">
                            <?php echo $_smarty_tpl->tpl_vars['option']->value->getDescription();?>

                            <a href="<?php echo $_smarty_tpl->tpl_vars['adminURL']->value;?>
/premiumplugin?scope=<?php echo $_smarty_tpl->tpl_vars['question']->value->getScope();?>
&id=<?php echo $_smarty_tpl->tpl_vars['option']->value->getValue();?>
&fromWizard=true" target="_blank">
                                <?php echo __('getToKnowMore');?>

                                <span class="fal fa-long-arrow-right ml-1"></span>
                            </a>
                        </div>
                    </div>
                </div>
            <?php
$_smarty_tpl->tpl_vars['option'] = $__foreach_option_16_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    <?php }?>
</div>
<?php }
}

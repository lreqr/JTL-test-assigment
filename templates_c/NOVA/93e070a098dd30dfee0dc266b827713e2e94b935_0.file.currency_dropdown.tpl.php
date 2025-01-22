<?php
/* Smarty version 4.3.1, created on 2025-01-22 14:57:57
  from 'C:\OSPanel\domains\JTL_shop\templates\NOVA\snippets\currency_dropdown.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6790f965262932_31574875',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '93e070a098dd30dfee0dc266b827713e2e94b935' => 
    array (
      0 => 'C:\\OSPanel\\domains\\JTL_shop\\templates\\NOVA\\snippets\\currency_dropdown.tpl',
      1 => 1694613031,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6790f965262932_31574875 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8104794746790f96525d1f4_22535099', 'snippets-currency-dropdown');
?>

<?php }
/* {block 'snippets-currency-dropdown'} */
class Block_8104794746790f96525d1f4_22535099 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'snippets-currency-dropdown' => 
  array (
    0 => 'Block_8104794746790f96525d1f4_22535099',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OSPanel\\domains\\JTL_shop\\includes\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>

    <?php $_smarty_tpl->_assignInScope('allCurrencies', JTL\Session\Frontend::getCurrencies());?>
    <?php $_smarty_tpl->_assignInScope('currentCurrency', JTL\Session\Frontend::getCurrency());?>
    <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['allCurrencies']->value) > 1) {?>
        <?php $_block_plugin27 = isset($_smarty_tpl->smarty->registered_plugins['block']['navitemdropdown'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['navitemdropdown'][0][0] : null;
if (!is_callable(array($_block_plugin27, 'render'))) {
throw new SmartyException('block tag \'navitemdropdown\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('navitemdropdown', array('class'=>"currency-dropdown",'right'=>true,'text'=>$_smarty_tpl->tpl_vars['currentCurrency']->value->getName()));
$_block_repeat=true;
echo $_block_plugin27->render(array('class'=>"currency-dropdown",'right'=>true,'text'=>$_smarty_tpl->tpl_vars['currentCurrency']->value->getName()), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allCurrencies']->value, 'currency');
$_smarty_tpl->tpl_vars['currency']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['currency']->value) {
$_smarty_tpl->tpl_vars['currency']->do_else = false;
?>
                <?php $_block_plugin28 = isset($_smarty_tpl->smarty->registered_plugins['block']['dropdownitem'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['dropdownitem'][0][0] : null;
if (!is_callable(array($_block_plugin28, 'render'))) {
throw new SmartyException('block tag \'dropdownitem\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('dropdownitem', array('href'=>$_smarty_tpl->tpl_vars['currency']->value->getURLFull(),'rel'=>"nofollow",'active'=>($_smarty_tpl->tpl_vars['currentCurrency']->value->getName() === $_smarty_tpl->tpl_vars['currency']->value->getName())));
$_block_repeat=true;
echo $_block_plugin28->render(array('href'=>$_smarty_tpl->tpl_vars['currency']->value->getURLFull(),'rel'=>"nofollow",'active'=>($_smarty_tpl->tpl_vars['currentCurrency']->value->getName() === $_smarty_tpl->tpl_vars['currency']->value->getName())), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php echo $_smarty_tpl->tpl_vars['currency']->value->getName();?>

                <?php $_block_repeat=false;
echo $_block_plugin28->render(array('href'=>$_smarty_tpl->tpl_vars['currency']->value->getURLFull(),'rel'=>"nofollow",'active'=>($_smarty_tpl->tpl_vars['currentCurrency']->value->getName() === $_smarty_tpl->tpl_vars['currency']->value->getName())), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php $_block_repeat=false;
echo $_block_plugin27->render(array('class'=>"currency-dropdown",'right'=>true,'text'=>$_smarty_tpl->tpl_vars['currentCurrency']->value->getName()), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php }
}
}
/* {/block 'snippets-currency-dropdown'} */
}

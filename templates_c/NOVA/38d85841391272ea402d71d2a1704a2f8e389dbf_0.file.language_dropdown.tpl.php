<?php
/* Smarty version 4.3.1, created on 2025-01-22 14:57:58
  from 'C:\OSPanel\domains\JTL_shop\templates\NOVA\snippets\language_dropdown.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6790f966333383_34727213',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '38d85841391272ea402d71d2a1704a2f8e389dbf' => 
    array (
      0 => 'C:\\OSPanel\\domains\\JTL_shop\\templates\\NOVA\\snippets\\language_dropdown.tpl',
      1 => 1694613031,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6790f966333383_34727213 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2873194676790f966324e66_30412624', 'snippets-language-dropdown');
?>

<?php }
/* {block 'snippets-language-dropdown-text'} */
class Block_14131790136790f96632a304_65463263 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php echo mb_strtoupper((string) $_smarty_tpl->tpl_vars['language']->value->getIso639() ?? '', 'utf-8');?>

                    <?php
}
}
/* {/block 'snippets-language-dropdown-text'} */
/* {block 'snippets-language-dropdown-item'} */
class Block_19552050676790f96632ff19_25186036 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_block_plugin30 = isset($_smarty_tpl->smarty->registered_plugins['block']['dropdownitem'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['dropdownitem'][0][0] : null;
if (!is_callable(array($_block_plugin30, 'render'))) {
throw new SmartyException('block tag \'dropdownitem\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('dropdownitem', array('href'=>((string)$_smarty_tpl->tpl_vars['language']->value->getUrl()),'class'=>"link-lang",'data'=>array("iso"=>$_smarty_tpl->tpl_vars['language']->value->getIso()),'rel'=>"nofollow",'active'=>($_smarty_tpl->tpl_vars['language']->value->getId() === JTL\Shop::getLanguageID())));
$_block_repeat=true;
echo $_block_plugin30->render(array('href'=>((string)$_smarty_tpl->tpl_vars['language']->value->getUrl()),'class'=>"link-lang",'data'=>array("iso"=>$_smarty_tpl->tpl_vars['language']->value->getIso()),'rel'=>"nofollow",'active'=>($_smarty_tpl->tpl_vars['language']->value->getId() === JTL\Shop::getLanguageID())), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php echo mb_strtoupper((string) $_smarty_tpl->tpl_vars['language']->value->getIso639() ?? '', 'utf-8');?>

                    <?php $_block_repeat=false;
echo $_block_plugin30->render(array('href'=>((string)$_smarty_tpl->tpl_vars['language']->value->getUrl()),'class'=>"link-lang",'data'=>array("iso"=>$_smarty_tpl->tpl_vars['language']->value->getIso()),'rel'=>"nofollow",'active'=>($_smarty_tpl->tpl_vars['language']->value->getId() === JTL\Shop::getLanguageID())), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php
}
}
/* {/block 'snippets-language-dropdown-item'} */
/* {block 'snippets-language-dropdown'} */
class Block_2873194676790f966324e66_30412624 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'snippets-language-dropdown' => 
  array (
    0 => 'Block_2873194676790f966324e66_30412624',
  ),
  'snippets-language-dropdown-text' => 
  array (
    0 => 'Block_14131790136790f96632a304_65463263',
  ),
  'snippets-language-dropdown-item' => 
  array (
    0 => 'Block_19552050676790f96632ff19_25186036',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OSPanel\\domains\\JTL_shop\\includes\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>

    <?php $_smarty_tpl->_assignInScope('languages', JTL\Session\Frontend::getLanguages());?>
    <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'langSelectorText', null, null);?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
                <?php if ($_smarty_tpl->tpl_vars['language']->value->getId() === JTL\Shop::getLanguageID()) {?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14131790136790f96632a304_65463263', 'snippets-language-dropdown-text', $this->tplIndex);
?>

                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <?php ob_start();
echo (($tmp = $_smarty_tpl->tpl_vars['dropdownClass']->value ?? null)===null||$tmp==='' ? '' : $tmp);
$_prefixVariable15=ob_get_clean();
$_block_plugin29 = isset($_smarty_tpl->smarty->registered_plugins['block']['navitemdropdown'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['navitemdropdown'][0][0] : null;
if (!is_callable(array($_block_plugin29, 'render'))) {
throw new SmartyException('block tag \'navitemdropdown\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('navitemdropdown', array('class'=>"language-dropdown ".$_prefixVariable15,'right'=>true,'text'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'langSelectorText')));
$_block_repeat=true;
echo $_block_plugin29->render(array('class'=>"language-dropdown ".$_prefixVariable15,'right'=>true,'text'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'langSelectorText')), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19552050676790f96632ff19_25186036', 'snippets-language-dropdown-item', $this->tplIndex);
?>

            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php $_block_repeat=false;
echo $_block_plugin29->render(array('class'=>"language-dropdown ".$_prefixVariable15,'right'=>true,'text'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'langSelectorText')), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php }
}
}
/* {/block 'snippets-language-dropdown'} */
}

<?php
/* Smarty version 4.3.1, created on 2025-01-22 14:58:05
  from 'C:\OSPanel\domains\JTL_shop\templates\NOVA\basket\cart_dropdown_label.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6790f96d2635a0_64751613',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '13f0f5bd75b0fef122ae6f0e5828eadcf70f9c9a' => 
    array (
      0 => 'C:\\OSPanel\\domains\\JTL_shop\\templates\\NOVA\\basket\\cart_dropdown_label.tpl',
      1 => 1694613031,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:basket/cart_dropdown.tpl' => 1,
  ),
),false)) {
function content_6790f96d2635a0_64751613 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11456521746790f96d25e8b5_40562177', 'basket-cart-dropdown-label');
?>

<?php }
/* {block 'basket-cart-dropdown-label-count'} */
class Block_12857788126790f96d2609a2_08530409 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <i class='fas fa-shopping-cart cart-icon-dropdown-icon'>
                        <?php if ($_smarty_tpl->tpl_vars['WarenkorbArtikelPositionenanzahl']->value >= 1) {?>
                        <span class="fa-sup" title="<?php echo $_smarty_tpl->tpl_vars['WarenkorbArtikelPositionenanzahl']->value;?>
">
                            <?php echo $_smarty_tpl->tpl_vars['WarenkorbArtikelPositionenanzahl']->value;?>

                        </span>
                        <?php }?>
                    </i>
                <?php
}
}
/* {/block 'basket-cart-dropdown-label-count'} */
/* {block 'basket-cart-dropdown-labelprice'} */
class Block_4035574596790f96d261a77_85870614 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <span class="cart-icon-dropdown-price"><?php echo $_smarty_tpl->tpl_vars['WarensummeLocalized']->value[0];?>
</span>
                <?php
}
}
/* {/block 'basket-cart-dropdown-labelprice'} */
/* {block 'basket-cart-dropdown-label-link'} */
class Block_2302398396790f96d25f630_17444495 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'basket'),$_smarty_tpl ) );
$_prefixVariable42 = ob_get_clean();
$_block_plugin64 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin64, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('class'=>'nav-link','aria'=>array('expanded'=>'false','label'=>$_prefixVariable42),'data'=>array('toggle'=>'dropdown')));
$_block_repeat=true;
echo $_block_plugin64->render(array('class'=>'nav-link','aria'=>array('expanded'=>'false','label'=>$_prefixVariable42),'data'=>array('toggle'=>'dropdown')), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12857788126790f96d2609a2_08530409', 'basket-cart-dropdown-label-count', $this->tplIndex);
?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4035574596790f96d261a77_85870614', 'basket-cart-dropdown-labelprice', $this->tplIndex);
?>

            <?php $_block_repeat=false;
echo $_block_plugin64->render(array('class'=>'nav-link','aria'=>array('expanded'=>'false','label'=>$_prefixVariable42),'data'=>array('toggle'=>'dropdown')), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php
}
}
/* {/block 'basket-cart-dropdown-label-link'} */
/* {block 'basket-cart-dropdown-label-include-cart-dropdown'} */
class Block_17868613506790f96d2629f4_70910244 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:basket/cart_dropdown.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php
}
}
/* {/block 'basket-cart-dropdown-label-include-cart-dropdown'} */
/* {block 'basket-cart-dropdown-label'} */
class Block_11456521746790f96d25e8b5_40562177 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'basket-cart-dropdown-label' => 
  array (
    0 => 'Block_11456521746790f96d25e8b5_40562177',
  ),
  'basket-cart-dropdown-label-link' => 
  array (
    0 => 'Block_2302398396790f96d25f630_17444495',
  ),
  'basket-cart-dropdown-label-count' => 
  array (
    0 => 'Block_12857788126790f96d2609a2_08530409',
  ),
  'basket-cart-dropdown-labelprice' => 
  array (
    0 => 'Block_4035574596790f96d261a77_85870614',
  ),
  'basket-cart-dropdown-label-include-cart-dropdown' => 
  array (
    0 => 'Block_17868613506790f96d2629f4_70910244',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <li class="cart-icon-dropdown nav-item dropdown <?php if ($_smarty_tpl->tpl_vars['WarenkorbArtikelPositionenanzahl']->value != 0) {?>not-empty<?php }?>">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2302398396790f96d25f630_17444495', 'basket-cart-dropdown-label-link', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17868613506790f96d2629f4_70910244', 'basket-cart-dropdown-label-include-cart-dropdown', $this->tplIndex);
?>

    </li>
<?php
}
}
/* {/block 'basket-cart-dropdown-label'} */
}

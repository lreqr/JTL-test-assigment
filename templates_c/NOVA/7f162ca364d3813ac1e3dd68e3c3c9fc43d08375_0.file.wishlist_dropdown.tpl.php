<?php
/* Smarty version 4.3.1, created on 2025-01-22 14:58:04
  from 'C:\OSPanel\domains\JTL_shop\templates\NOVA\snippets\wishlist_dropdown.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6790f96cc07cf7_55513267',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f162ca364d3813ac1e3dd68e3c3c9fc43d08375' => 
    array (
      0 => 'C:\\OSPanel\\domains\\JTL_shop\\templates\\NOVA\\snippets\\wishlist_dropdown.tpl',
      1 => 1694613031,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6790f96cc07cf7_55513267 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16292413756790f96cbfe5a2_05852980', 'snippets-wishlist-dropdown');
?>

<?php }
/* {block 'snippets-wishlist-dropdown-link'} */
class Block_12770001196790f96cc00db5_44351290 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                        <?php echo $_smarty_tpl->tpl_vars['wishlist']->value->getName();?>
<br />
                                    <?php
}
}
/* {/block 'snippets-wishlist-dropdown-link'} */
/* {block 'snippets-wishlist-dropdown-punlic'} */
class Block_2773083236790f96cc01a50_59649130 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                        <span data-switch-label-state="public-<?php echo $_smarty_tpl->tpl_vars['wishlist']->value->getID();?>
" class="small <?php if ($_smarty_tpl->tpl_vars['wishlist']->value->isPublic() !== true) {?>d-none<?php }?>">
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'public'),$_smarty_tpl ) );?>

                                        </span>
                                    <?php
}
}
/* {/block 'snippets-wishlist-dropdown-punlic'} */
/* {block 'snippets-wishlist-dropdown-private'} */
class Block_8770509776790f96cc033d1_15752866 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                        <span data-switch-label-state="private-<?php echo $_smarty_tpl->tpl_vars['wishlist']->value->getID();?>
" class="small <?php if ($_smarty_tpl->tpl_vars['wishlist']->value->isPublic()) {?>d-none<?php }?>">
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'private'),$_smarty_tpl ) );?>

                                        </span>
                                    <?php
}
}
/* {/block 'snippets-wishlist-dropdown-private'} */
/* {block 'snippets-wishlist-dropdown-count'} */
class Block_10096323306790f96cc048d5_04825137 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <td class="text-right-util text-nowrap-util">
                                        <?php echo $_smarty_tpl->tpl_vars['wishlist']->value->getProductCount();?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'products'),$_smarty_tpl ) );?>

                                    </td>
                                <?php
}
}
/* {/block 'snippets-wishlist-dropdown-count'} */
/* {block 'snippets-wishlist-dropdown-wishlists'} */
class Block_11718927816790f96cbff784_75680284 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div class="wishlist-dropdown-items table-responsive max-h-sm lg-max-h">
                <table class="table table-vertical-middle">
                    <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['wishlists']->value, 'wishlist');
$_smarty_tpl->tpl_vars['wishlist']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['wishlist']->value) {
$_smarty_tpl->tpl_vars['wishlist']->do_else = false;
?>
                            <tr class="clickable-row cursor-pointer" data-href="<?php echo $_smarty_tpl->tpl_vars['wlslug']->value;?>
?wl=<?php echo $_smarty_tpl->tpl_vars['wishlist']->value->getID();?>
">
                                <td>
                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12770001196790f96cc00db5_44351290', 'snippets-wishlist-dropdown-link', $this->tplIndex);
?>

                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2773083236790f96cc01a50_59649130', 'snippets-wishlist-dropdown-punlic', $this->tplIndex);
?>

                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8770509776790f96cc033d1_15752866', 'snippets-wishlist-dropdown-private', $this->tplIndex);
?>

                                </td>
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10096323306790f96cc048d5_04825137', 'snippets-wishlist-dropdown-count', $this->tplIndex);
?>

                            </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </tbody>
                </table>
            </div>
        <?php
}
}
/* {/block 'snippets-wishlist-dropdown-wishlists'} */
/* {block 'snippets-wishlist-dropdown-new-wl-link'} */
class Block_10433050786790f96cc05fa2_16254912 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_block_plugin63 = isset($_smarty_tpl->smarty->registered_plugins['block']['button'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['button'][0][0] : null;
if (!is_callable(array($_block_plugin63, 'render'))) {
throw new SmartyException('block tag \'button\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('button', array('variant'=>"primary",'type'=>"link",'block'=>true,'size'=>"sm",'href'=>((string)$_smarty_tpl->tpl_vars['wlslug']->value)."?newWL=1"));
$_block_repeat=true;
echo $_block_plugin63->render(array('variant'=>"primary",'type'=>"link",'block'=>true,'size'=>"sm",'href'=>((string)$_smarty_tpl->tpl_vars['wlslug']->value)."?newWL=1"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'addNew','section'=>'wishlist'),$_smarty_tpl ) );?>

                <?php $_block_repeat=false;
echo $_block_plugin63->render(array('variant'=>"primary",'type'=>"link",'block'=>true,'size'=>"sm",'href'=>((string)$_smarty_tpl->tpl_vars['wlslug']->value)."?newWL=1"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php
}
}
/* {/block 'snippets-wishlist-dropdown-new-wl-link'} */
/* {block 'snippets-wishlist-dropdown-new-wl'} */
class Block_9720149506790f96cc05c66_79041798 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="wishlist-dropdown-footer dropdown-body">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10433050786790f96cc05fa2_16254912', 'snippets-wishlist-dropdown-new-wl-link', $this->tplIndex);
?>

        </div>
    <?php
}
}
/* {/block 'snippets-wishlist-dropdown-new-wl'} */
/* {block 'snippets-wishlist-dropdown'} */
class Block_16292413756790f96cbfe5a2_05852980 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'snippets-wishlist-dropdown' => 
  array (
    0 => 'Block_16292413756790f96cbfe5a2_05852980',
  ),
  'snippets-wishlist-dropdown-wishlists' => 
  array (
    0 => 'Block_11718927816790f96cbff784_75680284',
  ),
  'snippets-wishlist-dropdown-link' => 
  array (
    0 => 'Block_12770001196790f96cc00db5_44351290',
  ),
  'snippets-wishlist-dropdown-punlic' => 
  array (
    0 => 'Block_2773083236790f96cc01a50_59649130',
  ),
  'snippets-wishlist-dropdown-private' => 
  array (
    0 => 'Block_8770509776790f96cc033d1_15752866',
  ),
  'snippets-wishlist-dropdown-count' => 
  array (
    0 => 'Block_10096323306790f96cc048d5_04825137',
  ),
  'snippets-wishlist-dropdown-new-wl' => 
  array (
    0 => 'Block_9720149506790f96cc05c66_79041798',
  ),
  'snippets-wishlist-dropdown-new-wl-link' => 
  array (
    0 => 'Block_10433050786790f96cc05fa2_16254912',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_static_route'][0], array( array('id'=>'wunschliste.php','assign'=>'wlslug'),$_smarty_tpl ) );?>

    <?php if ($_smarty_tpl->tpl_vars['wishlists']->value->isNotEmpty()) {?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11718927816790f96cbff784_75680284', 'snippets-wishlist-dropdown-wishlists', $this->tplIndex);
?>

    <?php }?>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9720149506790f96cc05c66_79041798', 'snippets-wishlist-dropdown-new-wl', $this->tplIndex);
?>

<?php
}
}
/* {/block 'snippets-wishlist-dropdown'} */
}

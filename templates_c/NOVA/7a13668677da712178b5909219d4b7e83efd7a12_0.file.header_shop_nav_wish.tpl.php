<?php
/* Smarty version 4.3.1, created on 2025-01-22 14:58:04
  from 'C:\OSPanel\domains\JTL_shop\templates\NOVA\layout\header_shop_nav_wish.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6790f96c8a33c0_47162349',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a13668677da712178b5909219d4b7e83efd7a12' => 
    array (
      0 => 'C:\\OSPanel\\domains\\JTL_shop\\templates\\NOVA\\layout\\header_shop_nav_wish.tpl',
      1 => 1694613031,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:snippets/wishlist_dropdown.tpl' => 1,
  ),
),false)) {
function content_6790f96c8a33c0_47162349 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6379980026790f96c89b776_61229296', 'layout-header-shop-nav-wish');
?>

<?php }
/* {block 'layout-header-shop-nav-wish-link'} */
class Block_19817940636790f96c8a00e9_45201329 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'wishlist'),$_smarty_tpl ) );
$_prefixVariable41 = ob_get_clean();
$_block_plugin62 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin62, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('class'=>'nav-link','aria'=>array('expanded'=>'false','label'=>$_prefixVariable41),'data'=>array('toggle'=>'dropdown')));
$_block_repeat=true;
echo $_block_plugin62->render(array('class'=>'nav-link','aria'=>array('expanded'=>'false','label'=>$_prefixVariable41),'data'=>array('toggle'=>'dropdown')), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <i class="fas fa-heart">
                        <span id="badge-wl-count" class="fa-sup <?php if ($_smarty_tpl->tpl_vars['wlCount']->value === 0) {?> d-none<?php }?>" title="<?php echo $_smarty_tpl->tpl_vars['wlCount']->value;?>
">
                            <?php echo $_smarty_tpl->tpl_vars['wlCount']->value;?>

                        </span>
                    </i>
                <?php $_block_repeat=false;
echo $_block_plugin62->render(array('class'=>'nav-link','aria'=>array('expanded'=>'false','label'=>$_prefixVariable41),'data'=>array('toggle'=>'dropdown')), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php
}
}
/* {/block 'layout-header-shop-nav-wish-link'} */
/* {block 'layout-header-shop-nav-wish-include-wishlist-dropdown'} */
class Block_3788973026790f96c8a24a9_96655790 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php $_smarty_tpl->_subTemplateRender('file:snippets/wishlist_dropdown.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                        <?php
}
}
/* {/block 'layout-header-shop-nav-wish-include-wishlist-dropdown'} */
/* {block 'layout-header-shop-nav-wish-dropdown'} */
class Block_20713641036790f96c8a2174_09597958 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <div id="nav-wishlist-collapse" class="dropdown-menu dropdown-menu-right lg-min-w-lg">
                    <div id="wishlist-dropdown-container">
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3788973026790f96c8a24a9_96655790', 'layout-header-shop-nav-wish-include-wishlist-dropdown', $this->tplIndex);
?>

                    </div>
                </div>
            <?php
}
}
/* {/block 'layout-header-shop-nav-wish-dropdown'} */
/* {block 'layout-header-shop-nav-wish'} */
class Block_6379980026790f96c89b776_61229296 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'layout-header-shop-nav-wish' => 
  array (
    0 => 'Block_6379980026790f96c89b776_61229296',
  ),
  'layout-header-shop-nav-wish-link' => 
  array (
    0 => 'Block_19817940636790f96c8a00e9_45201329',
  ),
  'layout-header-shop-nav-wish-dropdown' => 
  array (
    0 => 'Block_20713641036790f96c8a2174_09597958',
  ),
  'layout-header-shop-nav-wish-include-wishlist-dropdown' => 
  array (
    0 => 'Block_3788973026790f96c8a24a9_96655790',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OSPanel\\domains\\JTL_shop\\includes\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>

    <?php if (!empty($_smarty_tpl->tpl_vars['wishlists']->value) && $_smarty_tpl->tpl_vars['Einstellungen']->value['global']['global_wunschliste_anzeigen'] === 'Y') {?>
        <?php $_smarty_tpl->_assignInScope('wlCount', 0);?>
        <?php if (\JTL\Session\Frontend::getWishlist()->getID() > 0) {?>
            <?php $_smarty_tpl->_assignInScope('wlCount', smarty_modifier_count(\JTL\Session\Frontend::getWishlist()->getItems()));?>
        <?php }?>
        <li id='shop-nav-wish'
            class="nav-item dropdown <?php if ($_smarty_tpl->tpl_vars['nSeitenTyp']->value === (defined('PAGE_WUNSCHLISTE') ? constant('PAGE_WUNSCHLISTE') : null)) {?> active<?php }?>">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19817940636790f96c8a00e9_45201329', 'layout-header-shop-nav-wish-link', $this->tplIndex);
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20713641036790f96c8a2174_09597958', 'layout-header-shop-nav-wish-dropdown', $this->tplIndex);
?>

        </li>
    <?php }
}
}
/* {/block 'layout-header-shop-nav-wish'} */
}

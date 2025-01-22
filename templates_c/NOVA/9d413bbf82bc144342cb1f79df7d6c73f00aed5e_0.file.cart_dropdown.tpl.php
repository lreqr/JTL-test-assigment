<?php
/* Smarty version 4.3.1, created on 2025-01-22 14:58:05
  from 'C:\OSPanel\domains\JTL_shop\templates\NOVA\basket\cart_dropdown.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6790f96d5d22c1_69813656',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d413bbf82bc144342cb1f79df7d6c73f00aed5e' => 
    array (
      0 => 'C:\\OSPanel\\domains\\JTL_shop\\templates\\NOVA\\basket\\cart_dropdown.tpl',
      1 => 1694613031,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:snippets/image.tpl' => 1,
  ),
),false)) {
function content_6790f96d5d22c1_69813656 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7295892126790f96d5a6a84_52926873', 'basket-cart-dropdown');
?>

<?php }
/* {block 'basket-cart-dropdown-max-cart-positions'} */
class Block_15012634626790f96d5a7fb6_74893262 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_assignInScope('maxCartPositions', 15);?>
        <?php
}
}
/* {/block 'basket-cart-dropdown-max-cart-positions'} */
/* {block 'basket-cart-dropdown-cart-item-item-image'} */
class Block_17630430896790f96d5b0518_21846508 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                            <?php $_block_plugin66 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin66, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('class'=>"col-auto"));
$_block_repeat=true;
echo $_block_plugin66->render(array('class'=>"col-auto"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                                <?php $_block_plugin67 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin67, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_smarty_tpl->tpl_vars['oPosition']->value->Artikel->cURLFull,'title'=>htmlspecialchars((string)call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'trans' ][ 0 ], array( $_smarty_tpl->tpl_vars['oPosition']->value->cName )), ENT_QUOTES, 'utf-8', true)));
$_block_repeat=true;
echo $_block_plugin67->render(array('href'=>$_smarty_tpl->tpl_vars['oPosition']->value->Artikel->cURLFull,'title'=>htmlspecialchars((string)call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'trans' ][ 0 ], array( $_smarty_tpl->tpl_vars['oPosition']->value->cName )), ENT_QUOTES, 'utf-8', true)), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                                    <?php $_smarty_tpl->_subTemplateRender('file:snippets/image.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('fluid'=>false,'item'=>$_smarty_tpl->tpl_vars['oPosition']->value->Artikel,'square'=>false,'srcSize'=>'xs','sizes'=>'50px','class'=>'img-sm'), 0, true);
?>
                                                                <?php $_block_repeat=false;
echo $_block_plugin67->render(array('href'=>$_smarty_tpl->tpl_vars['oPosition']->value->Artikel->cURLFull,'title'=>htmlspecialchars((string)call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'trans' ][ 0 ], array( $_smarty_tpl->tpl_vars['oPosition']->value->cName )), ENT_QUOTES, 'utf-8', true)), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                            <?php $_block_repeat=false;
echo $_block_plugin66->render(array('class'=>"col-auto"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                        <?php
}
}
/* {/block 'basket-cart-dropdown-cart-item-item-image'} */
/* {block 'basket-cart-dropdown-cart-item-item-link'} */
class Block_9586196576790f96d5b3468_38713763 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                            <?php $_block_plugin68 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin68, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('class'=>"col-auto"));
$_block_repeat=true;
echo $_block_plugin68->render(array('class'=>"col-auto"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                                <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'replace_delim' ][ 0 ], array( $_smarty_tpl->tpl_vars['oPosition']->value->nAnzahl ));?>
x
                                                            <?php $_block_repeat=false;
echo $_block_plugin68->render(array('class'=>"col-auto"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                            <?php $_block_plugin69 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin69, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array());
$_block_repeat=true;
echo $_block_plugin69->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                                <?php $_block_plugin70 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin70, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_smarty_tpl->tpl_vars['oPosition']->value->Artikel->cURLFull,'title'=>htmlspecialchars((string)call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'trans' ][ 0 ], array( $_smarty_tpl->tpl_vars['oPosition']->value->cName )), ENT_QUOTES, 'utf-8', true)));
$_block_repeat=true;
echo $_block_plugin70->render(array('href'=>$_smarty_tpl->tpl_vars['oPosition']->value->Artikel->cURLFull,'title'=>htmlspecialchars((string)call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'trans' ][ 0 ], array( $_smarty_tpl->tpl_vars['oPosition']->value->cName )), ENT_QUOTES, 'utf-8', true)), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                                    <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'trans' ][ 0 ], array( $_smarty_tpl->tpl_vars['oPosition']->value->cName ));?>

                                                                <?php $_block_repeat=false;
echo $_block_plugin70->render(array('href'=>$_smarty_tpl->tpl_vars['oPosition']->value->Artikel->cURLFull,'title'=>htmlspecialchars((string)call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'trans' ][ 0 ], array( $_smarty_tpl->tpl_vars['oPosition']->value->cName )), ENT_QUOTES, 'utf-8', true)), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                            <?php $_block_repeat=false;
echo $_block_plugin69->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                        <?php
}
}
/* {/block 'basket-cart-dropdown-cart-item-item-link'} */
/* {block 'basket-cart-dropdown-cart-item-item-price'} */
class Block_3293260366790f96d5b63d1_95069264 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                    <td class="text-right-util text-nowrap-util">
                                                        <?php if ($_smarty_tpl->tpl_vars['oPosition']->value->istKonfigVater()) {?>
                                                            <?php echo $_smarty_tpl->tpl_vars['oPosition']->value->cKonfigpreisLocalized[$_smarty_tpl->tpl_vars['NettoPreise']->value][$_SESSION['cWaehrungName']];?>

                                                        <?php } else { ?>
                                                            <?php echo $_smarty_tpl->tpl_vars['oPosition']->value->cEinzelpreisLocalized[$_smarty_tpl->tpl_vars['NettoPreise']->value][$_SESSION['cWaehrungName']];?>

                                                        <?php }?>
                                                    </td>
                                                <?php
}
}
/* {/block 'basket-cart-dropdown-cart-item-item-price'} */
/* {block 'basket-cart-dropdown-cart-item-no-item-count'} */
class Block_11217849316790f96d5b8a17_02102628 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                    <td>
                                                        <?php $_block_plugin71 = isset($_smarty_tpl->smarty->registered_plugins['block']['formrow'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['formrow'][0][0] : null;
if (!is_callable(array($_block_plugin71, 'render'))) {
throw new SmartyException('block tag \'formrow\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('formrow', array());
$_block_repeat=true;
echo $_block_plugin71->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                            <?php $_block_plugin72 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin72, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('class'=>"col-auto"));
$_block_repeat=true;
echo $_block_plugin72->render(array('class'=>"col-auto"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo $_block_plugin72->render(array('class'=>"col-auto"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                            <?php $_block_plugin73 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin73, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('class'=>"col-auto"));
$_block_repeat=true;
echo $_block_plugin73->render(array('class'=>"col-auto"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                                <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'replace_delim' ][ 0 ], array( $_smarty_tpl->tpl_vars['oPosition']->value->nAnzahl ));?>
x
                                                            <?php $_block_repeat=false;
echo $_block_plugin73->render(array('class'=>"col-auto"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                            <?php $_block_plugin74 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin74, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array());
$_block_repeat=true;
echo $_block_plugin74->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                                <?php echo htmlentities(mb_convert_encoding((string)call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'trans' ][ 0 ], array( $_smarty_tpl->tpl_vars['oPosition']->value->cName )), 'UTF-8', 'utf-8'), ENT_QUOTES, 'UTF-8', true);?>

                                                            <?php $_block_repeat=false;
echo $_block_plugin74->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                        <?php $_block_repeat=false;
echo $_block_plugin71->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                    </td>
                                                <?php
}
}
/* {/block 'basket-cart-dropdown-cart-item-no-item-count'} */
/* {block 'basket-cart-dropdown-cart-item-noitem-price'} */
class Block_318698716790f96d5bb296_76115434 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                    <td class="text-right-util text-nowrap-util">
                                                        <?php echo $_smarty_tpl->tpl_vars['oPosition']->value->cEinzelpreisLocalized[$_smarty_tpl->tpl_vars['NettoPreise']->value][$_SESSION['cWaehrungName']];?>

                                                    </td>
                                                <?php
}
}
/* {/block 'basket-cart-dropdown-cart-item-noitem-price'} */
/* {block 'basket-cart-dropdown-cart-item'} */
class Block_7964128196790f96d5aa008_18187829 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cartPositions']->value, 'oPosition');
$_smarty_tpl->tpl_vars['oPosition']->iteration = 0;
$_smarty_tpl->tpl_vars['oPosition']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['oPosition']->value) {
$_smarty_tpl->tpl_vars['oPosition']->do_else = false;
$_smarty_tpl->tpl_vars['oPosition']->iteration++;
$__foreach_oPosition_65_saved = $_smarty_tpl->tpl_vars['oPosition'];
?>
                                    <?php if ($_smarty_tpl->tpl_vars['oPosition']->iteration > $_smarty_tpl->tpl_vars['maxCartPositions']->value) {?>
                                        <?php break 1;?>
                                    <?php }?>
                                    <?php if (!$_smarty_tpl->tpl_vars['oPosition']->value->istKonfigKind()) {?>
                                        <?php if ($_smarty_tpl->tpl_vars['oPosition']->value->nPosTyp == (defined('C_WARENKORBPOS_TYP_ARTIKEL') ? constant('C_WARENKORBPOS_TYP_ARTIKEL') : null) || $_smarty_tpl->tpl_vars['oPosition']->value->nPosTyp == (defined('C_WARENKORBPOS_TYP_GRATISGESCHENK') ? constant('C_WARENKORBPOS_TYP_GRATISGESCHENK') : null)) {?>
                                            <tr>
                                                <td>
                                                    <?php $_block_plugin65 = isset($_smarty_tpl->smarty->registered_plugins['block']['formrow'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['formrow'][0][0] : null;
if (!is_callable(array($_block_plugin65, 'render'))) {
throw new SmartyException('block tag \'formrow\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('formrow', array());
$_block_repeat=true;
echo $_block_plugin65->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17630430896790f96d5b0518_21846508', 'basket-cart-dropdown-cart-item-item-image', $this->tplIndex);
?>

                                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9586196576790f96d5b3468_38713763', 'basket-cart-dropdown-cart-item-item-link', $this->tplIndex);
?>

                                                    <?php $_block_repeat=false;
echo $_block_plugin65->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                </td>
                                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3293260366790f96d5b63d1_95069264', 'basket-cart-dropdown-cart-item-item-price', $this->tplIndex);
?>

                                            </tr>
                                        <?php } else { ?>
                                            <tr>
                                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11217849316790f96d5b8a17_02102628', 'basket-cart-dropdown-cart-item-no-item-count', $this->tplIndex);
?>

                                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_318698716790f96d5bb296_76115434', 'basket-cart-dropdown-cart-item-noitem-price', $this->tplIndex);
?>

                                            </tr>
                                        <?php }?>
                                    <?php }?>
                                <?php
$_smarty_tpl->tpl_vars['oPosition'] = $__foreach_oPosition_65_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php
}
}
/* {/block 'basket-cart-dropdown-cart-item'} */
/* {block 'basket-cart-dropdown-cart-items-table'} */
class Block_17770665166790f96d5a9ce9_86357518 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <table class="table dropdown-cart-items">
                        <tbody>
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7964128196790f96d5aa008_18187829', 'basket-cart-dropdown-cart-item', $this->tplIndex);
?>

                        </tbody>
                    </table>
                    <?php
}
}
/* {/block 'basket-cart-dropdown-cart-items-table'} */
/* {block 'basket-cart-dropdown-items-item-overflow-notice'} */
class Block_3329507066790f96d5bcc06_93499919 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OSPanel\\domains\\JTL_shop\\includes\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>

                        <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['cartPositions']->value) > $_smarty_tpl->tpl_vars['maxCartPositions']->value) {?>
                            <hr>
                            <div class="item-overflow-notice">
                                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_static_route'][0], array( array('id'=>'warenkorb.php'),$_smarty_tpl ) );
$_prefixVariable43 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'itemOverflowNotice','section'=>'basket','printf'=>((((int)(smarty_modifier_count($_smarty_tpl->tpl_vars['cartPositions']->value))-$_smarty_tpl->tpl_vars['maxCartPositions']->value)).(':::')).($_prefixVariable43)),$_smarty_tpl ) );?>

                            </div>
                            <hr>
                        <?php }?>
                    <?php
}
}
/* {/block 'basket-cart-dropdown-items-item-overflow-notice'} */
/* {block 'basket-cart-dropdown-cart-items'} */
class Block_16414692856790f96d5a99c7_26032086 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <div class="table-responsive max-h-sm lg-max-h">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17770665166790f96d5a9ce9_86357518', 'basket-cart-dropdown-cart-items-table', $this->tplIndex);
?>

                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3329507066790f96d5bcc06_93499919', 'basket-cart-dropdown-items-item-overflow-notice', $this->tplIndex);
?>

                </div>
                <?php
}
}
/* {/block 'basket-cart-dropdown-cart-items'} */
/* {block 'basket-cart-dropdown-cart-item-net'} */
class Block_11329864386790f96d5bf955_64363986 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <li class="cart-dropdown-total-item">
                                        <?php if (empty($_SESSION['Versandart'])) {?>
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'subtotal','section'=>'account data'),$_smarty_tpl ) );?>

                                        <?php } else { ?>
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'totalSum'),$_smarty_tpl ) );?>

                                        <?php }?> (<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'net'),$_smarty_tpl ) );?>
) <span class="cart-dropdown-total-item-price"><?php echo $_smarty_tpl->tpl_vars['WarensummeLocalized']->value[$_smarty_tpl->tpl_vars['NettoPreise']->value];?>
</span>
                                    </li>
                                <?php
}
}
/* {/block 'basket-cart-dropdown-cart-item-net'} */
/* {block 'basket-cart-dropdown-cart-item-tax'} */
class Block_3490014416790f96d5c28b7_96357552 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Steuerpositionen']->value, 'Steuerposition');
$_smarty_tpl->tpl_vars['Steuerposition']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['Steuerposition']->value) {
$_smarty_tpl->tpl_vars['Steuerposition']->do_else = false;
?>
                                        <li class="cart-dropdown-total-item">
                                            <?php echo $_smarty_tpl->tpl_vars['Steuerposition']->value->cName;?>

                                            <span class="cart-dropdown-total-item-price"><?php echo $_smarty_tpl->tpl_vars['Steuerposition']->value->cPreisLocalized;?>
</span>
                                        </li>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <?php
}
}
/* {/block 'basket-cart-dropdown-cart-item-tax'} */
/* {block 'basket-cart-dropdown-cart-item-total'} */
class Block_4586278656790f96d5c4451_01603873 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <li class="font-weight-bold-util">
                                    <?php if (empty($_SESSION['Versandart'])) {?>
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'subtotal','section'=>'account data'),$_smarty_tpl ) );?>

                                    <?php } else { ?>
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'totalSum'),$_smarty_tpl ) );?>

                                    <?php }?>: <span class="cart-dropdown-total-item-price"><?php echo $_smarty_tpl->tpl_vars['WarensummeLocalized']->value[0];?>
</span>
                                </li>
                            <?php
}
}
/* {/block 'basket-cart-dropdown-cart-item-total'} */
/* {block 'basket-cart-dropdown-cart-item-favourable-shipping'} */
class Block_14757090126790f96d5c5f62_27578760 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <?php if ($_smarty_tpl->tpl_vars['favourableShippingString']->value !== '') {?>
                                    <li class="cart-dropdown-total-item"><?php echo $_smarty_tpl->tpl_vars['favourableShippingString']->value;?>
</li>
                                <?php }?>
                            <?php
}
}
/* {/block 'basket-cart-dropdown-cart-item-favourable-shipping'} */
/* {block 'basket-cart-dropdown-total'} */
class Block_434724046790f96d5bf365_16497738 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OSPanel\\domains\\JTL_shop\\includes\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>

                        <ul class="list-unstyled">
                            <?php if ($_smarty_tpl->tpl_vars['NettoPreise']->value) {?>
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11329864386790f96d5bf955_64363986', 'basket-cart-dropdown-cart-item-net', $this->tplIndex);
?>

                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['global']['global_steuerpos_anzeigen'] !== 'N' && (isset($_smarty_tpl->tpl_vars['Steuerpositionen']->value)) && smarty_modifier_count($_smarty_tpl->tpl_vars['Steuerpositionen']->value) > 0) {?>
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3490014416790f96d5c28b7_96357552', 'basket-cart-dropdown-cart-item-tax', $this->tplIndex);
?>

                            <?php }?>
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4586278656790f96d5c4451_01603873', 'basket-cart-dropdown-cart-item-total', $this->tplIndex);
?>

                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14757090126790f96d5c5f62_27578760', 'basket-cart-dropdown-cart-item-favourable-shipping', $this->tplIndex);
?>

                        </ul>
                    <?php
}
}
/* {/block 'basket-cart-dropdown-total'} */
/* {block 'basket-cart-dropdown-buttons'} */
class Block_15114900526790f96d5c6f38_35324953 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_block_plugin75 = isset($_smarty_tpl->smarty->registered_plugins['block']['row'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['row'][0][0] : null;
if (!is_callable(array($_block_plugin75, 'render'))) {
throw new SmartyException('block tag \'row\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('row', array('class'=>"cart-dropdown-buttons"));
$_block_repeat=true;
echo $_block_plugin75->render(array('class'=>"cart-dropdown-buttons"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php $_block_plugin76 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin76, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>12,'lg'=>6));
$_block_repeat=true;
echo $_block_plugin76->render(array('cols'=>12,'lg'=>6), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_static_route'][0], array( array('id'=>'bestellvorgang.php'),$_smarty_tpl ) );
$_prefixVariable44=ob_get_clean();
$_block_plugin77 = isset($_smarty_tpl->smarty->registered_plugins['block']['button'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['button'][0][0] : null;
if (!is_callable(array($_block_plugin77, 'render'))) {
throw new SmartyException('block tag \'button\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('button', array('variant'=>"outline-primary",'type'=>"link",'block'=>true,'size'=>"sm",'href'=>$_prefixVariable44."?wk=1",'class'=>"cart-dropdown-next"));
$_block_repeat=true;
echo $_block_plugin77->render(array('variant'=>"outline-primary",'type'=>"link",'block'=>true,'size'=>"sm",'href'=>$_prefixVariable44."?wk=1",'class'=>"cart-dropdown-next"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'nextStepCheckout','section'=>'checkout'),$_smarty_tpl ) );?>

                                <?php $_block_repeat=false;
echo $_block_plugin77->render(array('variant'=>"outline-primary",'type'=>"link",'block'=>true,'size'=>"sm",'href'=>$_prefixVariable44."?wk=1",'class'=>"cart-dropdown-next"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php $_block_repeat=false;
echo $_block_plugin76->render(array('cols'=>12,'lg'=>6), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php $_block_plugin78 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin78, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>12,'lg'=>6));
$_block_repeat=true;
echo $_block_plugin78->render(array('cols'=>12,'lg'=>6), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'gotoBasket'),$_smarty_tpl ) );
$_prefixVariable45=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_static_route'][0], array( array('id'=>'warenkorb.php'),$_smarty_tpl ) );
$_prefixVariable46=ob_get_clean();
$_block_plugin79 = isset($_smarty_tpl->smarty->registered_plugins['block']['button'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['button'][0][0] : null;
if (!is_callable(array($_block_plugin79, 'render'))) {
throw new SmartyException('block tag \'button\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('button', array('variant'=>"primary",'type'=>"link",'block'=>true,'size'=>"sm",'title'=>$_prefixVariable45,'href'=>$_prefixVariable46));
$_block_repeat=true;
echo $_block_plugin79->render(array('variant'=>"primary",'type'=>"link",'block'=>true,'size'=>"sm",'title'=>$_prefixVariable45,'href'=>$_prefixVariable46), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'gotoBasket'),$_smarty_tpl ) );?>

                                <?php $_block_repeat=false;
echo $_block_plugin79->render(array('variant'=>"primary",'type'=>"link",'block'=>true,'size'=>"sm",'title'=>$_prefixVariable45,'href'=>$_prefixVariable46), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php $_block_repeat=false;
echo $_block_plugin78->render(array('cols'=>12,'lg'=>6), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        <?php $_block_repeat=false;
echo $_block_plugin75->render(array('class'=>"cart-dropdown-buttons"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php
}
}
/* {/block 'basket-cart-dropdown-buttons'} */
/* {block 'basket-cart-dropdown-shipping-free-hint'} */
class Block_1755853876790f96d5cbe06_46508536 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <hr>
                            <ul class="cart-dropdown-shipping-notice list-icons font-size-sm">
                                <li>
                                    <a class="popup"
                                       href="<?php if (!empty($_smarty_tpl->tpl_vars['oSpezialseiten_arr']->value) && (isset($_smarty_tpl->tpl_vars['oSpezialseiten_arr']->value[(defined('LINKTYP_VERSAND') ? constant('LINKTYP_VERSAND') : null)]))) {
echo $_smarty_tpl->tpl_vars['oSpezialseiten_arr']->value[(defined('LINKTYP_VERSAND') ? constant('LINKTYP_VERSAND') : null)]->getURL();
} else { ?>#<?php }?>"
                                       data-toggle="tooltip"
                                       data-placement="bottom"
                                       title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'shippingInfo','section'=>'login'),$_smarty_tpl ) );?>
">
                                        <i class="fa fa-info-circle"></i>
                                    </a>
                                    <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['WarenkorbVersandkostenfreiHinweis']->value,160,"..." ));?>

                                </li>
                            </ul>
                        <?php
}
}
/* {/block 'basket-cart-dropdown-shipping-free-hint'} */
/* {block 'basket-cart-dropdown-cart-items-body'} */
class Block_12328543856790f96d5bf014_14481168 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <div class="dropdown-body">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_434724046790f96d5bf365_16497738', 'basket-cart-dropdown-total', $this->tplIndex);
?>

                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15114900526790f96d5c6f38_35324953', 'basket-cart-dropdown-buttons', $this->tplIndex);
?>

                    <?php if (!empty($_smarty_tpl->tpl_vars['WarenkorbVersandkostenfreiHinweis']->value)) {?>
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1755853876790f96d5cbe06_46508536', 'basket-cart-dropdown-shipping-free-hint', $this->tplIndex);
?>

                    <?php }?>
                </div>
                <?php
}
}
/* {/block 'basket-cart-dropdown-cart-items-body'} */
/* {block 'basket-cart-dropdown-cart-items-content'} */
class Block_4469572316790f96d5a9648_17875798 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16414692856790f96d5a99c7_26032086', 'basket-cart-dropdown-cart-items', $this->tplIndex);
?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12328543856790f96d5bf014_14481168', 'basket-cart-dropdown-cart-items-body', $this->tplIndex);
?>

            <?php
}
}
/* {/block 'basket-cart-dropdown-cart-items-content'} */
/* {block 'basket-cart-dropdown-hint-empty'} */
class Block_10121918396790f96d5cfca9_53113120 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_static_route'][0], array( array('id'=>'warenkorb.php'),$_smarty_tpl ) );
$_prefixVariable47 = ob_get_clean();
ob_start();
echo $_prefixVariable47;
$_prefixVariable48=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('section'=>'checkout','key'=>'emptybasket'),$_smarty_tpl ) );
$_prefixVariable49=ob_get_clean();
$_block_plugin80 = isset($_smarty_tpl->smarty->registered_plugins['block']['dropdownitem'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['dropdownitem'][0][0] : null;
if (!is_callable(array($_block_plugin80, 'render'))) {
throw new SmartyException('block tag \'dropdownitem\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('dropdownitem', array('class'=>"cart-dropdown-empty",'href'=>$_prefixVariable48,'rel'=>"nofollow",'title'=>$_prefixVariable49));
$_block_repeat=true;
echo $_block_plugin80->render(array('class'=>"cart-dropdown-empty",'href'=>$_prefixVariable48,'rel'=>"nofollow",'title'=>$_prefixVariable49), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('section'=>'checkout','key'=>'emptybasket'),$_smarty_tpl ) );?>

                <?php $_block_repeat=false;
echo $_block_plugin80->render(array('class'=>"cart-dropdown-empty",'href'=>$_prefixVariable48,'rel'=>"nofollow",'title'=>$_prefixVariable49), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php
}
}
/* {/block 'basket-cart-dropdown-hint-empty'} */
/* {block 'basket-cart-dropdown'} */
class Block_7295892126790f96d5a6a84_52926873 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'basket-cart-dropdown' => 
  array (
    0 => 'Block_7295892126790f96d5a6a84_52926873',
  ),
  'basket-cart-dropdown-max-cart-positions' => 
  array (
    0 => 'Block_15012634626790f96d5a7fb6_74893262',
  ),
  'basket-cart-dropdown-cart-items-content' => 
  array (
    0 => 'Block_4469572316790f96d5a9648_17875798',
  ),
  'basket-cart-dropdown-cart-items' => 
  array (
    0 => 'Block_16414692856790f96d5a99c7_26032086',
  ),
  'basket-cart-dropdown-cart-items-table' => 
  array (
    0 => 'Block_17770665166790f96d5a9ce9_86357518',
  ),
  'basket-cart-dropdown-cart-item' => 
  array (
    0 => 'Block_7964128196790f96d5aa008_18187829',
  ),
  'basket-cart-dropdown-cart-item-item-image' => 
  array (
    0 => 'Block_17630430896790f96d5b0518_21846508',
  ),
  'basket-cart-dropdown-cart-item-item-link' => 
  array (
    0 => 'Block_9586196576790f96d5b3468_38713763',
  ),
  'basket-cart-dropdown-cart-item-item-price' => 
  array (
    0 => 'Block_3293260366790f96d5b63d1_95069264',
  ),
  'basket-cart-dropdown-cart-item-no-item-count' => 
  array (
    0 => 'Block_11217849316790f96d5b8a17_02102628',
  ),
  'basket-cart-dropdown-cart-item-noitem-price' => 
  array (
    0 => 'Block_318698716790f96d5bb296_76115434',
  ),
  'basket-cart-dropdown-items-item-overflow-notice' => 
  array (
    0 => 'Block_3329507066790f96d5bcc06_93499919',
  ),
  'basket-cart-dropdown-cart-items-body' => 
  array (
    0 => 'Block_12328543856790f96d5bf014_14481168',
  ),
  'basket-cart-dropdown-total' => 
  array (
    0 => 'Block_434724046790f96d5bf365_16497738',
  ),
  'basket-cart-dropdown-cart-item-net' => 
  array (
    0 => 'Block_11329864386790f96d5bf955_64363986',
  ),
  'basket-cart-dropdown-cart-item-tax' => 
  array (
    0 => 'Block_3490014416790f96d5c28b7_96357552',
  ),
  'basket-cart-dropdown-cart-item-total' => 
  array (
    0 => 'Block_4586278656790f96d5c4451_01603873',
  ),
  'basket-cart-dropdown-cart-item-favourable-shipping' => 
  array (
    0 => 'Block_14757090126790f96d5c5f62_27578760',
  ),
  'basket-cart-dropdown-buttons' => 
  array (
    0 => 'Block_15114900526790f96d5c6f38_35324953',
  ),
  'basket-cart-dropdown-shipping-free-hint' => 
  array (
    0 => 'Block_1755853876790f96d5cbe06_46508536',
  ),
  'basket-cart-dropdown-hint-empty' => 
  array (
    0 => 'Block_10121918396790f96d5cfca9_53113120',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OSPanel\\domains\\JTL_shop\\includes\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>

    <div class="cart-dropdown dropdown-menu dropdown-menu-right lg-min-w-lg">
        <?php $_smarty_tpl->_assignInScope('cartPositions', JTL\Session\Frontend::getCart()->PositionenArr);?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15012634626790f96d5a7fb6_74893262', 'basket-cart-dropdown-max-cart-positions', $this->tplIndex);
?>

        <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['cartPositions']->value) > 0) {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4469572316790f96d5a9648_17875798', 'basket-cart-dropdown-cart-items-content', $this->tplIndex);
?>

        <?php } else { ?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10121918396790f96d5cfca9_53113120', 'basket-cart-dropdown-hint-empty', $this->tplIndex);
?>

        <?php }?>
    </div>
<?php
}
}
/* {/block 'basket-cart-dropdown'} */
}

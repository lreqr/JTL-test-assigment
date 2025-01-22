<?php
/* Smarty version 4.3.1, created on 2025-01-22 14:58:04
  from 'C:\OSPanel\domains\JTL_shop\templates\NOVA\snippets\comparelist_dropdown.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6790f96c1247d2_57179232',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0658cc70b09fbd890af86264ebf4f8ecf2ed00f6' => 
    array (
      0 => 'C:\\OSPanel\\domains\\JTL_shop\\templates\\NOVA\\snippets\\comparelist_dropdown.tpl',
      1 => 1694613031,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6790f96c1247d2_57179232 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5657463386790f96c10d709_20299372', 'snippets-comparelist-dropdown');
?>

<?php }
/* {block 'snippets-comparelist-dropdown-products-image'} */
class Block_11316485516790f96c110d13_77669735 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                <?php $_block_plugin57 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin57, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_smarty_tpl->tpl_vars['product']->value->cURLFull));
$_block_repeat=true;
echo $_block_plugin57->render(array('href'=>$_smarty_tpl->tpl_vars['product']->value->cURLFull), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0], array( array('lazy'=>true,'webp'=>true,'src'=>$_smarty_tpl->tpl_vars['product']->value->image->cURLMini,'srcset'=>"
                                                        ".((string)$_smarty_tpl->tpl_vars['product']->value->image->cURLMini)."
                                                        ".((string)$_smarty_tpl->tpl_vars['product']->value->image->imageSizes->xs->size->width)."w,
                                                        ".((string)$_smarty_tpl->tpl_vars['product']->value->image->cURLKlein)."
                                                        ".((string)$_smarty_tpl->tpl_vars['product']->value->image->imageSizes->sm->size->width)."w,
                                                        ".((string)$_smarty_tpl->tpl_vars['product']->value->image->cURLNormal)."
                                                        ".((string)$_smarty_tpl->tpl_vars['product']->value->image->imageSizes->md->size->width)."w",'sizes'=>"45px",'alt'=>$_smarty_tpl->tpl_vars['product']->value->cName,'class'=>"img-sm"),$_smarty_tpl ) );?>

                                                <?php $_block_repeat=false;
echo $_block_plugin57->render(array('href'=>$_smarty_tpl->tpl_vars['product']->value->cURLFull), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                            <?php
}
}
/* {/block 'snippets-comparelist-dropdown-products-image'} */
/* {block 'snippets-comparelist-dropdown-products-title'} */
class Block_14427208046790f96c1158b1_69229894 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                <?php $_block_plugin59 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin59, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_smarty_tpl->tpl_vars['product']->value->cURLFull));
$_block_repeat=true;
echo $_block_plugin59->render(array('href'=>$_smarty_tpl->tpl_vars['product']->value->cURLFull), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['product']->value->cName;
$_block_repeat=false;
echo $_block_plugin59->render(array('href'=>$_smarty_tpl->tpl_vars['product']->value->cURLFull), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                            <?php
}
}
/* {/block 'snippets-comparelist-dropdown-products-title'} */
/* {block 'snippets-comparelist-dropdown-products-remove'} */
class Block_18176391766790f96c116ce6_40846765 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                        <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('section'=>"comparelist",'key'=>"removeFromCompareList"),$_smarty_tpl ) );
$_prefixVariable36=ob_get_clean();
ob_start();?>{<?php $_prefixVariable37=ob_get_clean();
ob_start();
echo htmlspecialchars((string)'"a"', ENT_QUOTES, 'utf-8', true);
$_prefixVariable38=ob_get_clean();
ob_start();?>}<?php $_prefixVariable39=ob_get_clean();
$_block_plugin60 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin60, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>"?vlplo=".((string)$_smarty_tpl->tpl_vars['product']->value->kArtikel),'class'=>"remove",'title'=>$_prefixVariable36,'data'=>array("name"=>"Vergleichsliste.remove","toggle"=>"product-actions","value"=>$_prefixVariable37.$_prefixVariable38.":".((string)$_smarty_tpl->tpl_vars['product']->value->kArtikel).$_prefixVariable39)));
$_block_repeat=true;
echo $_block_plugin60->render(array('href'=>"?vlplo=".((string)$_smarty_tpl->tpl_vars['product']->value->kArtikel),'class'=>"remove",'title'=>$_prefixVariable36,'data'=>array("name"=>"Vergleichsliste.remove","toggle"=>"product-actions","value"=>$_prefixVariable37.$_prefixVariable38.":".((string)$_smarty_tpl->tpl_vars['product']->value->kArtikel).$_prefixVariable39)), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                            <i class="fas fa-times"></i>
                                        <?php $_block_repeat=false;
echo $_block_plugin60->render(array('href'=>"?vlplo=".((string)$_smarty_tpl->tpl_vars['product']->value->kArtikel),'class'=>"remove",'title'=>$_prefixVariable36,'data'=>array("name"=>"Vergleichsliste.remove","toggle"=>"product-actions","value"=>$_prefixVariable37.$_prefixVariable38.":".((string)$_smarty_tpl->tpl_vars['product']->value->kArtikel).$_prefixVariable39)), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                    <?php
}
}
/* {/block 'snippets-comparelist-dropdown-products-remove'} */
/* {block 'snippets-comparelist-dropdown-products-body'} */
class Block_16220105866790f96c10fa84_94999363 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <tr>
                                <td class="w-100-util">
                                    <?php $_block_plugin55 = isset($_smarty_tpl->smarty->registered_plugins['block']['formrow'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['formrow'][0][0] : null;
if (!is_callable(array($_block_plugin55, 'render'))) {
throw new SmartyException('block tag \'formrow\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('formrow', array('class'=>"align-items-center-util"));
$_block_repeat=true;
echo $_block_plugin55->render(array('class'=>"align-items-center-util"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                        <?php $_block_plugin56 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin56, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('class'=>"col-auto"));
$_block_repeat=true;
echo $_block_plugin56->render(array('class'=>"col-auto"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11316485516790f96c110d13_77669735', 'snippets-comparelist-dropdown-products-image', $this->tplIndex);
?>

                                        <?php $_block_repeat=false;
echo $_block_plugin56->render(array('class'=>"col-auto"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                        <?php $_block_plugin58 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin58, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array());
$_block_repeat=true;
echo $_block_plugin58->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14427208046790f96c1158b1_69229894', 'snippets-comparelist-dropdown-products-title', $this->tplIndex);
?>

                                        <?php $_block_repeat=false;
echo $_block_plugin58->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                    <?php $_block_repeat=false;
echo $_block_plugin55->render(array('class'=>"align-items-center-util"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                </td>
                                <td  class="text-right-util text-nowrap-util">
                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18176391766790f96c116ce6_40846765', 'snippets-comparelist-dropdown-products-remove', $this->tplIndex);
?>

                                </td>
                            </tr>
                        <?php
}
}
/* {/block 'snippets-comparelist-dropdown-products-body'} */
/* {block 'snippets-comparelist-dropdown-products'} */
class Block_2798763936790f96c10dc27_50859915 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OSPanel\\domains\\JTL_shop\\includes\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>

        <div class="comparelist-dropdown-table table-responsive max-h-sm lg-max-h">
            <?php if (smarty_modifier_count(JTL\Session\Frontend::getCompareList()->oArtikel_arr) > 0) {?>
                <table class="table table-vertical-middle table-img">
                    <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, JTL\Session\Frontend::getCompareList()->oArtikel_arr, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16220105866790f96c10fa84_94999363', 'snippets-comparelist-dropdown-products-body', $this->tplIndex);
?>

                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </tbody>
                </table>
            <?php }?>
        </div>
    <?php
}
}
/* {/block 'snippets-comparelist-dropdown-products'} */
/* {block 'snippets-comparelist-dropdown-more-than-one'} */
class Block_14165387776790f96c122266_99188616 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'productNumberHint','section'=>'comparelist'),$_smarty_tpl ) );?>

                <?php
}
}
/* {/block 'snippets-comparelist-dropdown-more-than-one'} */
/* {block 'snippets-comparelist-dropdown-hint-to-compare'} */
class Block_6527047826790f96c122da9_92888516 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_static_route'][0], array( array('id'=>'vergleichsliste.php'),$_smarty_tpl ) );
$_prefixVariable40=ob_get_clean();
$_block_plugin61 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin61, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('class'=>"comparelist-dropdown-table-body-button btn btn-block btn-primary btn-sm",'id'=>'nav-comparelist-goto','href'=>$_prefixVariable40));
$_block_repeat=true;
echo $_block_plugin61->render(array('class'=>"comparelist-dropdown-table-body-button btn btn-block btn-primary btn-sm",'id'=>'nav-comparelist-goto','href'=>$_prefixVariable40), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'gotToCompare'),$_smarty_tpl ) );?>

                    <?php $_block_repeat=false;
echo $_block_plugin61->render(array('class'=>"comparelist-dropdown-table-body-button btn btn-block btn-primary btn-sm",'id'=>'nav-comparelist-goto','href'=>$_prefixVariable40), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php
}
}
/* {/block 'snippets-comparelist-dropdown-hint-to-compare'} */
/* {block 'snippets-comparelist-dropdown-hint'} */
class Block_21157502526790f96c121337_45580871 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OSPanel\\domains\\JTL_shop\\includes\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>

        <div class="comparelist-dropdown-table-body dropdown-body">
            <?php if (smarty_modifier_count(JTL\Session\Frontend::getCompareList()->oArtikel_arr) <= 1) {?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14165387776790f96c122266_99188616', 'snippets-comparelist-dropdown-more-than-one', $this->tplIndex);
?>

            <?php } else { ?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6527047826790f96c122da9_92888516', 'snippets-comparelist-dropdown-hint-to-compare', $this->tplIndex);
?>

            <?php }?>
        </div>
    <?php
}
}
/* {/block 'snippets-comparelist-dropdown-hint'} */
/* {block 'snippets-comparelist-dropdown'} */
class Block_5657463386790f96c10d709_20299372 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'snippets-comparelist-dropdown' => 
  array (
    0 => 'Block_5657463386790f96c10d709_20299372',
  ),
  'snippets-comparelist-dropdown-products' => 
  array (
    0 => 'Block_2798763936790f96c10dc27_50859915',
  ),
  'snippets-comparelist-dropdown-products-body' => 
  array (
    0 => 'Block_16220105866790f96c10fa84_94999363',
  ),
  'snippets-comparelist-dropdown-products-image' => 
  array (
    0 => 'Block_11316485516790f96c110d13_77669735',
  ),
  'snippets-comparelist-dropdown-products-title' => 
  array (
    0 => 'Block_14427208046790f96c1158b1_69229894',
  ),
  'snippets-comparelist-dropdown-products-remove' => 
  array (
    0 => 'Block_18176391766790f96c116ce6_40846765',
  ),
  'snippets-comparelist-dropdown-hint' => 
  array (
    0 => 'Block_21157502526790f96c121337_45580871',
  ),
  'snippets-comparelist-dropdown-more-than-one' => 
  array (
    0 => 'Block_14165387776790f96c122266_99188616',
  ),
  'snippets-comparelist-dropdown-hint-to-compare' => 
  array (
    0 => 'Block_6527047826790f96c122da9_92888516',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2798763936790f96c10dc27_50859915', 'snippets-comparelist-dropdown-products', $this->tplIndex);
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21157502526790f96c121337_45580871', 'snippets-comparelist-dropdown-hint', $this->tplIndex);
?>

<?php
}
}
/* {/block 'snippets-comparelist-dropdown'} */
}

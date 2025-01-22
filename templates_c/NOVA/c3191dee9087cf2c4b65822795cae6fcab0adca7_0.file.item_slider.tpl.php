<?php
/* Smarty version 4.3.1, created on 2025-01-22 14:58:21
  from 'C:\OSPanel\domains\JTL_shop\templates\NOVA\productlist\item_slider.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6790f97d6a3c06_99914252',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c3191dee9087cf2c4b65822795cae6fcab0adca7' => 
    array (
      0 => 'C:\\OSPanel\\domains\\JTL_shop\\templates\\NOVA\\productlist\\item_slider.tpl',
      1 => 1694613031,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:snippets/image.tpl' => 1,
    'file:productdetails/rating.tpl' => 1,
    'file:productdetails/price.tpl' => 1,
  ),
),false)) {
function content_6790f97d6a3c06_99914252 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2897737056790f97d695544_01373335', 'productlist-item-slider');
?>

<?php }
/* {block 'productlist-item-slider-image'} */
class Block_15528106666790f97d698bb0_71378843 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php if ($_smarty_tpl->tpl_vars['tplscope']->value === 'half') {?>
                            <?php $_smarty_tpl->_assignInScope('imgSizes', '(min-width: 1300px) 19vw, (min-width: 992px) 29vw, 50vw');?>
                        <?php } elseif ($_smarty_tpl->tpl_vars['tplscope']->value === 'slider') {?>
                            <?php $_smarty_tpl->_assignInScope('imgSizes', '(min-width: 1300px) 15vw, (min-width: 992px) 20vw, (min-width: 768px) 34vw, 50vw');?>
                        <?php } elseif ($_smarty_tpl->tpl_vars['tplscope']->value === 'box') {?>
                            <?php $_smarty_tpl->_assignInScope('imgSizes', '(min-width: 1300px) 25vw, (min-width: 992px) 34vw, (min-width: 768px) 100vw, 50vw');?>
                        <?php }?>
                        <?php $_smarty_tpl->_subTemplateRender('file:snippets/image.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('item'=>$_smarty_tpl->tpl_vars['Artikel']->value,'square'=>false,'srcSize'=>'sm','class'=>'product-image','sizes'=>(($tmp = $_smarty_tpl->tpl_vars['imgSizes']->value ?? null)===null||$tmp==='' ? '100vw' : $tmp)), 0, false);
?>
                    <?php
}
}
/* {/block 'productlist-item-slider-image'} */
/* {block 'productlist-item-slider-link'} */
class Block_12719943576790f97d695b25_74940486 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_block_plugin157 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin157, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_smarty_tpl->tpl_vars['Artikel']->value->cURLFull));
$_block_repeat=true;
echo $_block_plugin157->render(array('href'=>$_smarty_tpl->tpl_vars['Artikel']->value->cURLFull), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <div class="item-slider productbox-image square square-image">
                <div class="inner">
                    <?php if ((isset($_smarty_tpl->tpl_vars['Artikel']->value->Bilder[0]->cAltAttribut))) {?>
                        <?php $_smarty_tpl->_assignInScope('alt', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['Artikel']->value->Bilder[0]->cAltAttribut,60 )));?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->_assignInScope('alt', $_smarty_tpl->tpl_vars['Artikel']->value->cName);?>
                    <?php }?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15528106666790f97d698bb0_71378843', 'productlist-item-slider-image', $this->tplIndex);
?>

                    <?php if ($_smarty_tpl->tpl_vars['tplscope']->value !== 'box') {?>
                        <meta itemprop="image" content="<?php echo $_smarty_tpl->tpl_vars['Artikel']->value->Bilder[0]->cURLNormal;?>
">
                        <meta itemprop="url" content="<?php echo $_smarty_tpl->tpl_vars['Artikel']->value->cURLFull;?>
">
                    <?php }?>
                </div>
            </div>
        <?php $_block_repeat=false;
echo $_block_plugin157->render(array('href'=>$_smarty_tpl->tpl_vars['Artikel']->value->cURLFull), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php
}
}
/* {/block 'productlist-item-slider-link'} */
/* {block 'productlist-item-slider-caption-bundle'} */
class Block_7777319606790f97d69f113_75745593 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php echo $_smarty_tpl->tpl_vars['Artikel']->value->fAnzahl_stueckliste;?>
x
                        <?php
}
}
/* {/block 'productlist-item-slider-caption-bundle'} */
/* {block 'productlist-item-slider-caption-short-desc'} */
class Block_10441203966790f97d69d870_28624249 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_block_plugin158 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin158, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_smarty_tpl->tpl_vars['Artikel']->value->cURLFull));
$_block_repeat=true;
echo $_block_plugin158->render(array('href'=>$_smarty_tpl->tpl_vars['Artikel']->value->cURLFull), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <span class="item-slider-desc text-clamp-2">
                    <?php if ((isset($_smarty_tpl->tpl_vars['showPartsList']->value)) && $_smarty_tpl->tpl_vars['showPartsList']->value === true && (isset($_smarty_tpl->tpl_vars['Artikel']->value->fAnzahl_stueckliste))) {?>
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7777319606790f97d69f113_75745593', 'productlist-item-slider-caption-bundle', $this->tplIndex);
?>

                    <?php }?>
                    <span <?php if ($_smarty_tpl->tpl_vars['tplscope']->value !== 'box') {?>itemprop="name"<?php }?>><?php echo $_smarty_tpl->tpl_vars['Artikel']->value->cKurzbezeichnung;?>
</span>
                </span>
            <?php $_block_repeat=false;
echo $_block_plugin158->render(array('href'=>$_smarty_tpl->tpl_vars['Artikel']->value->cURLFull), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php
}
}
/* {/block 'productlist-item-slider-caption-short-desc'} */
/* {block 'productlist-item-slider-include-rating'} */
class Block_11730530676790f97d6a1b15_35116513 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <small class="item-slider-rating"><?php $_smarty_tpl->_subTemplateRender('file:productdetails/rating.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('stars'=>$_smarty_tpl->tpl_vars['Artikel']->value->fDurchschnittsBewertung,'link'=>$_smarty_tpl->tpl_vars['Artikel']->value->cURLFull), 0, false);
?></small>
                <?php
}
}
/* {/block 'productlist-item-slider-include-rating'} */
/* {block 'productlist-item-slider-include-price'} */
class Block_6070125636790f97d6a2c88_53584099 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div class="item-slider-price" itemprop="offers" itemscope itemtype="https://schema.org/Offer">
                <?php $_smarty_tpl->_subTemplateRender('file:productdetails/price.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('Artikel'=>$_smarty_tpl->tpl_vars['Artikel']->value,'tplscope'=>$_smarty_tpl->tpl_vars['tplscope']->value), 0, false);
?>
            </div>
        <?php
}
}
/* {/block 'productlist-item-slider-include-price'} */
/* {block 'productlist-item-slider-caption'} */
class Block_1681429526790f97d69d4e3_03574029 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10441203966790f97d69d870_28624249', 'productlist-item-slider-caption-short-desc', $this->tplIndex);
?>

        <?php if ($_smarty_tpl->tpl_vars['tplscope']->value === 'box') {?>
            <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['bewertung']['bewertung_anzeigen'] === 'Y' && $_smarty_tpl->tpl_vars['Artikel']->value->fDurchschnittsBewertung > 0) {?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11730530676790f97d6a1b15_35116513', 'productlist-item-slider-include-rating', $this->tplIndex);
?>

            <?php }?>
        <?php }?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6070125636790f97d6a2c88_53584099', 'productlist-item-slider-include-price', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'productlist-item-slider-caption'} */
/* {block 'productlist-item-slider'} */
class Block_2897737056790f97d695544_01373335 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'productlist-item-slider' => 
  array (
    0 => 'Block_2897737056790f97d695544_01373335',
  ),
  'productlist-item-slider-link' => 
  array (
    0 => 'Block_12719943576790f97d695b25_74940486',
  ),
  'productlist-item-slider-image' => 
  array (
    0 => 'Block_15528106666790f97d698bb0_71378843',
  ),
  'productlist-item-slider-caption' => 
  array (
    0 => 'Block_1681429526790f97d69d4e3_03574029',
  ),
  'productlist-item-slider-caption-short-desc' => 
  array (
    0 => 'Block_10441203966790f97d69d870_28624249',
  ),
  'productlist-item-slider-caption-bundle' => 
  array (
    0 => 'Block_7777319606790f97d69f113_75745593',
  ),
  'productlist-item-slider-include-rating' => 
  array (
    0 => 'Block_11730530676790f97d6a1b15_35116513',
  ),
  'productlist-item-slider-include-price' => 
  array (
    0 => 'Block_6070125636790f97d6a2c88_53584099',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12719943576790f97d695b25_74940486', 'productlist-item-slider-link', $this->tplIndex);
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1681429526790f97d69d4e3_03574029', 'productlist-item-slider-caption', $this->tplIndex);
?>

<?php
}
}
/* {/block 'productlist-item-slider'} */
}

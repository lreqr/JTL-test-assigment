<?php
/* Smarty version 4.3.1, created on 2025-01-22 14:58:23
  from 'C:\OSPanel\domains\JTL_shop\templates\NOVA\productdetails\price.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6790f97f63ccd6_12617755',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df42f3f60c552cab0fadd417d618a1a0ea8efdf5' => 
    array (
      0 => 'C:\\OSPanel\\domains\\JTL_shop\\templates\\NOVA\\productdetails\\price.tpl',
      1 => 1694613031,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:snippets/shipping_tax_info.tpl' => 1,
  ),
),false)) {
function content_6790f97f63ccd6_12617755 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20846360486790f97f5e1c38_48690322', 'productdetails-price');
?>

<?php }
/* {block 'productdetails-price-out-of-stock-microdata'} */
class Block_20970579886790f97f5e46d1_53766587 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OSPanel\\domains\\JTL_shop\\includes\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.regex_replace.php','function'=>'smarty_modifier_regex_replace',),));
?>

                        <?php if (!($_smarty_tpl->tpl_vars['Artikel']->value->Preise->fVKNetto == 0 && $_smarty_tpl->tpl_vars['Einstellungen']->value['global']['global_preis0'] === 'N')) {?>
                            <span itemprop="priceSpecification" itemscope itemtype="https://schema.org/UnitPriceSpecification">
                                <?php if ($_smarty_tpl->tpl_vars['Artikel']->value->Preise->oPriceRange->isRange()) {?>
                                    <meta itemprop="minPrice" content="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'formatForMicrodata' ][ 0 ], array( $_smarty_tpl->tpl_vars['Artikel']->value->Preise->oPriceRange->getMinLocalized($_smarty_tpl->tpl_vars['NettoPreise']->value) ));?>
">
                                    <meta itemprop="maxPrice" content="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'formatForMicrodata' ][ 0 ], array( $_smarty_tpl->tpl_vars['Artikel']->value->Preise->oPriceRange->getMaxLocalized($_smarty_tpl->tpl_vars['NettoPreise']->value) ));?>
">
                                <?php }?>
                                <meta itemprop="price" content="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'formatForMicrodata' ][ 0 ], array( $_smarty_tpl->tpl_vars['Artikel']->value->Preise->cVKLocalized[$_smarty_tpl->tpl_vars['NettoPreise']->value] ));?>
">
                                <meta itemprop="priceCurrency" content="<?php echo JTL\Session\Frontend::getCurrency()->getName();?>
">
                                <?php if ($_smarty_tpl->tpl_vars['Artikel']->value->Preise->Sonderpreis_aktiv && $_smarty_tpl->tpl_vars['Artikel']->value->dSonderpreisStart_en !== null && $_smarty_tpl->tpl_vars['Artikel']->value->dSonderpreisEnde_en !== null) {?>
                                    <meta itemprop="validFrom" content="<?php echo $_smarty_tpl->tpl_vars['Artikel']->value->dSonderpreisStart_en;?>
">
                                    <meta itemprop="validThrough" content="<?php echo $_smarty_tpl->tpl_vars['Artikel']->value->dSonderpreisEnde_en;?>
">
                                    <meta itemprop="priceValidUntil" content="<?php echo $_smarty_tpl->tpl_vars['Artikel']->value->dSonderpreisEnde_en;?>
">
                                <?php }?>
                                <?php if (!empty($_smarty_tpl->tpl_vars['Artikel']->value->cLocalizedVPE)) {?>
                                    <span itemprop="priceSpecification" itemscope itemtype="https://schema.org/UnitPriceSpecification">
                                        <meta itemprop="price" content="<?php if ($_smarty_tpl->tpl_vars['Artikel']->value->Preise->oPriceRange->isRange()) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'string_format' ][ 0 ], array( (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'formatForMicrodata' ][ 0 ], array( $_smarty_tpl->tpl_vars['Artikel']->value->Preise->oPriceRange->getMinLocalized($_smarty_tpl->tpl_vars['NettoPreise']->value) ))/$_smarty_tpl->tpl_vars['Artikel']->value->fVPEWert),"%.2f" ));
} else {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'string_format' ][ 0 ], array( (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'formatForMicrodata' ][ 0 ], array( $_smarty_tpl->tpl_vars['Artikel']->value->Preise->cVKLocalized[$_smarty_tpl->tpl_vars['NettoPreise']->value] ))/$_smarty_tpl->tpl_vars['Artikel']->value->fVPEWert),"%.2f" ));
}?>">
                                        <meta itemprop="priceCurrency" content="<?php echo JTL\Session\Frontend::getCurrency()->getName();?>
">
                                        <span itemprop="referenceQuantity" itemscope itemtype="https://schema.org/QuantitativeValue">
                                            <meta itemprop="price" content="<?php echo $_smarty_tpl->tpl_vars['Artikel']->value->cLocalizedVPE[$_smarty_tpl->tpl_vars['NettoPreise']->value];?>
">
                                            <meta itemprop="value" content="<?php echo $_smarty_tpl->tpl_vars['Artikel']->value->fGrundpreisMenge;?>
">
                                            <meta itemprop="unitText" content="<?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['Artikel']->value->cVPEEinheit,"/[\d ]/",'');?>
">
                                        </span>
                                    </span>
                                <?php }?>
                            </span>
                        <?php }?>
                    <?php
}
}
/* {/block 'productdetails-price-out-of-stock-microdata'} */
/* {block 'productdetails-price-out-of-stock'} */
class Block_14403272466790f97f5e3f53_13412639 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <span class="price_label price_out_of_stock"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'productOutOfStock','section'=>'productDetails'),$_smarty_tpl ) );?>
</span>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20970579886790f97f5e46d1_53766587', 'productdetails-price-out-of-stock-microdata', $this->tplIndex);
?>

                <?php
}
}
/* {/block 'productdetails-price-out-of-stock'} */
/* {block 'productdetails-price-as-configured'} */
class Block_2923795946790f97f5f15b5_37476710 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <span class="price_label price_as_configured"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'priceAsConfigured','section'=>'productDetails'),$_smarty_tpl ) );?>
</span> <span class="price"></span>
                <?php
}
}
/* {/block 'productdetails-price-as-configured'} */
/* {block 'productdetails-price-on-application'} */
class Block_8248177866790f97f5f2c79_57502178 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <span class="price_label price_on_application"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'priceOnApplication'),$_smarty_tpl ) );?>
</span>
                <?php
}
}
/* {/block 'productdetails-price-on-application'} */
/* {block 'productdetails-price-label'} */
class Block_21187798936790f97f5f3605_26300392 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php if (($_smarty_tpl->tpl_vars['tplscope']->value !== 'detail' && $_smarty_tpl->tpl_vars['Artikel']->value->Preise->oPriceRange->isRange() && $_smarty_tpl->tpl_vars['Artikel']->value->Preise->oPriceRange->rangeWidth() > $_smarty_tpl->tpl_vars['Einstellungen']->value['artikeluebersicht']['articleoverview_pricerange_width']) || ($_smarty_tpl->tpl_vars['tplscope']->value === 'detail' && ($_smarty_tpl->tpl_vars['Artikel']->value->nVariationsAufpreisVorhanden == 1 || $_smarty_tpl->tpl_vars['Artikel']->value->bHasKonfig) && $_smarty_tpl->tpl_vars['Artikel']->value->kVaterArtikel == 0)) {?>
                    <span class="price_label pricestarting"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'priceStarting'),$_smarty_tpl ) );?>
 </span>
                    <?php } elseif ($_smarty_tpl->tpl_vars['Artikel']->value->Preise->rabatt > 0) {?>
                        <span class="price_label nowonly"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'nowOnly'),$_smarty_tpl ) );?>
 </span>
                    <?php }?>
                <?php
}
}
/* {/block 'productdetails-price-label'} */
/* {block 'productdetails-range'} */
class Block_16874122406790f97f5f8d95_67589901 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <span<?php if ($_smarty_tpl->tpl_vars['Artikel']->value->Preise->oPriceRange->isRange() && $_smarty_tpl->tpl_vars['tplscope']->value !== 'box') {?> itemprop="priceSpecification" itemscope itemtype="https://schema.org/UnitPriceSpecification"<?php }?>>
                        <?php if ($_smarty_tpl->tpl_vars['tplscope']->value !== 'detail' && $_smarty_tpl->tpl_vars['Artikel']->value->Preise->oPriceRange->isRange()) {?>
                            <?php if ($_smarty_tpl->tpl_vars['Artikel']->value->Preise->oPriceRange->rangeWidth() <= $_smarty_tpl->tpl_vars['Einstellungen']->value['artikeluebersicht']['articleoverview_pricerange_width']) {?>
                                <?php $_smarty_tpl->_assignInScope('rangePrices', $_smarty_tpl->tpl_vars['Artikel']->value->Preise->oPriceRange->getLocalizedArray($_smarty_tpl->tpl_vars['NettoPreise']->value));?>
                                <span class="first-range-price"><?php echo $_smarty_tpl->tpl_vars['rangePrices']->value[0];?>
 - </span><span class="second-range-price"><?php echo $_smarty_tpl->tpl_vars['rangePrices']->value[1];?>
 <?php if ($_smarty_tpl->tpl_vars['tplscope']->value !== 'detail') {?> <span class="footnote-reference">*</span><?php }?></span>
                            <?php } else { ?>
                                <?php echo $_smarty_tpl->tpl_vars['Artikel']->value->Preise->oPriceRange->getMinLocalized($_smarty_tpl->tpl_vars['NettoPreise']->value);?>
 <span class="footnote-reference">*</span>
                            <?php }?>
                        <?php } else { ?>
                            <?php if ($_smarty_tpl->tpl_vars['Artikel']->value->Preise->oPriceRange->isRange() && ($_smarty_tpl->tpl_vars['Artikel']->value->nVariationsAufpreisVorhanden == 1 || $_smarty_tpl->tpl_vars['Artikel']->value->bHasKonfig) && $_smarty_tpl->tpl_vars['Artikel']->value->kVaterArtikel == 0) {
echo $_smarty_tpl->tpl_vars['Artikel']->value->Preise->oPriceRange->getMinLocalized($_smarty_tpl->tpl_vars['NettoPreise']->value);
} else {
echo $_smarty_tpl->tpl_vars['Artikel']->value->Preise->cVKLocalized[$_smarty_tpl->tpl_vars['NettoPreise']->value];
}?>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['tplscope']->value !== 'detail' && !$_smarty_tpl->tpl_vars['Artikel']->value->Preise->oPriceRange->isRange()) {?> <span class="footnote-reference">*</span><?php }?>
                        </span>
                    <?php
}
}
/* {/block 'productdetails-range'} */
/* {block 'productdetails-price-snippets'} */
class Block_20283183716790f97f601466_73266590 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php if ($_smarty_tpl->tpl_vars['tplscope']->value !== 'box') {?>
                        <?php if ($_smarty_tpl->tpl_vars['Artikel']->value->Preise->oPriceRange->isRange()) {?>
                            <meta itemprop="minPrice" content="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'formatForMicrodata' ][ 0 ], array( $_smarty_tpl->tpl_vars['Artikel']->value->Preise->oPriceRange->getMinLocalized($_smarty_tpl->tpl_vars['NettoPreise']->value) ));?>
">
                            <meta itemprop="maxPrice" content="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'formatForMicrodata' ][ 0 ], array( $_smarty_tpl->tpl_vars['Artikel']->value->Preise->oPriceRange->getMaxLocalized($_smarty_tpl->tpl_vars['NettoPreise']->value) ));?>
">
                        <?php }?>
                        <meta itemprop="price" content="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'formatForMicrodata' ][ 0 ], array( $_smarty_tpl->tpl_vars['Artikel']->value->Preise->cVKLocalized[$_smarty_tpl->tpl_vars['NettoPreise']->value] ));?>
">
                        <meta itemprop="priceCurrency" content="<?php echo JTL\Session\Frontend::getCurrency()->getName();?>
">
                        <?php if ($_smarty_tpl->tpl_vars['Artikel']->value->Preise->Sonderpreis_aktiv && $_smarty_tpl->tpl_vars['Artikel']->value->dSonderpreisStart_en !== null && $_smarty_tpl->tpl_vars['Artikel']->value->dSonderpreisEnde_en !== null) {?>
                            <meta itemprop="validFrom" content="<?php echo $_smarty_tpl->tpl_vars['Artikel']->value->dSonderpreisStart_en;?>
">
                            <meta itemprop="validThrough" content="<?php echo $_smarty_tpl->tpl_vars['Artikel']->value->dSonderpreisEnde_en;?>
">
                            <meta itemprop="priceValidUntil" content="<?php echo $_smarty_tpl->tpl_vars['Artikel']->value->dSonderpreisEnde_en;?>
">
                        <?php }?>
                    <?php }?>
                <?php
}
}
/* {/block 'productdetails-price-snippets'} */
/* {block 'productdetails-price-label-per-unit'} */
class Block_21358537646790f97f608664_08961488 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <span class="price_label per_unit"> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'vpePer'),$_smarty_tpl ) );?>
 1 <?php echo $_smarty_tpl->tpl_vars['Artikel']->value->cEinheit;?>
</span>
                                <?php
}
}
/* {/block 'productdetails-price-label-per-unit'} */
/* {block 'productdetails-price-detail-base-price'} */
class Block_1669053126790f97f609de8_29834407 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OSPanel\\domains\\JTL_shop\\includes\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.regex_replace.php','function'=>'smarty_modifier_regex_replace',),));
?>

                                    <div class="base-price text-nowrap-util" itemprop="priceSpecification" itemscope itemtype="https://schema.org/UnitPriceSpecification">
                                        <meta itemprop="price" content="<?php if ($_smarty_tpl->tpl_vars['Artikel']->value->Preise->oPriceRange->isRange()) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'string_format' ][ 0 ], array( (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'formatForMicrodata' ][ 0 ], array( $_smarty_tpl->tpl_vars['Artikel']->value->Preise->oPriceRange->getMinLocalized($_smarty_tpl->tpl_vars['NettoPreise']->value) ))/$_smarty_tpl->tpl_vars['Artikel']->value->fVPEWert),"%.2f" ));
} else {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'string_format' ][ 0 ], array( (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'formatForMicrodata' ][ 0 ], array( $_smarty_tpl->tpl_vars['Artikel']->value->Preise->cVKLocalized[$_smarty_tpl->tpl_vars['NettoPreise']->value] ))/$_smarty_tpl->tpl_vars['Artikel']->value->fVPEWert),"%.2f" ));
}?>">
                                        <meta itemprop="priceCurrency" content="<?php echo JTL\Session\Frontend::getCurrency()->getName();?>
">
                                        <span class="value" itemprop="referenceQuantity" itemscope itemtype="https://schema.org/QuantitativeValue">
                                            <?php echo $_smarty_tpl->tpl_vars['Artikel']->value->cLocalizedVPE[$_smarty_tpl->tpl_vars['NettoPreise']->value];?>

                                            <meta itemprop="value" content="<?php echo $_smarty_tpl->tpl_vars['Artikel']->value->fGrundpreisMenge;?>
">
                                            <meta itemprop="unitText" content="<?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['Artikel']->value->cVPEEinheit,"/[\d ]/",'');?>
">
                                        </span>
                                    </div>
                                <?php
}
}
/* {/block 'productdetails-price-detail-base-price'} */
/* {block 'productdetails-price-detail-vat-info'} */
class Block_8952170066790f97f60fcd4_78531051 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <span class="vat_info">
                                    <?php $_smarty_tpl->_subTemplateRender('file:snippets/shipping_tax_info.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('taxdata'=>$_smarty_tpl->tpl_vars['Artikel']->value->taxData), 0, false);
?>
                                </span>
                            <?php
}
}
/* {/block 'productdetails-price-detail-vat-info'} */
/* {block 'productdetails-price-min-value-info'} */
class Block_10796856196790f97f610b78_15766220 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <?php $_smarty_tpl->_assignInScope('minOrderValue', $_SESSION['Kundengruppe']->getAttribute('mindestbestellwert'));?>
                                <?php if ($_smarty_tpl->tpl_vars['minOrderValue']->value > 0) {?>
                                    <?php if ($_smarty_tpl->tpl_vars['Artikel']->value->Preise->oPriceRange->isRange() && ($_smarty_tpl->tpl_vars['Artikel']->value->nVariationsAufpreisVorhanden == 1 || $_smarty_tpl->tpl_vars['Artikel']->value->bHasKonfig) && $_smarty_tpl->tpl_vars['Artikel']->value->kVaterArtikel == 0) {?>
                                        <?php if ($_smarty_tpl->tpl_vars['NettoPreise']->value == 1) {?>
                                            <?php $_smarty_tpl->_assignInScope('minPrice', $_smarty_tpl->tpl_vars['Artikel']->value->Preise->oPriceRange->minNettoPrice);?>
                                        <?php } else { ?>
                                            <?php $_smarty_tpl->_assignInScope('minPrice', $_smarty_tpl->tpl_vars['Artikel']->value->Preise->oPriceRange->minBruttoPrice);?>
                                        <?php }?>
                                    <?php } else { ?>
                                        <?php $_smarty_tpl->_assignInScope('minPrice', $_smarty_tpl->tpl_vars['Artikel']->value->Preise->fVK[$_smarty_tpl->tpl_vars['NettoPreise']->value]);?>
                                    <?php }?>

                                    <?php if ($_smarty_tpl->tpl_vars['minOrderValue']->value > $_smarty_tpl->tpl_vars['minPrice']->value) {?>
                                        <div class="min-value-wrapper"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'minValueInfo','section'=>'productDetails','printf'=>(($_smarty_tpl->tpl_vars['minOrderValue']->value).(':::')).($_SESSION['Waehrung']->getName())),$_smarty_tpl ) );?>
</div>
                                    <?php }?>
                                <?php }?>
                            <?php
}
}
/* {/block 'productdetails-price-min-value-info'} */
/* {block 'productdetails-price-special-prices-detail'} */
class Block_20449057886790f97f617ec3_82187401 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <?php if ($_smarty_tpl->tpl_vars['Artikel']->value->Preise->Sonderpreis_aktiv && $_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['artikeldetails_sonderpreisanzeige'] == 2) {?>
                                    <div class="text-danger text-stroke text-nowrap-util">
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'oldPrice'),$_smarty_tpl ) );?>
: <?php echo $_smarty_tpl->tpl_vars['Artikel']->value->Preise->alterVKLocalized[$_smarty_tpl->tpl_vars['NettoPreise']->value];?>

                                    </div>
                                <?php } elseif (!$_smarty_tpl->tpl_vars['Artikel']->value->Preise->Sonderpreis_aktiv && $_smarty_tpl->tpl_vars['Artikel']->value->Preise->rabatt > 0) {?>
                                    <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['artikeldetails_rabattanzeige'] == 3 || $_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['artikeldetails_rabattanzeige'] == 4) {?>
                                        <div class="text-danger text-stroke text-nowrap-util">
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'oldPrice'),$_smarty_tpl ) );?>
: <?php echo $_smarty_tpl->tpl_vars['Artikel']->value->Preise->alterVKLocalized[$_smarty_tpl->tpl_vars['NettoPreise']->value];?>

                                        </div>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['artikeldetails_rabattanzeige'] == 2 || $_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['artikeldetails_rabattanzeige'] == 4) {?>
                                        <div class="discount"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'discount'),$_smarty_tpl ) );?>
:
                                            <span class="value text-nowrap-util"><?php echo $_smarty_tpl->tpl_vars['Artikel']->value->Preise->rabatt;?>
%</span>
                                        </div>
                                    <?php }?>
                                <?php }?>
                            <?php
}
}
/* {/block 'productdetails-price-special-prices-detail'} */
/* {block 'productdetails-price-uvp'} */
class Block_13243763926790f97f61f681_70084895 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <div class="suggested-price">
                                        <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'suggestedPrice','section'=>'productDetails'),$_smarty_tpl ) );?>
</span>:
                                        <span class="value text-nowrap-util"><?php echo $_smarty_tpl->tpl_vars['Artikel']->value->cUVPLocalized;?>
</span>
                                    </div>
                                                                        <?php if ((isset($_smarty_tpl->tpl_vars['Artikel']->value->SieSparenX)) && $_smarty_tpl->tpl_vars['Artikel']->value->SieSparenX->anzeigen == 1 && $_smarty_tpl->tpl_vars['Artikel']->value->SieSparenX->nProzent > 0 && !$_smarty_tpl->tpl_vars['NettoPreise']->value && $_smarty_tpl->tpl_vars['Artikel']->value->taxData['tax'] > 0) {?>
                                        <div class="yousave">(<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'youSave','section'=>'productDetails'),$_smarty_tpl ) );?>

                                            <span class="percent"><?php echo $_smarty_tpl->tpl_vars['Artikel']->value->SieSparenX->nProzent;?>
%</span>, <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'thatIs','section'=>'productDetails'),$_smarty_tpl ) );?>

                                            <span class="value text-nowrap-util"><?php echo $_smarty_tpl->tpl_vars['Artikel']->value->SieSparenX->cLocalizedSparbetrag;?>
</span>)
                                        </div>
                                    <?php }?>
                                <?php
}
}
/* {/block 'productdetails-price-uvp'} */
/* {block 'productdetails-price-detail-bulk-price-head'} */
class Block_7693976476790f97f6244f2_12563791 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                    <tr>
                                                        <th>
                                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'fromDifferential','section'=>'productOverview'),$_smarty_tpl ) );?>

                                                        </th>
                                                        <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'pricePerUnit','section'=>'productDetails'),$_smarty_tpl ) );
if ($_smarty_tpl->tpl_vars['Artikel']->value->cEinheit) {?> / <?php echo $_smarty_tpl->tpl_vars['Artikel']->value->cEinheit;
}?>
                                                            <?php if ((isset($_smarty_tpl->tpl_vars['Artikel']->value->cMasseinheitName)) && (isset($_smarty_tpl->tpl_vars['Artikel']->value->fMassMenge)) && $_smarty_tpl->tpl_vars['Artikel']->value->fMassMenge > 0 && $_smarty_tpl->tpl_vars['Artikel']->value->cTeilbar !== 'Y' && ($_smarty_tpl->tpl_vars['Artikel']->value->fAbnahmeintervall == 0 || $_smarty_tpl->tpl_vars['Artikel']->value->fAbnahmeintervall == 1) && (isset($_smarty_tpl->tpl_vars['Artikel']->value->cMassMenge))) {?>
                                                                (<?php echo $_smarty_tpl->tpl_vars['Artikel']->value->cMassMenge;?>
 <?php echo $_smarty_tpl->tpl_vars['Artikel']->value->cMasseinheitName;?>
)
                                                            <?php }?>
                                                        </th>
                                                        <?php if (!empty($_smarty_tpl->tpl_vars['Artikel']->value->staffelPreis_arr[0]['cBasePriceLocalized'])) {?>
                                                        <th>
                                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'basePrice'),$_smarty_tpl ) );?>

                                                        </th>
                                                        <?php }?>
                                                    </tr>
                                                <?php
}
}
/* {/block 'productdetails-price-detail-bulk-price-head'} */
/* {block 'productdetails-price-detail-bulk-price-body'} */
class Block_10009186536790f97f629fc4_83285713 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Artikel']->value->staffelPreis_arr, 'bulkPrice');
$_smarty_tpl->tpl_vars['bulkPrice']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['bulkPrice']->value) {
$_smarty_tpl->tpl_vars['bulkPrice']->do_else = false;
?>
                                                        <?php if ($_smarty_tpl->tpl_vars['bulkPrice']->value['nAnzahl'] > 0) {?>
                                                            <tr class="bulk-price-<?php echo $_smarty_tpl->tpl_vars['bulkPrice']->value['nAnzahl'];?>
">
                                                                <td><?php echo $_smarty_tpl->tpl_vars['bulkPrice']->value['nAnzahl'];?>
</td>
                                                                <td>
                                                                    <span class="bulk-price"><?php echo $_smarty_tpl->tpl_vars['bulkPrice']->value['cPreisLocalized'][$_smarty_tpl->tpl_vars['NettoPreise']->value];?>
</span><span class="footnote-reference">*</span>
                                                                </td>
                                                                <?php if (!empty($_smarty_tpl->tpl_vars['bulkPrice']->value['cBasePriceLocalized'])) {?>
                                                                    <td class="bulk-base-price">
                                                                        <?php echo $_smarty_tpl->tpl_vars['bulkPrice']->value['cBasePriceLocalized'][$_smarty_tpl->tpl_vars['NettoPreise']->value];?>

                                                                    </td>
                                                                <?php }?>
                                                            </tr>
                                                        <?php }?>
                                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                <?php
}
}
/* {/block 'productdetails-price-detail-bulk-price-body'} */
/* {block 'productdetails-price-detail-bulk-price'} */
class Block_8647587426790f97f6241c0_24526245 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <div class="bulk-prices">
                                        <table class="table table-sm table-hover">
                                            <thead>
                                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7693976476790f97f6244f2_12563791', 'productdetails-price-detail-bulk-price-head', $this->tplIndex);
?>

                                            </thead>
                                            <tbody>
                                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10009186536790f97f629fc4_83285713', 'productdetails-price-detail-bulk-price-body', $this->tplIndex);
?>

                                            </tbody>
                                        </table>
                                    </div>                                <?php
}
}
/* {/block 'productdetails-price-detail-bulk-price'} */
/* {block 'productdetails-price-detail'} */
class Block_5558632616790f97f607299_45574705 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <div class="price-note">
                            <?php if ($_smarty_tpl->tpl_vars['Artikel']->value->cEinheit && ($_smarty_tpl->tpl_vars['Artikel']->value->fMindestbestellmenge > 1 || $_smarty_tpl->tpl_vars['Artikel']->value->fAbnahmeintervall > 1)) {?>
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21358537646790f97f608664_08961488', 'productdetails-price-label-per-unit', $this->tplIndex);
?>

                            <?php }?>

                                                        <?php if (!empty($_smarty_tpl->tpl_vars['Artikel']->value->cLocalizedVPE)) {?>
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1669053126790f97f609de8_29834407', 'productdetails-price-detail-base-price', $this->tplIndex);
?>

                            <?php }?>

                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8952170066790f97f60fcd4_78531051', 'productdetails-price-detail-vat-info', $this->tplIndex);
?>


                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10796856196790f97f610b78_15766220', 'productdetails-price-min-value-info', $this->tplIndex);
?>


                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20449057886790f97f617ec3_82187401', 'productdetails-price-special-prices-detail', $this->tplIndex);
?>


                        <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['artikeldetails_uvp_anzeigen'] === 'Y' && $_smarty_tpl->tpl_vars['Artikel']->value->fUVP > 0 && $_smarty_tpl->tpl_vars['Artikel']->value->Preise->fVKBrutto < $_smarty_tpl->tpl_vars['Artikel']->value->fUVP) {?>
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13243763926790f97f61f681_70084895', 'productdetails-price-uvp', $this->tplIndex);
?>

                            <?php }?>

                                                        <?php if (!empty($_smarty_tpl->tpl_vars['Artikel']->value->staffelPreis_arr)) {?>
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8647587426790f97f6241c0_24526245', 'productdetails-price-detail-bulk-price', $this->tplIndex);
?>

                            <?php }?>
                        </div>                    <?php
}
}
/* {/block 'productdetails-price-detail'} */
/* {block 'productdetails-price-list-base-price'} */
class Block_9155286816790f97f62f4e5_55813909 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OSPanel\\domains\\JTL_shop\\includes\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.regex_replace.php','function'=>'smarty_modifier_regex_replace',),));
?>

                                <div class="base_price" itemprop="priceSpecification" itemscope itemtype="https://schema.org/UnitPriceSpecification">
                                    <meta itemprop="price" content="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'string_format' ][ 0 ], array( (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'formatForMicrodata' ][ 0 ], array( $_smarty_tpl->tpl_vars['Artikel']->value->Preise->oPriceRange->getMinLocalized($_smarty_tpl->tpl_vars['NettoPreise']->value) ))/$_smarty_tpl->tpl_vars['Artikel']->value->fVPEWert),"%.2f" ));?>
">
                                    <meta itemprop="priceCurrency" content="<?php echo JTL\Session\Frontend::getCurrency()->getName();?>
">
                                    <span class="value" itemprop="referenceQuantity" itemscope itemtype="https://schema.org/QuantitativeValue">
                                        <?php echo $_smarty_tpl->tpl_vars['Artikel']->value->cLocalizedVPE[$_smarty_tpl->tpl_vars['NettoPreise']->value];?>

                                        <?php if (($_smarty_tpl->tpl_vars['Artikel']->value->Preise->oPriceRange->isRange() === true) && !(!empty($_smarty_tpl->tpl_vars['hasOnlyListableVariations']->value) && empty($_smarty_tpl->tpl_vars['Artikel']->value->FunktionsAttribute[\FKT_ATTRIBUT_NO_GAL_VAR_PREVIEW]))) {?>
                                            <br>
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('section'=>'productOverview','key'=>'moreVariationsAvailable'),$_smarty_tpl ) );?>

                                        <?php }?>
                                        <meta itemprop="value" content="<?php echo $_smarty_tpl->tpl_vars['Artikel']->value->fGrundpreisMenge;?>
">
                                        <meta itemprop="unitText" content="<?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['Artikel']->value->cVPEEinheit,"/[\d ]/",'');?>
">
                                    </span>
                                </div>
                            <?php
}
}
/* {/block 'productdetails-price-list-base-price'} */
/* {block 'productdetails-price-special-prices'} */
class Block_20072376156790f97f634d49_58774832 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php if ($_smarty_tpl->tpl_vars['Artikel']->value->Preise->Sonderpreis_aktiv && (isset($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeluebersicht'])) && $_smarty_tpl->tpl_vars['Einstellungen']->value['artikeluebersicht']['artikeluebersicht_sonderpreisanzeige'] == 2) {?>
                                <div class="instead-of old-price">
                                    <small class="text-muted-util">
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'oldPrice'),$_smarty_tpl ) );?>
:
                                        <del class="value"><?php echo $_smarty_tpl->tpl_vars['Artikel']->value->Preise->alterVKLocalized[$_smarty_tpl->tpl_vars['NettoPreise']->value];?>
</del>
                                    </small>
                                </div>
                            <?php } elseif (!$_smarty_tpl->tpl_vars['Artikel']->value->Preise->Sonderpreis_aktiv && $_smarty_tpl->tpl_vars['Artikel']->value->Preise->rabatt > 0 && (isset($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeluebersicht']))) {?>
                                <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeluebersicht']['artikeluebersicht_rabattanzeige'] == 3 || $_smarty_tpl->tpl_vars['Einstellungen']->value['artikeluebersicht']['artikeluebersicht_rabattanzeige'] == 4) {?>
                                    <div class="old-price">
                                        <small class="text-muted-util">
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'oldPrice'),$_smarty_tpl ) );?>
:
                                            <del class="value text-nowrap-util"><?php echo $_smarty_tpl->tpl_vars['Artikel']->value->Preise->alterVKLocalized[$_smarty_tpl->tpl_vars['NettoPreise']->value];?>
</del>
                                        </small>
                                    </div>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeluebersicht']['artikeluebersicht_rabattanzeige'] == 2 || (isset($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeluebersicht'])) && $_smarty_tpl->tpl_vars['Einstellungen']->value['artikeluebersicht']['artikeluebersicht_rabattanzeige'] == 4) {?>
                                    <div class="discount">
                                        <small class="text-muted-util">
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'discount'),$_smarty_tpl ) );?>
:
                                            <span class="value text-nowrap-util"><?php echo $_smarty_tpl->tpl_vars['Artikel']->value->Preise->rabatt;?>
%</span>
                                        </small>
                                    </div>
                                <?php }?>
                            <?php }?>
                        <?php
}
}
/* {/block 'productdetails-price-special-prices'} */
/* {block 'productdetails-price-price-note'} */
class Block_6773880006790f97f62e3a6_76401550 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <div class="price-note">
                                                <?php if (!empty($_smarty_tpl->tpl_vars['Artikel']->value->cLocalizedVPE)) {?>
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9155286816790f97f62f4e5_55813909', 'productdetails-price-list-base-price', $this->tplIndex);
?>

                        <?php }?>
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20072376156790f97f634d49_58774832', 'productdetails-price-special-prices', $this->tplIndex);
?>

                    </div>
                    <?php
}
}
/* {/block 'productdetails-price-price-note'} */
/* {block 'productdetails-price-wrapper'} */
class Block_8213858336790f97f5e32f1_97152043 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php if ($_smarty_tpl->tpl_vars['Artikel']->value->getOption('nShowOnlyOnSEORequest',0) === 1) {?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14403272466790f97f5e3f53_13412639', 'productdetails-price-out-of-stock', $this->tplIndex);
?>

            <?php } elseif ($_smarty_tpl->tpl_vars['Artikel']->value->Preise->fVKNetto == 0 && $_smarty_tpl->tpl_vars['Artikel']->value->bHasKonfig) {?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2923795946790f97f5f15b5_37476710', 'productdetails-price-as-configured', $this->tplIndex);
?>

            <?php } elseif ($_smarty_tpl->tpl_vars['Artikel']->value->Preise->fVKNetto == 0 && $_smarty_tpl->tpl_vars['Einstellungen']->value['global']['global_preis0'] === 'N') {?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8248177866790f97f5f2c79_57502178', 'productdetails-price-on-application', $this->tplIndex);
?>

            <?php } else { ?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21187798936790f97f5f3605_26300392', 'productdetails-price-label', $this->tplIndex);
?>

                <div class="price <?php if ((($tmp = $_smarty_tpl->tpl_vars['priceLarge']->value ?? null)===null||$tmp==='' ? false : $tmp)) {?>h1<?php } else { ?>productbox-price<?php }?> <?php if ((isset($_smarty_tpl->tpl_vars['Artikel']->value->Preise->Sonderpreis_aktiv)) && $_smarty_tpl->tpl_vars['Artikel']->value->Preise->Sonderpreis_aktiv) {?> special-price<?php }?>">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16874122406790f97f5f8d95_67589901', 'productdetails-range', $this->tplIndex);
?>

                </div>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20283183716790f97f601466_73266590', 'productdetails-price-snippets', $this->tplIndex);
?>

                <?php if ($_smarty_tpl->tpl_vars['tplscope']->value === 'detail') {?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5558632616790f97f607299_45574705', 'productdetails-price-detail', $this->tplIndex);
?>

                <?php } else { ?>                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6773880006790f97f62e3a6_76401550', 'productdetails-price-price-note', $this->tplIndex);
?>

                <?php }?>
            <?php }?>
            <?php
}
}
/* {/block 'productdetails-price-wrapper'} */
/* {block 'price-invisible'} */
class Block_7324164826790f97f63bf69_99072995 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <span class="price_label price_invisible"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'priceHidden'),$_smarty_tpl ) );?>
</span>
        <?php
}
}
/* {/block 'price-invisible'} */
/* {block 'productdetails-price'} */
class Block_20846360486790f97f5e1c38_48690322 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'productdetails-price' => 
  array (
    0 => 'Block_20846360486790f97f5e1c38_48690322',
  ),
  'productdetails-price-wrapper' => 
  array (
    0 => 'Block_8213858336790f97f5e32f1_97152043',
  ),
  'productdetails-price-out-of-stock' => 
  array (
    0 => 'Block_14403272466790f97f5e3f53_13412639',
  ),
  'productdetails-price-out-of-stock-microdata' => 
  array (
    0 => 'Block_20970579886790f97f5e46d1_53766587',
  ),
  'productdetails-price-as-configured' => 
  array (
    0 => 'Block_2923795946790f97f5f15b5_37476710',
  ),
  'productdetails-price-on-application' => 
  array (
    0 => 'Block_8248177866790f97f5f2c79_57502178',
  ),
  'productdetails-price-label' => 
  array (
    0 => 'Block_21187798936790f97f5f3605_26300392',
  ),
  'productdetails-range' => 
  array (
    0 => 'Block_16874122406790f97f5f8d95_67589901',
  ),
  'productdetails-price-snippets' => 
  array (
    0 => 'Block_20283183716790f97f601466_73266590',
  ),
  'productdetails-price-detail' => 
  array (
    0 => 'Block_5558632616790f97f607299_45574705',
  ),
  'productdetails-price-label-per-unit' => 
  array (
    0 => 'Block_21358537646790f97f608664_08961488',
  ),
  'productdetails-price-detail-base-price' => 
  array (
    0 => 'Block_1669053126790f97f609de8_29834407',
  ),
  'productdetails-price-detail-vat-info' => 
  array (
    0 => 'Block_8952170066790f97f60fcd4_78531051',
  ),
  'productdetails-price-min-value-info' => 
  array (
    0 => 'Block_10796856196790f97f610b78_15766220',
  ),
  'productdetails-price-special-prices-detail' => 
  array (
    0 => 'Block_20449057886790f97f617ec3_82187401',
  ),
  'productdetails-price-uvp' => 
  array (
    0 => 'Block_13243763926790f97f61f681_70084895',
  ),
  'productdetails-price-detail-bulk-price' => 
  array (
    0 => 'Block_8647587426790f97f6241c0_24526245',
  ),
  'productdetails-price-detail-bulk-price-head' => 
  array (
    0 => 'Block_7693976476790f97f6244f2_12563791',
  ),
  'productdetails-price-detail-bulk-price-body' => 
  array (
    0 => 'Block_10009186536790f97f629fc4_83285713',
  ),
  'productdetails-price-price-note' => 
  array (
    0 => 'Block_6773880006790f97f62e3a6_76401550',
  ),
  'productdetails-price-list-base-price' => 
  array (
    0 => 'Block_9155286816790f97f62f4e5_55813909',
  ),
  'productdetails-price-special-prices' => 
  array (
    0 => 'Block_20072376156790f97f634d49_58774832',
  ),
  'price-invisible' => 
  array (
    0 => 'Block_7324164826790f97f63bf69_99072995',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['Artikel']->value->Preise !== null && $_SESSION['Kundengruppe']->mayViewPrices()) {?>
        <div class="price_wrapper">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8213858336790f97f5e32f1_97152043', 'productdetails-price-wrapper', $this->tplIndex);
?>

        </div>
    <?php } else { ?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7324164826790f97f63bf69_99072995', 'price-invisible', $this->tplIndex);
?>

    <?php }
}
}
/* {/block 'productdetails-price'} */
}

<?php
/* Smarty version 4.3.1, created on 2025-01-22 14:58:21
  from 'C:\OSPanel\domains\JTL_shop\templates\NOVA\snippets\image.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6790f97dd81eb3_61087125',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '29ceb915d7dc2d68547b5dd0a5c0e604233c3f3e' => 
    array (
      0 => 'C:\\OSPanel\\domains\\JTL_shop\\templates\\NOVA\\snippets\\image.tpl',
      1 => 1694613031,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6790f97dd81eb3_61087125 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_359494626790f97dd3dd11_54411038', 'snippets-image');
?>

<?php }
/* {block 'snippets-image-variables'} */
class Block_21381166906790f97dd3f541_06651196 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_assignInScope('square', (($tmp = $_smarty_tpl->tpl_vars['square']->value ?? null)===null||$tmp==='' ? true : $tmp));?>
        <?php $_smarty_tpl->_assignInScope('fluid', (($tmp = $_smarty_tpl->tpl_vars['fluid']->value ?? null)===null||$tmp==='' ? true : $tmp));?>
        <?php $_smarty_tpl->_assignInScope('lazy', (($tmp = $_smarty_tpl->tpl_vars['lazy']->value ?? null)===null||$tmp==='' ? true : $tmp));?>
        <?php $_smarty_tpl->_assignInScope('webp', (($tmp = $_smarty_tpl->tpl_vars['webp']->value ?? null)===null||$tmp==='' ? true : $tmp));?>
        <?php $_smarty_tpl->_assignInScope('sizes', (($tmp = $_smarty_tpl->tpl_vars['sizes']->value ?? null)===null||$tmp==='' ? '100vw' : $tmp));?>
        <?php $_smarty_tpl->_assignInScope('class', (($tmp = $_smarty_tpl->tpl_vars['class']->value ?? null)===null||$tmp==='' ? '' : $tmp));?>
        <?php $_smarty_tpl->_assignInScope('squareClass', (($tmp = $_smarty_tpl->tpl_vars['squareClass']->value ?? null)===null||$tmp==='' ? '' : $tmp));?>
        <?php $_smarty_tpl->_assignInScope('srcSize', (($tmp = $_smarty_tpl->tpl_vars['srcSize']->value ?? null)===null||$tmp==='' ? 'md' : $tmp));?>
        <?php $_smarty_tpl->_assignInScope('center', (($tmp = $_smarty_tpl->tpl_vars['center']->value ?? null)===null||$tmp==='' ? false : $tmp));?>

        <?php if ($_smarty_tpl->tpl_vars['srcSize']->value === 'xs') {?>
            <?php $_smarty_tpl->_assignInScope('srcSize', \JTL\Media\Image::SIZE_XS);?>
        <?php } elseif ($_smarty_tpl->tpl_vars['srcSize']->value === 'sm') {?>
            <?php $_smarty_tpl->_assignInScope('srcSize', \JTL\Media\Image::SIZE_SM);?>
        <?php } elseif ($_smarty_tpl->tpl_vars['srcSize']->value === 'md') {?>
            <?php $_smarty_tpl->_assignInScope('srcSize', \JTL\Media\Image::SIZE_MD);?>
        <?php } else { ?>
            <?php $_smarty_tpl->_assignInScope('srcSize', \JTL\Media\Image::SIZE_LG);?>
        <?php }?>

        <?php $_smarty_tpl->_assignInScope('imageType', $_smarty_tpl->tpl_vars['item']->value->getImageType());?>
        <?php $_smarty_tpl->_assignInScope('mini', $_smarty_tpl->tpl_vars['item']->value->getImageWidth('xs'));?>
        <?php $_smarty_tpl->_assignInScope('klein', $_smarty_tpl->tpl_vars['item']->value->getImageWidth('sm'));?>
        <?php $_smarty_tpl->_assignInScope('normal', $_smarty_tpl->tpl_vars['item']->value->getImageWidth('md'));?>
        <?php $_smarty_tpl->_assignInScope('gross', $_smarty_tpl->tpl_vars['item']->value->getImageWidth('lg'));?>
        <?php $_smarty_tpl->_assignInScope('width', (($tmp = $_smarty_tpl->tpl_vars['width']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['item']->value->getImageWidth('lg') : $tmp));?>
        <?php $_smarty_tpl->_assignInScope('height', (($tmp = $_smarty_tpl->tpl_vars['height']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['item']->value->getImageHeight('lg') : $tmp));?>

        <?php if ($_smarty_tpl->tpl_vars['imageType']->value === \JTL\Media\Image::TYPE_CHARACTERISTIC_VALUE) {?>
            <?php $_smarty_tpl->_assignInScope('mini', (($tmp = $_smarty_tpl->tpl_vars['mini']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['Einstellungen']->value['bilder']['bilder_merkmalwert_mini_breite'] : $tmp));?>
            <?php $_smarty_tpl->_assignInScope('klein', (($tmp = $_smarty_tpl->tpl_vars['klein']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['Einstellungen']->value['bilder']['bilder_merkmalwert_klein_breite'] : $tmp));?>
            <?php $_smarty_tpl->_assignInScope('normal', (($tmp = $_smarty_tpl->tpl_vars['normal']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['Einstellungen']->value['bilder']['bilder_merkmalwert_normal_breite'] : $tmp));?>
            <?php $_smarty_tpl->_assignInScope('gross', (($tmp = $_smarty_tpl->tpl_vars['gross']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['Einstellungen']->value['bilder']['bilder_merkmalwert_gross_breite'] : $tmp));?>
            <?php $_smarty_tpl->_assignInScope('width', (($tmp = $_smarty_tpl->tpl_vars['width']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['Einstellungen']->value['bilder']['bilder_merkmalwert_gross_breite'] : $tmp));?>
            <?php $_smarty_tpl->_assignInScope('height', (($tmp = $_smarty_tpl->tpl_vars['height']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['Einstellungen']->value['bilder']['bilder_merkmalwert_gross_hoehe'] : $tmp));?>
            <?php $_smarty_tpl->_assignInScope('alt', (($tmp = $_smarty_tpl->tpl_vars['alt']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['item']->value->getValue() : $tmp));?>
        <?php } elseif ($_smarty_tpl->tpl_vars['imageType']->value === \JTL\Media\Image::TYPE_CHARACTERISTIC) {?>
            <?php $_smarty_tpl->_assignInScope('mini', (($tmp = $_smarty_tpl->tpl_vars['mini']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['Einstellungen']->value['bilder']['bilder_merkmal_mini_breite'] : $tmp));?>
            <?php $_smarty_tpl->_assignInScope('klein', (($tmp = $_smarty_tpl->tpl_vars['klein']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['Einstellungen']->value['bilder']['bilder_merkmal_klein_breite'] : $tmp));?>
            <?php $_smarty_tpl->_assignInScope('normal', (($tmp = $_smarty_tpl->tpl_vars['normal']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['Einstellungen']->value['bilder']['bilder_merkmal_normal_breite'] : $tmp));?>
            <?php $_smarty_tpl->_assignInScope('gross', (($tmp = $_smarty_tpl->tpl_vars['gross']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['Einstellungen']->value['bilder']['bilder_merkmal_gross_breite'] : $tmp));?>
            <?php $_smarty_tpl->_assignInScope('width', (($tmp = $_smarty_tpl->tpl_vars['width']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['Einstellungen']->value['bilder']['bilder_merkmal_gross_breite'] : $tmp));?>
            <?php $_smarty_tpl->_assignInScope('height', (($tmp = $_smarty_tpl->tpl_vars['height']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['Einstellungen']->value['bilder']['bilder_merkmal_gross_hoehe'] : $tmp));?>
            <?php $_smarty_tpl->_assignInScope('alt', (($tmp = $_smarty_tpl->tpl_vars['alt']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['item']->value->getName() : $tmp));?>
        <?php } elseif ($_smarty_tpl->tpl_vars['imageType']->value === \JTL\Media\Image::TYPE_PRODUCT) {?>
            <?php $_smarty_tpl->_assignInScope('mini', $_smarty_tpl->tpl_vars['item']->value->Bilder[0]->imageSizes->xs->size->width);?>
            <?php $_smarty_tpl->_assignInScope('klein', $_smarty_tpl->tpl_vars['item']->value->Bilder[0]->imageSizes->sm->size->width);?>
            <?php $_smarty_tpl->_assignInScope('normal', $_smarty_tpl->tpl_vars['item']->value->Bilder[0]->imageSizes->md->size->width);?>
            <?php $_smarty_tpl->_assignInScope('gross', $_smarty_tpl->tpl_vars['item']->value->Bilder[0]->imageSizes->lg->size->width);?>
            <?php $_smarty_tpl->_assignInScope('width', (($tmp = $_smarty_tpl->tpl_vars['width']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['Einstellungen']->value['bilder']['bilder_artikel_gross_breite'] : $tmp));?>
            <?php $_smarty_tpl->_assignInScope('height', (($tmp = $_smarty_tpl->tpl_vars['height']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['Einstellungen']->value['bilder']['bilder_artikel_gross_hoehe'] : $tmp));?>
            <?php if ((isset($_smarty_tpl->tpl_vars['item']->value->Bilder[0]->cAltAttribut))) {?>
                <?php $_smarty_tpl->_assignInScope('alt', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['item']->value->Bilder[0]->cAltAttribut,60 )));?>
            <?php } else { ?>
                <?php $_smarty_tpl->_assignInScope('alt', (($tmp = $_smarty_tpl->tpl_vars['item']->value->cName ?? null)===null||$tmp==='' ? '' : $tmp));?>
            <?php }?>
        <?php } elseif ($_smarty_tpl->tpl_vars['imageType']->value === \JTL\Media\Image::TYPE_VARIATION) {?>
            <?php $_smarty_tpl->_assignInScope('mini', (($tmp = $_smarty_tpl->tpl_vars['mini']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['Einstellungen']->value['bilder']['bilder_variationen_mini_breite'] : $tmp));?>
            <?php $_smarty_tpl->_assignInScope('klein', (($tmp = $_smarty_tpl->tpl_vars['klein']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['Einstellungen']->value['bilder']['bilder_variationen_klein_breite'] : $tmp));?>
            <?php $_smarty_tpl->_assignInScope('normal', (($tmp = $_smarty_tpl->tpl_vars['normal']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['Einstellungen']->value['bilder']['bilder_variationen_breite'] : $tmp));?>
            <?php $_smarty_tpl->_assignInScope('gross', (($tmp = $_smarty_tpl->tpl_vars['gross']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['Einstellungen']->value['bilder']['bilder_variationen_gross_breite'] : $tmp));?>
            <?php $_smarty_tpl->_assignInScope('width', (($tmp = $_smarty_tpl->tpl_vars['width']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['Einstellungen']->value['bilder']['bilder_variationen_gross_breite'] : $tmp));?>
            <?php $_smarty_tpl->_assignInScope('height', (($tmp = $_smarty_tpl->tpl_vars['height']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['Einstellungen']->value['bilder']['bilder_variationen_gross_hoehe'] : $tmp));?>
            <?php $_smarty_tpl->_assignInScope('alt', (($tmp = $_smarty_tpl->tpl_vars['alt']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['item']->value->cName : $tmp));?>
        <?php } elseif ($_smarty_tpl->tpl_vars['imageType']->value === \JTL\Media\Image::TYPE_NEWS) {?>
            <?php $_smarty_tpl->_assignInScope('mini', (($tmp = $_smarty_tpl->tpl_vars['mini']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['Einstellungen']->value['bilder']['bilder_news_mini_breite'] : $tmp));?>
            <?php $_smarty_tpl->_assignInScope('klein', (($tmp = $_smarty_tpl->tpl_vars['klein']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['Einstellungen']->value['bilder']['bilder_news_klein_breite'] : $tmp));?>
            <?php $_smarty_tpl->_assignInScope('normal', (($tmp = $_smarty_tpl->tpl_vars['normal']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['Einstellungen']->value['bilder']['bilder_news_normal_breite'] : $tmp));?>
            <?php $_smarty_tpl->_assignInScope('gross', (($tmp = $_smarty_tpl->tpl_vars['gross']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['Einstellungen']->value['bilder']['bilder_news_gross_breite'] : $tmp));?>
            <?php $_smarty_tpl->_assignInScope('width', (($tmp = $_smarty_tpl->tpl_vars['width']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['Einstellungen']->value['bilder']['bilder_news_gross_breite'] : $tmp));?>
            <?php $_smarty_tpl->_assignInScope('height', (($tmp = $_smarty_tpl->tpl_vars['height']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['Einstellungen']->value['bilder']['bilder_news_gross_hoehe'] : $tmp));?>
        <?php } elseif ($_smarty_tpl->tpl_vars['imageType']->value === \JTL\Media\Image::TYPE_NEWSCATEGORY) {?>
            <?php $_smarty_tpl->_assignInScope('mini', (($tmp = $_smarty_tpl->tpl_vars['mini']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['Einstellungen']->value['bilder']['bilder_newskategorie_mini_breite'] : $tmp));?>
            <?php $_smarty_tpl->_assignInScope('klein', (($tmp = $_smarty_tpl->tpl_vars['klein']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['Einstellungen']->value['bilder']['bilder_newskategorie_klein_breite'] : $tmp));?>
            <?php $_smarty_tpl->_assignInScope('normal', (($tmp = $_smarty_tpl->tpl_vars['normal']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['Einstellungen']->value['bilder']['bilder_newskategorie_normal_breite'] : $tmp));?>
            <?php $_smarty_tpl->_assignInScope('gross', (($tmp = $_smarty_tpl->tpl_vars['gross']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['Einstellungen']->value['bilder']['bilder_newskategorie_gross_breite'] : $tmp));?>
            <?php $_smarty_tpl->_assignInScope('width', (($tmp = $_smarty_tpl->tpl_vars['width']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['Einstellungen']->value['bilder']['bilder_newskategorie_gross_breite'] : $tmp));?>
            <?php $_smarty_tpl->_assignInScope('height', (($tmp = $_smarty_tpl->tpl_vars['height']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['Einstellungen']->value['bilder']['bilder_newskategorie_gross_hoehe'] : $tmp));?>
            <?php $_smarty_tpl->_assignInScope('alt', (($tmp = $_smarty_tpl->tpl_vars['alt']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['item']->value->getName() : $tmp));?>
        <?php } elseif ($_smarty_tpl->tpl_vars['imageType']->value === \JTL\Media\Image::TYPE_CONFIGGROUP) {?>
            <?php $_smarty_tpl->_assignInScope('mini', (($tmp = $_smarty_tpl->tpl_vars['mini']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['Einstellungen']->value['bilder']['bilder_konfiggruppe_mini_breite'] : $tmp));?>
            <?php $_smarty_tpl->_assignInScope('klein', (($tmp = $_smarty_tpl->tpl_vars['klein']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['Einstellungen']->value['bilder']['bilder_konfiggruppe_klein_breite'] : $tmp));?>
            <?php $_smarty_tpl->_assignInScope('normal', (($tmp = $_smarty_tpl->tpl_vars['normal']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['Einstellungen']->value['bilder']['bilder_konfiggruppe_normal_breite'] : $tmp));?>
            <?php $_smarty_tpl->_assignInScope('gross', (($tmp = $_smarty_tpl->tpl_vars['gross']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['Einstellungen']->value['bilder']['bilder_konfiggruppe_gross_breite'] : $tmp));?>
            <?php $_smarty_tpl->_assignInScope('width', (($tmp = $_smarty_tpl->tpl_vars['width']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['Einstellungen']->value['bilder']['bilder_konfiggruppe_gross_breite'] : $tmp));?>
            <?php $_smarty_tpl->_assignInScope('height', (($tmp = $_smarty_tpl->tpl_vars['height']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['Einstellungen']->value['bilder']['bilder_konfiggruppe_gross_hoehe'] : $tmp));?>
            <?php $_smarty_tpl->_assignInScope('alt', (($tmp = $_smarty_tpl->tpl_vars['alt']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['item']->value->getSprache()->getName() : $tmp));?>
        <?php } elseif ($_smarty_tpl->tpl_vars['imageType']->value === \JTL\Media\Image::TYPE_MANUFACTURER) {?>
            <?php $_smarty_tpl->_assignInScope('mini', (($tmp = $_smarty_tpl->tpl_vars['mini']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['Einstellungen']->value['bilder']['bilder_hersteller_mini_breite'] : $tmp));?>
            <?php $_smarty_tpl->_assignInScope('klein', (($tmp = $_smarty_tpl->tpl_vars['klein']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['Einstellungen']->value['bilder']['bilder_hersteller_klein_breite'] : $tmp));?>
            <?php $_smarty_tpl->_assignInScope('normal', (($tmp = $_smarty_tpl->tpl_vars['normal']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['Einstellungen']->value['bilder']['bilder_hersteller_normal_breite'] : $tmp));?>
            <?php $_smarty_tpl->_assignInScope('gross', (($tmp = $_smarty_tpl->tpl_vars['gross']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['Einstellungen']->value['bilder']['bilder_hersteller_gross_breite'] : $tmp));?>
            <?php $_smarty_tpl->_assignInScope('width', (($tmp = $_smarty_tpl->tpl_vars['width']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['Einstellungen']->value['bilder']['bilder_hersteller_gross_breite'] : $tmp));?>
            <?php $_smarty_tpl->_assignInScope('height', (($tmp = $_smarty_tpl->tpl_vars['height']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['Einstellungen']->value['bilder']['bilder_hersteller_gross_hoehe'] : $tmp));?>
            <?php $_smarty_tpl->_assignInScope('alt', (($tmp = $_smarty_tpl->tpl_vars['alt']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['item']->value->getName() : $tmp));?>
        <?php } else { ?>
            <?php $_smarty_tpl->_assignInScope('mini', (($tmp = $_smarty_tpl->tpl_vars['mini']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['Einstellungen']->value['bilder']['bilder_kategorien_mini_breite'] : $tmp));?>
            <?php $_smarty_tpl->_assignInScope('klein', (($tmp = $_smarty_tpl->tpl_vars['klein']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['Einstellungen']->value['bilder']['bilder_kategorien_klein_breite'] : $tmp));?>
            <?php $_smarty_tpl->_assignInScope('normal', (($tmp = $_smarty_tpl->tpl_vars['normal']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['Einstellungen']->value['bilder']['bilder_kategorien_breite'] : $tmp));?>
            <?php $_smarty_tpl->_assignInScope('gross', (($tmp = $_smarty_tpl->tpl_vars['gross']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['Einstellungen']->value['bilder']['bilder_kategorien_gross_breite'] : $tmp));?>
            <?php $_smarty_tpl->_assignInScope('width', (($tmp = $_smarty_tpl->tpl_vars['width']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['Einstellungen']->value['bilder']['bilder_kategorien_gross_breite'] : $tmp));?>
            <?php $_smarty_tpl->_assignInScope('height', (($tmp = $_smarty_tpl->tpl_vars['height']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['Einstellungen']->value['bilder']['bilder_kategorien_gross_hoehe'] : $tmp));?>
            <?php $_smarty_tpl->_assignInScope('alt', (($tmp = $_smarty_tpl->tpl_vars['alt']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['item']->value->getName() : $tmp));?>
        <?php }?>
        <?php $_smarty_tpl->_assignInScope('alt', (($tmp = $_smarty_tpl->tpl_vars['alt']->value ?? null)===null||$tmp==='' ? '' : $tmp));?>
    <?php
}
}
/* {/block 'snippets-image-variables'} */
/* {block 'snippets-image-main-image'} */
class Block_10042169316790f97dd79717_93834589 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php if ($_smarty_tpl->tpl_vars['imageType']->value === \JTL\Media\Image::TYPE_PRODUCT || $_smarty_tpl->tpl_vars['imageType']->value === \JTL\Media\Image::TYPE_VARIATION) {?>
                    <?php $_smarty_tpl->_assignInScope('alt', preg_replace("%(?<!\\\\)'%", "\'", (string)preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['alt']->value ?: '')));?>
                <?php } else { ?>
                    <?php $_smarty_tpl->_assignInScope('alt', htmlspecialchars((string)preg_replace("%(?<!\\\\)'%", "\'", (string)preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['alt']->value ?: '')), ENT_QUOTES, 'utf-8', true));?>
                <?php }?>
                <?php if (strpos($_smarty_tpl->tpl_vars['item']->value->getImage($_smarty_tpl->tpl_vars['srcSize']->value),'keinBild.gif') !== false) {?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0], array( array('fluid'=>$_smarty_tpl->tpl_vars['fluid']->value,'lazy'=>$_smarty_tpl->tpl_vars['lazy']->value,'webp'=>$_smarty_tpl->tpl_vars['webp']->value,'center'=>$_smarty_tpl->tpl_vars['center']->value,'src'=>$_smarty_tpl->tpl_vars['item']->value->getImage($_smarty_tpl->tpl_vars['srcSize']->value),'alt'=>$_smarty_tpl->tpl_vars['alt']->value,'width'=>130,'height'=>130,'class'=>$_smarty_tpl->tpl_vars['class']->value),$_smarty_tpl ) );?>

                <?php } else { ?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0], array( array('fluid'=>$_smarty_tpl->tpl_vars['fluid']->value,'lazy'=>$_smarty_tpl->tpl_vars['lazy']->value,'webp'=>$_smarty_tpl->tpl_vars['webp']->value,'center'=>$_smarty_tpl->tpl_vars['center']->value,'src'=>$_smarty_tpl->tpl_vars['item']->value->getImage($_smarty_tpl->tpl_vars['srcSize']->value),'srcset'=>((string)$_smarty_tpl->tpl_vars['item']->value->getImage(\JTL\Media\Image::SIZE_XS))." ".((string)$_smarty_tpl->tpl_vars['mini']->value)."w,
                                ".((string)$_smarty_tpl->tpl_vars['item']->value->getImage(\JTL\Media\Image::SIZE_SM))." ".((string)$_smarty_tpl->tpl_vars['klein']->value)."w,
                                ".((string)$_smarty_tpl->tpl_vars['item']->value->getImage(\JTL\Media\Image::SIZE_MD))." ".((string)$_smarty_tpl->tpl_vars['normal']->value)."w,
                                ".((string)$_smarty_tpl->tpl_vars['item']->value->getImage(\JTL\Media\Image::SIZE_LG))." ".((string)$_smarty_tpl->tpl_vars['gross']->value)."w",'sizes'=>$_smarty_tpl->tpl_vars['sizes']->value,'alt'=>$_smarty_tpl->tpl_vars['alt']->value,'width'=>$_smarty_tpl->tpl_vars['width']->value,'height'=>$_smarty_tpl->tpl_vars['height']->value,'class'=>$_smarty_tpl->tpl_vars['class']->value),$_smarty_tpl ) );?>

                <?php }?>
            <?php
}
}
/* {/block 'snippets-image-main-image'} */
/* {block 'snippets-image-main'} */
class Block_13102727616790f97dd78b49_84905473 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php if ($_smarty_tpl->tpl_vars['square']->value) {?>
        <div class="square square-image <?php echo $_smarty_tpl->tpl_vars['squareClass']->value;?>
">
            <div class="inner">
        <?php }?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10042169316790f97dd79717_93834589', 'snippets-image-main-image', $this->tplIndex);
?>

        <?php if ($_smarty_tpl->tpl_vars['square']->value) {?>
            </div>
        </div>
        <?php }?>
    <?php
}
}
/* {/block 'snippets-image-main'} */
/* {block 'snippets-image'} */
class Block_359494626790f97dd3dd11_54411038 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'snippets-image' => 
  array (
    0 => 'Block_359494626790f97dd3dd11_54411038',
  ),
  'snippets-image-variables' => 
  array (
    0 => 'Block_21381166906790f97dd3f541_06651196',
  ),
  'snippets-image-main' => 
  array (
    0 => 'Block_13102727616790f97dd78b49_84905473',
  ),
  'snippets-image-main-image' => 
  array (
    0 => 'Block_10042169316790f97dd79717_93834589',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['item']->value !== null && !empty($_smarty_tpl->tpl_vars['item']->value->getImage(\JTL\Media\Image::SIZE_XS))) {?>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21381166906790f97dd3f541_06651196', 'snippets-image-variables', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13102727616790f97dd78b49_84905473', 'snippets-image-main', $this->tplIndex);
?>

    <?php }
}
}
/* {/block 'snippets-image'} */
}

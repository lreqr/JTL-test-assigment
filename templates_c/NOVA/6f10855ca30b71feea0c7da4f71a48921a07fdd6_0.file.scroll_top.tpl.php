<?php
/* Smarty version 4.3.1, created on 2025-01-22 14:58:28
  from 'C:\OSPanel\domains\JTL_shop\templates\NOVA\snippets\scroll_top.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6790f9843ad6f6_84614986',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f10855ca30b71feea0c7da4f71a48921a07fdd6' => 
    array (
      0 => 'C:\\OSPanel\\domains\\JTL_shop\\templates\\NOVA\\snippets\\scroll_top.tpl',
      1 => 1694613031,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6790f9843ad6f6_84614986 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20770129796790f9843ac878_68224727', 'snippets-scroll-top');
?>

<?php }
/* {block 'snippets-scroll-top-main'} */
class Block_12377630896790f9843ace23_86980382 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="smoothscroll-top go-to-top scroll-to-top">
            <span class="scroll-top-inner">
                <i class="fas fa-2x fa-chevron-up"></i>
            </span>
        </div>
    <?php
}
}
/* {/block 'snippets-scroll-top-main'} */
/* {block 'snippets-scroll-top'} */
class Block_20770129796790f9843ac878_68224727 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'snippets-scroll-top' => 
  array (
    0 => 'Block_20770129796790f9843ac878_68224727',
  ),
  'snippets-scroll-top-main' => 
  array (
    0 => 'Block_12377630896790f9843ace23_86980382',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12377630896790f9843ace23_86980382', 'snippets-scroll-top-main', $this->tplIndex);
?>

<?php
}
}
/* {/block 'snippets-scroll-top'} */
}

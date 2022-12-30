<?php
/* Smarty version 3.1.47, created on 2022-12-29 18:10:14
  from '/var/www/vhosts/chezak.net/mandarine.chezak.net/themes/classic-child/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63add8065ecc00_19569587',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a2ea194a4e7b72b011ee0ecbe2905a0a59dedf8a' => 
    array (
      0 => '/var/www/vhosts/chezak.net/mandarine.chezak.net/themes/classic-child/templates/page.tpl',
      1 => 1672328613,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63add8065ecc00_19569587 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_67481059763add8065e77d3_58551728', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_32310127263add8065e8444_98835750 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_181798914363add8065e7d63_45732614 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_32310127263add8065e8444_98835750', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_57690835563add8065ea521_64885408 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_150621192263add8065eacf1_73374396 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_117110358963add8065e9fc8_13233985 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_57690835563add8065ea521_64885408', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_150621192263add8065eacf1_73374396', 'page_content', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_76796917163add8065ebe07_53263000 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_205112821963add8065eb8e5_61695913 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_76796917163add8065ebe07_53263000', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_67481059763add8065e77d3_58551728 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_67481059763add8065e77d3_58551728',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_181798914363add8065e7d63_45732614',
  ),
  'page_title' => 
  array (
    0 => 'Block_32310127263add8065e8444_98835750',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_117110358963add8065e9fc8_13233985',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_57690835563add8065ea521_64885408',
  ),
  'page_content' => 
  array (
    0 => 'Block_150621192263add8065eacf1_73374396',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_205112821963add8065eb8e5_61695913',
  ),
  'page_footer' => 
  array (
    0 => 'Block_76796917163add8065ebe07_53263000',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_181798914363add8065e7d63_45732614', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_117110358963add8065e9fc8_13233985', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_205112821963add8065eb8e5_61695913', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}

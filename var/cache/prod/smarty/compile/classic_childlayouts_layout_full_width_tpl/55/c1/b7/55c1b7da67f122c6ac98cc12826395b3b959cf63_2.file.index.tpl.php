<?php
/* Smarty version 3.1.47, created on 2022-12-29 18:10:14
  from '/var/www/vhosts/chezak.net/mandarine.chezak.net/themes/classic-child/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63add8065e4d85_22564834',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55c1b7da67f122c6ac98cc12826395b3b959cf63' => 
    array (
      0 => '/var/www/vhosts/chezak.net/mandarine.chezak.net/themes/classic-child/templates/index.tpl',
      1 => 1672328612,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63add8065e4d85_22564834 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_139253585363add8065e2348_87270846', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_36411740263add8065e2969_26139965 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_11483997263add8065e37e8_73532181 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_163941173363add8065e3288_27949921 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11483997263add8065e37e8_73532181', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_139253585363add8065e2348_87270846 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_139253585363add8065e2348_87270846',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_36411740263add8065e2969_26139965',
  ),
  'page_content' => 
  array (
    0 => 'Block_163941173363add8065e3288_27949921',
  ),
  'hook_home' => 
  array (
    0 => 'Block_11483997263add8065e37e8_73532181',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_36411740263add8065e2969_26139965', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_163941173363add8065e3288_27949921', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}

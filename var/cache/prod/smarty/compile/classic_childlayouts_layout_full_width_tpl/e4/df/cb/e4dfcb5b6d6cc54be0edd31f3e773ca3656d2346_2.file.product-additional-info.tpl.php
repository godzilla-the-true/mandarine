<?php
/* Smarty version 3.1.47, created on 2022-12-29 18:18:27
  from '/var/www/vhosts/chezak.net/mandarine.chezak.net/themes/classic-child/templates/catalog/_partials/product-additional-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63add9f3db3455_71977612',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e4dfcb5b6d6cc54be0edd31f3e773ca3656d2346' => 
    array (
      0 => '/var/www/vhosts/chezak.net/mandarine.chezak.net/themes/classic-child/templates/catalog/_partials/product-additional-info.tpl',
      1 => 1672328629,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63add9f3db3455_71977612 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-additional-info js-product-additional-info">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div>
<?php }
}

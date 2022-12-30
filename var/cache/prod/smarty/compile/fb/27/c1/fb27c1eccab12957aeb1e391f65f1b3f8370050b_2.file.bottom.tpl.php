<?php
/* Smarty version 3.1.47, created on 2022-12-29 18:10:14
  from '/var/www/vhosts/chezak.net/mandarine.chezak.net/modules/trustpilot/views/templates/hook/bottom.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63add806809597_00070858',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb27c1eccab12957aeb1e391f65f1b3f8370050b' => 
    array (
      0 => '/var/www/vhosts/chezak.net/mandarine.chezak.net/modules/trustpilot/views/templates/hook/bottom.tpl',
      1 => 1672335526,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63add806809597_00070858 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript" data-keepinline="true">
    window.trustpilot_trustbox_settings = <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['trustbox_settings']->value ));?>
;
<?php echo '</script'; ?>
>
<?php }
}

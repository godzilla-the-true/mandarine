<?php
/* Smarty version 3.1.47, created on 2022-12-29 18:10:14
  from '/var/www/vhosts/chezak.net/mandarine.chezak.net/modules/trustpilot/views/templates/hook/head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63add8063cc967_66450983',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '45fc48bbd36f065c6691069b5616b9d9ba8ae97c' => 
    array (
      0 => '/var/www/vhosts/chezak.net/mandarine.chezak.net/modules/trustpilot/views/templates/hook/head.tpl',
      1 => 1672335526,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63add8063cc967_66450983 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript" data-keepinline="true">
    var trustpilot_script_url = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['script_url']->value, ENT_QUOTES, 'UTF-8');?>
';
    var trustpilot_key = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
';
    var trustpilot_widget_script_url = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget_script_url']->value, ENT_QUOTES, 'UTF-8');?>
';
    var trustpilot_integration_app_url = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['integration_app_url']->value, ENT_QUOTES, 'UTF-8');?>
';
    var trustpilot_preview_css_url = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preview_css_url']->value, ENT_QUOTES, 'UTF-8');?>
';
    var trustpilot_preview_script_url = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preview_script_url']->value, ENT_QUOTES, 'UTF-8');?>
';
    var trustpilot_ajax_url = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['trustpilot_ajax_url']->value, ENT_QUOTES, 'UTF-8');?>
';
    var user_id = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_id']->value, ENT_QUOTES, 'UTF-8');?>
';
    var trustpilot_trustbox_settings = <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['trustbox_settings']->value ));?>
;
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['register_js_dir']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['trustbox_js_dir']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preview_js_dir']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo '</script'; ?>
>
<?php }
}

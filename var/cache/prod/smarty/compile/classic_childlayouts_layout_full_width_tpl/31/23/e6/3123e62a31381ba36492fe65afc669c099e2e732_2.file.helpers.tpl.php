<?php
/* Smarty version 3.1.47, created on 2022-12-29 18:10:14
  from '/var/www/vhosts/chezak.net/mandarine.chezak.net/themes/classic-child/templates/_partials/helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63add806608545_99303047',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3123e62a31381ba36492fe65afc669c099e2e732' => 
    array (
      0 => '/var/www/vhosts/chezak.net/mandarine.chezak.net/themes/classic-child/templates/_partials/helpers.tpl',
      1 => 1672328619,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63add806608545_99303047 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => '/var/www/vhosts/chezak.net/mandarine.chezak.net/var/cache/prod/smarty/compile/classic_childlayouts_layout_full_width_tpl/31/23/e6/3123e62a31381ba36492fe65afc669c099e2e732_2.file.helpers.tpl.php',
    'uid' => '3123e62a31381ba36492fe65afc669c099e2e732',
    'call_name' => 'smarty_template_function_renderLogo_42338001863add806605bd4_75782336',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_42338001863add806605bd4_75782336 */
if (!function_exists('smarty_template_function_renderLogo_42338001863add806605bd4_75782336')) {
function smarty_template_function_renderLogo_42338001863add806605bd4_75782336(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_42338001863add806605bd4_75782336 */
}

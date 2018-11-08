<?php
/* Smarty version 3.1.30, created on 2018-01-12 19:04:09
  from "C:\xampp\htdocs\data\view\elements\scripts.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a58f899373676_86159453',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa78e339c7b7a96761b7030771ed1364d6e66780' => 
    array (
      0 => 'C:\\xampp\\htdocs\\data\\view\\elements\\scripts.tpl',
      1 => 1515780240,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a58f899373676_86159453 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['resources_path']->value;
$_prefixVariable1=ob_get_clean();
echo $_prefixVariable1;?>
material/js/plugins.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['resources_path']->value;
$_prefixVariable2=ob_get_clean();
echo $_prefixVariable2;?>
material/js/app.min.js"><?php echo '</script'; ?>
><?php }
}

<?php
/* Smarty version 3.1.30, created on 2018-02-17 23:02:53
  from "C:\xampp\htdocs\turnieje\data\view\elements\scripts.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a88a68dcc5f18_53453590',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a2b2fb7ad5c6bdb045fb93893543df991f76a7f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\turnieje\\data\\view\\elements\\scripts.tpl',
      1 => 1515780240,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a88a68dcc5f18_53453590 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['resources_path']->value;
$_prefixVariable19=ob_get_clean();
echo $_prefixVariable19;?>
material/js/plugins.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['resources_path']->value;
$_prefixVariable20=ob_get_clean();
echo $_prefixVariable20;?>
material/js/app.min.js"><?php echo '</script'; ?>
><?php }
}

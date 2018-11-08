<?php
/* Smarty version 3.1.30, created on 2017-12-03 21:52:28
  from "C:\xampp\htdocs\data\view\elements\head.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a24640c8801e3_58118056',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f7c731bdf8fc4bd6d82a64bc0663d07fe74ba38' => 
    array (
      0 => 'C:\\xampp\\htdocs\\data\\view\\elements\\head.tpl',
      1 => 1512334347,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a24640c8801e3_58118056 (Smarty_Internal_Template $_smarty_tpl) {
?>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="theme-color" content="#333">
  <title><?php ob_start();
echo $_smarty_tpl->tpl_vars['title']->value;
$_prefixVariable1=ob_get_clean();
echo $_prefixVariable1;?>
</title>
  <meta name="description" content="Work in progress...">
  <link rel="shortcut icon" href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['resources_path']->value;
$_prefixVariable2=ob_get_clean();
echo $_prefixVariable2;?>
material/img/favicon.png?v=3">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['resources_path']->value;
$_prefixVariable3=ob_get_clean();
echo $_prefixVariable3;?>
material/css/preload.min.css">
  <link rel="stylesheet" href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['resources_path']->value;
$_prefixVariable4=ob_get_clean();
echo $_prefixVariable4;?>
material/css/plugins.min.css">
  <link rel="stylesheet" href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['resources_path']->value;
$_prefixVariable5=ob_get_clean();
echo $_prefixVariable5;?>
material/css/<?php ob_start();
echo $_smarty_tpl->tpl_vars['themeCSS']->value;
$_prefixVariable6=ob_get_clean();
echo $_prefixVariable6;?>
">
  <link rel="stylesheet" href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['resources_path']->value;
$_prefixVariable7=ob_get_clean();
echo $_prefixVariable7;?>
css/style.css">
  <!--[if lt IE 9]>
      <?php echo '<script'; ?>
 src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['resources_path']->value;
$_prefixVariable8=ob_get_clean();
echo $_prefixVariable8;?>
material/js/html5shiv.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['resources_path']->value;
$_prefixVariable9=ob_get_clean();
echo $_prefixVariable9;?>
material/js/respond.min.js"><?php echo '</script'; ?>
>
  <![endif]-->
</head><?php }
}

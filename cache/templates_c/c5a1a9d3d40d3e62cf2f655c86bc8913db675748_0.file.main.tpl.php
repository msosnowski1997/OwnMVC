<?php
/* Smarty version 3.1.30, created on 2017-12-05 15:54:47
  from "C:\xampp\htdocs\data\view\admin\main.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a26b3375606a4_58405487',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c5a1a9d3d40d3e62cf2f655c86bc8913db675748' => 
    array (
      0 => 'C:\\xampp\\htdocs\\data\\view\\admin\\main.tpl',
      1 => 1512485685,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:elements/head.tpl' => 1,
    'file:elements/preload.tpl' => 1,
    'file:elements/header.tpl' => 1,
    'file:elements/navbar.tpl' => 1,
    'file:elements/footer.tpl' => 1,
    'file:admin/elements/left-menu.tpl' => 1,
    'file:elements/scripts.tpl' => 1,
  ),
),false)) {
function content_5a26b3375606a4_58405487 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="pl">
    <?php $_smarty_tpl->_subTemplateRender("file:elements/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <body>
    <?php $_smarty_tpl->_subTemplateRender("file:elements/preload.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <div class="ms-site-container">
    <!-- header -->
    <?php $_smarty_tpl->_subTemplateRender("file:elements/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    
    <!-- navbar -->
    <?php $_smarty_tpl->_subTemplateRender("file:elements/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    
    <?php $_smarty_tpl->_subTemplateRender("admin/".((string)$_smarty_tpl->tpl_vars['content1']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

    <!-- footer -->  
    <?php $_smarty_tpl->_subTemplateRender("file:elements/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    
    </div>
    <!-- ms-site-container -->
    <?php $_smarty_tpl->_subTemplateRender("file:admin/elements/left-menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    
    <?php $_smarty_tpl->_subTemplateRender("file:elements/scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  </body>
</html><?php }
}

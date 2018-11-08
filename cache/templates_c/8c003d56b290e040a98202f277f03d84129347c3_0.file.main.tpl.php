<?php
/* Smarty version 3.1.30, created on 2018-03-01 20:53:34
  from "C:\xampp\htdocs\turnieje\data\view\main.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a985a3e88dd17_88199605',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c003d56b290e040a98202f277f03d84129347c3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\turnieje\\data\\view\\main.tpl',
      1 => 1519849208,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:elements/head.tpl' => 1,
    'file:elements/preload.tpl' => 1,
    'file:elements/modal-user-panel.tpl' => 1,
    'file:elements/header.tpl' => 1,
    'file:elements/navbar.tpl' => 1,
    'file:elements/footer.tpl' => 1,
    'file:elements/left-menu.tpl' => 1,
    'file:elements/scripts.tpl' => 1,
  ),
),false)) {
function content_5a985a3e88dd17_88199605 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="pl">
    <?php $_smarty_tpl->_subTemplateRender("file:elements/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <body>
    <?php $_smarty_tpl->_subTemplateRender("file:elements/preload.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <div class="ms-site-container">
      <!-- Modal not-logged -->
<?php if ($_smarty_tpl->tpl_vars['user_data']->value['user_permissions'] < 2) {?>
    <?php $_smarty_tpl->_subTemplateRender("file:elements/modal-user-panel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }?>
    <!-- header -->
    <?php $_smarty_tpl->_subTemplateRender("file:elements/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <!-- navbar -->
    <?php $_smarty_tpl->_subTemplateRender("file:elements/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    
    <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['content']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

    <!-- footer -->  
    <?php $_smarty_tpl->_subTemplateRender("file:elements/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    
    </div>
    <!-- ms-site-container -->
    <?php $_smarty_tpl->_subTemplateRender("file:elements/left-menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    
    <?php $_smarty_tpl->_subTemplateRender("file:elements/scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


  </body>
</html><?php }
}

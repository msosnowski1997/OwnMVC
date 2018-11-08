<?php
/* Smarty version 3.1.30, created on 2018-02-17 23:26:26
  from "C:\xampp\htdocs\turnieje\data\view\full-page.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a88ac1213c848_72412189',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '47ef2d4f9a058f57c74c512a9cdf68ebb1e937e9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\turnieje\\data\\view\\full-page.tpl',
      1 => 1510358462,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:elements/head.tpl' => 1,
    'file:elements/preload.tpl' => 1,
    'file:elements/scripts.tpl' => 1,
  ),
),false)) {
function content_5a88ac1213c848_72412189 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="pl">
    <?php $_smarty_tpl->_subTemplateRender("file:elements/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <body>
    <?php $_smarty_tpl->_subTemplateRender("file:elements/preload.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <div class="bg-full-page ms-hero-bg-dark ms-hero-img-airplane back-fixed">
      <div class="mw-500 absolute-center">
        <div class="card color-dark shadow-6dp animated fadeIn animation-delay-7">
          <div class="ms-hero-bg-primary ms-hero-img-mountain">
            <h2 class="text-center no-m pt-4 pb-4 color-white index-1"><?php ob_start();
echo $_smarty_tpl->tpl_vars['title']->value;
$_prefixVariable1=ob_get_clean();
echo $_prefixVariable1;?>
</h2>
          </div>
          
          <div class="card-block">
            <?php $_smarty_tpl->_subTemplateRender("elements/forms/".((string)$_smarty_tpl->tpl_vars['content']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('fullpage'=>true), 0, true);
?>

          </div>
        </div>
        <div class="text-center animated fadeInUp animation-delay-7">
          <a href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['base_site']->value;
$_prefixVariable2=ob_get_clean();
echo $_prefixVariable2;?>
" class="btn btn-white">
            <i class="zmdi zmdi-home"></i> STRONA GŁÓWNA</a>
        </div>
      </div>
    </div>
    
    <?php $_smarty_tpl->_subTemplateRender("file:elements/scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  </body>
</html><?php }
}

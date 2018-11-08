<?php
/* Smarty version 3.1.30, created on 2018-02-18 00:09:34
  from "C:\xampp\htdocs\turnieje\data\view\error404.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a88b62eb08fa2_51114531',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '188617e27cc2dfe4296174bdb9d08a40777314c6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\turnieje\\data\\view\\error404.tpl',
      1 => 1518908966,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a88b62eb08fa2_51114531 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8 col-md-offset-2">
      <div class="card animated fadeInUp animation-delay-7 color-primary withripple">
        <div class="card-block-big color-dark">
          <div class="text-center">
            <h1 class="color-primary">Błąd 404</h1>
            <h2>Strona nie odnaleziona</h2>
            <p class="lead lead-sm">Coś poszło nie tak.
              <br>Możesz zatrudnić nasze roboty do poszukiwań...</p>
            <a href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['base_site']->value;
$_prefixVariable1=ob_get_clean();
echo $_prefixVariable1;?>
" class="btn btn-primary btn-raised">
              <i class="zmdi zmdi-home"></i> Wróć na stronę główną</a>
          </div>
        </div>
      </div>
      <div class="card animated fadeInUp animation-delay-9 color-primary withripple">
        <div class="card-block-big color-dark">
          <h2 class="color-primary">Szukaj</h2>
          <p class="lead">Użyj wyszukiwarki i znajdź to co chcesz.</p>
          <form action="<?php echo $_smarty_tpl->tpl_vars['base_site']->value;?>
/szukaj">
          <div class="form-group label-floating">
            <label class="control-label" for="addon2">Szukaj...</label>
            <input type="text" id="addon2" name="q" class="form-control"> </div>
          <button type="submit" class="btn btn-primary btn-raised btn-block">
            <i class="zmdi zmdi-search"></i> Szukaj</a>
          </form>
        </div>
      </div>
    </div>
  </div>
</div><?php }
}

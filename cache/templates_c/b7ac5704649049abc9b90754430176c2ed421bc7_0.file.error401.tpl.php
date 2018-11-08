<?php
/* Smarty version 3.1.30, created on 2018-02-16 12:13:36
  from "C:\xampp\htdocs\data\view\error401.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a86bce094b8f5_45665855',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b7ac5704649049abc9b90754430176c2ed421bc7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\data\\view\\error401.tpl',
      1 => 1518779615,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a86bce094b8f5_45665855 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8 col-md-offset-2">
      <div class="card animated fadeInUp animation-delay-7 color-primary withripple">
        <div class="card-block-big color-dark">
          <div class="text-center">
            <h1 class="color-primary">Błąd 401</h1>
            <h2>Nie masz dostępu do tej strony</h2>
            <p class="lead lead-sm">Coś poszło nie tak.
              <br>Prawdopodobnie musisz się zalogować i wszystko będzie OK...</p>
            <a href="/logowanie" class="btn btn-primary btn-raised">
               Przejdz do strony logowania <i class="zmdi zmdi-long-arrow-right no-mr ml-1"></i></a>
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

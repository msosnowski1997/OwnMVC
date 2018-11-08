<?php
/* Smarty version 3.1.30, created on 2017-12-02 22:16:54
  from "C:\xampp\htdocs\data\view\elements\forms\login-form.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a231846c7b5d0_00465550',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08d59a364a0e95081b4b72731f895367c103b403' => 
    array (
      0 => 'C:\\xampp\\htdocs\\data\\view\\elements\\forms\\login-form.tpl',
      1 => 1512072279,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a231846c7b5d0_00465550 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['response']->value['ERROR'])) {?>
<div class="alert alert-danger alert-light alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <i class="zmdi zmdi-close"></i>
  </button>
  <p><?php ob_start();
echo $_smarty_tpl->tpl_vars['response']->value['ERROR'];
$_prefixVariable1=ob_get_clean();
echo $_prefixVariable1;?>
</p>
</div>
<?php }?>

<form method="post" action="<?php ob_start();
echo $_smarty_tpl->tpl_vars['base_site']->value;
$_prefixVariable2=ob_get_clean();
echo $_prefixVariable2;?>
/logowanie" onsubmit="checkLoginForm();">
  <fieldset>
    <div class="form-group label-floating">
      <div class="input-group">
        <span class="input-group-addon">
          <i class="zmdi zmdi-account"></i>
        </span>
        <label class="control-label" for="form_login">Nazwa użytkownika</label>
        <input type="text" name="form_login" id="form_login" class="form-control"> </div>
    </div>
    <div class="form-group label-floating">
      <div class="input-group">
        <span class="input-group-addon">
          <i class="zmdi zmdi-lock"></i>
        </span>
        <label class="control-label" for="form_password">Hasło</label>
        <input type="password" name="form_password" id="form_password" class="form-control" > </div>
    </div>
    <div class="row mt-2">
      <div class="col-md-6">
        <div class="form-group no-mt">
          <div class="checkbox">
            <label>
              <input type="checkbox" name="form_remember" value="true"> Zapamiętaj mnie </label>
          </div>
        </div>
      </div>
<?php if (isset($_smarty_tpl->tpl_vars['fullpage']->value)) {?>
    </fieldset>
      <div class="row">
        <div class="col-sm-6">
          <button class="btn btn-raised btn-primary btn-block">Zaloguj
           <i class="zmdi zmdi-long-arrow-right no-mr ml-1"></i>
          </button>
        </div>
        <div class="col-sm-6">
          <a href="<?php echo $_smarty_tpl->tpl_vars['base_site']->value;?>
/rejestracja" class="btn btn-primary btn-block">
            <i class="zmdi zmdi-account-add mr-1"></i> Zarejestruj się
          </a>
        </div>
      </div>
<?php } else { ?>
    <div class="col-sm-6">
      <button class="btn btn-raised btn-primary pull-right">Zaloguj
       <i class="zmdi zmdi-long-arrow-right no-mr ml-1"></i>
      </button>
    </div>
  </fieldset>
<?php }?>
</form>
<div class="text-center">
  <h3>Zaloguj przez</h3>


  <div class="row">
    <div class="col-12 col-sm-4">
      <a href="javascript:void(0)" class="wave-effect-light btn btn-raised btn-facebook btn-block disabled">
        <i class="zmdi zmdi-facebook"></i> Facebook</a>
    </div>
    <div class="col-12 col-sm-4">
      <a href="javascript:void(0)" class="wave-effect-light btn btn-raised btn-twitter btn-block disabled">
        <i class="zmdi zmdi-twitter"></i> Twitter</a>
    </div>
    <div class="col-12 col-sm-4">
      <a href="javascript:void(0)" class="wave-effect-light btn btn-raised btn-google btn-block disabled">
        <i class="zmdi zmdi-google"></i> Google</a>
    </div>
  </div>
</div><?php }
}

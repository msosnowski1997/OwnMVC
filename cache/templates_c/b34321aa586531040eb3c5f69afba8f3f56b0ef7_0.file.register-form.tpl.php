<?php
/* Smarty version 3.1.30, created on 2018-02-17 23:02:53
  from "C:\xampp\htdocs\turnieje\data\view\elements\forms\register-form.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a88a68d9ffaa5_07754767',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b34321aa586531040eb3c5f69afba8f3f56b0ef7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\turnieje\\data\\view\\elements\\forms\\register-form.tpl',
      1 => 1515679828,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a88a68d9ffaa5_07754767 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['response']->value['ERROR'])) {?>
<div class="alert alert-danger alert-light alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <i class="zmdi zmdi-close"></i>
  </button>
  <p><?php ob_start();
echo $_smarty_tpl->tpl_vars['response']->value['ERROR'];
$_prefixVariable12=ob_get_clean();
echo $_prefixVariable12;?>
</p>
</div>
<?php }?>
<form action="<?php ob_start();
echo $_smarty_tpl->tpl_vars['base_site']->value;
$_prefixVariable13=ob_get_clean();
echo $_prefixVariable13;?>
/rejestracja" method="post">
  <fieldset>
    <div class="form-group label-floating animated flipInX animation-delay-8">
      <div class="input-group">
        <span class="input-group-addon">
          <i class="zmdi zmdi-account"></i>
        </span>
        <label class="control-label" for="form_login">Nazwa użytkownika</label>
        <input type="text" name="form_login" id="form_login" class="form-control"> </div>
    </div>
    <div class="form-group label-floating animated flipInX animation-delay-10">
      <div class="input-group">
        <span class="input-group-addon">
          <i class="zmdi zmdi-email"></i>
        </span>
        <label class="control-label" for="form_mail">Email</label>
        <input type="email" name="form_mail" id="form_mail" class="form-control"> </div>
    </div>
    <div class="form-group label-floating animated flipInX animation-delay-12">
      <div class="input-group">
        <span class="input-group-addon">
          <i class="zmdi zmdi-lock"></i>
        </span>
        <label class="control-label" for="form_password">Hasło</label>
        <input type="password" name="form_password" id="form_password" class="form-control"> </div>
    </div>
    <div class="form-group label-floating animated flipInX animation-delay-14">
      <div class="input-group">
        <span class="input-group-addon">
          <i class="zmdi zmdi-lock"></i>
        </span>
        <label class="control-label" for="form_password2">Powtrórz hasło</label>
        <input type="password" name="form_password2" id="form_password2" class="form-control"> </div>
    </div>
 <?php if (isset($_smarty_tpl->tpl_vars['fullpage']->value)) {?>
  </fieldset>
    <div class="row">
      <div class="col-sm-6 animated flipInX animation-delay-16">
        <button class="btn btn-raised btn-primary btn-block">
          <i class="zmdi zmdi-account-add mr-1"></i> Zarejestruj się
        </button>
      </div>
      <div class="col-sm-6 animated flipInX animation-delay-18">
        <a href="<?php echo $_smarty_tpl->tpl_vars['base_site']->value;?>
/logowanie" class="btn btn-primary btn-block">Zaloguj
         <i class="zmdi zmdi-long-arrow-right no-mr ml-1"></i>
        </a>
      </div>
    </div>
<?php } else { ?>
      <button class="btn btn-raised btn-primary btn-block">
        <i class="zmdi zmdi-account-add mr-1"></i> Zarejestruj się
      </button>
  </fieldset>
<?php }?>
</form><?php }
}

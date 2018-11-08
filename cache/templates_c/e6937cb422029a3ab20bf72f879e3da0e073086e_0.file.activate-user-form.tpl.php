<?php
/* Smarty version 3.1.30, created on 2017-12-03 23:02:29
  from "C:\xampp\htdocs\data\view\elements\forms\activate-user-form.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a24747530ea32_90583667',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e6937cb422029a3ab20bf72f879e3da0e073086e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\data\\view\\elements\\forms\\activate-user-form.tpl',
      1 => 1512338460,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a24747530ea32_90583667 (Smarty_Internal_Template $_smarty_tpl) {
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
<form method="post" <?php if (isset($_smarty_tpl->tpl_vars['destinyURL']->value)) {?>action="<?php ob_start();
echo $_smarty_tpl->tpl_vars['destinyURL']->value;
$_prefixVariable2=ob_get_clean();
echo $_prefixVariable2;?>
"<?php }?>>
  <fieldset>
    <div class="form-group label-floating">
      <div class="input-group">
        <span class="input-group-addon">
          <i class="zmdi zmdi-account"></i>
        </span>
        <label class="control-label" for="form_login">Nazwa użytkownika</label>
        <input id="form_login" class="form-control" value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['userdata']->value['user_alias'];
$_prefixVariable3=ob_get_clean();
echo $_prefixVariable3;?>
" disabled=""> 
      </div>
    </div>
    <div class="form-group label-floating">
      <div class="input-group">
        <span class="input-group-addon">
          <i class="zmdi zmdi-email"></i>
        </span>
        <label class="control-label" for="form_mail">Email</label>
        <input id="form_mail" class="form-control" value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['userdata']->value['user_mail'];
$_prefixVariable4=ob_get_clean();
echo $_prefixVariable4;?>
" disabled=""> 
      </div>
    </div>

    <div class="form-group label-floating">
      <div class="input-group">
        <span class="input-group-addon">
          <i class="zmdi zmdi-arrow-right"></i>
        </span>
        <label class="control-label" for="form_name">Imię</label>
        <input type="text" name="form_name" id="form_name" class="form-control"> 
      </div>
    </div>


    <div class="form-group label-floating">
      <div class="input-group">
        <span class="input-group-addon">
          <i class="zmdi zmdi-arrow-right"></i>
        </span>
        <label class="control-label" for="form_surname">Nazwisko</label>
        <input type="text" name="form_surname" id="form_surname" class="form-control"> 
      </div>
    </div>

    <div class="form-group label-floating">
      <div class="input-group">
        <span class="input-group-addon">
          <i class="zmdi zmdi-phone"></i>
        </span>
        <label class="control-label" for="form_phone">Numer telefonu</label>
        <input type="text" name="form_phone" id="form_phone" class="form-control"> 
        <p class="help-block">W formacie 123456789</p> 
      </div>
    </div>
    
    <div class="form-group label-floating">
      <div class="input-group">
        <span class="input-group-addon">
          <i class="zmdi zmdi-calendar"></i>
        </span>
        <label class="control-label" for="datePicker">Data urodzenia</label>
        <input type="text" name="form_born" id="datePicker" class="form-control">
        <p class="help-block">W formacie RRRR/MM/DD</p> 
      </div>
    </div>


<div class="form-group label-floating">
    <div class="input-group">
      <span class="input-group-addon">
        <i class="fa fa-venus-mars" aria-hidden="true"></i>
      </span>
      <div class="radio radio-primary">
        <label>
          <input type="radio" name="form_gender" id="form_gender_M" value="M"> Mężczyzna
        </label>
        <label>
          <input type="radio" name="form_gender" id="form_gender_W" value="W"> Kobieta
        </label>
      </div>
    </div>
</div>
    <button class="btn btn-raised btn-primary btn-block">
      <i class="zmdi zmdi-account-add mr-1"></i> Aktywuj konto
    </button>
  </fieldset>
</form><?php }
}

<?php
/* Smarty version 3.1.30, created on 2017-11-13 10:04:01
  from "C:\xampp\htdocs\data\view\elements\forms\activate-user.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a09600188ed62_91171861',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a6f63593f6d4c6a29d8c03e2ca4968fbbd5080f3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\data\\view\\elements\\forms\\activate-user.tpl',
      1 => 1510563017,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a09600188ed62_91171861 (Smarty_Internal_Template $_smarty_tpl) {
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
<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">Wyślij mi wiadomość ponownie</h3>
	</div>
	<div class="card-block">
		<p class="lead lead-sm">Wpisz tu swój adres e-mail, aby wygenerować nowy token.</p>
		<form method="post">
			<div class="form-group label-floating">
				<div class="input-group">
					<span class="input-group-addon">
						<i class="zmdi zmdi-email"></i>
					</span>
					<label class="control-label" for="form_activate_mail">Adres e-mail</label>
					<input type="email" id="form_activate_mail" name="form_activate_mail" class="form-control">
					<p class="help-block">example@example.com</p>
					<span class="input-group-btn">
						<button class="btn-circle btn-circle-raised btn-circle-sm btn-circle-primary">
							<i class="zmdi zmdi-mail-send"></i>
						</button>
					</span>
				</div>
			</div>
		</form>
	</div>
</div>

<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">Masz swój token?</h3>
	</div>
	<div class="card-block">
		<p class="lead lead-sm">Wpisz go tutaj i aktywuj konto.</p>
		<form action="<?php ob_start();
echo $_smarty_tpl->tpl_vars['base_site']->value;
$_prefixVariable2=ob_get_clean();
echo $_prefixVariable2;?>
/rejestracja/aktywuj" method="post">
			<div class="form-group label-floating">
				<div class="input-group">
					<span class="input-group-addon">
						<i class="zmdi zmdi-key"></i>
					</span>
					<label class="control-label" for="form_activate_token">Token aktywacyjny</label>
					<input type="text" id="form_activate_token" name="form_activate_token" class="form-control">
					<span class="input-group-btn">
						<button class="btn-circle btn-circle-raised btn-circle-sm btn-circle-primary">
							<i class="zmdi zmdi-mail-send"></i>
						</button>
					</span>
				</div>
			</div>
		</form>
	</div>
</div><?php }
}

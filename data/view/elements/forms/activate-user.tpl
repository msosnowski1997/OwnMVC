{if isset($response['ERROR'])}
<div class="alert alert-danger alert-light alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <i class="zmdi zmdi-close"></i>
  </button>
  <p>{{$response['ERROR']}}</p>
</div>
{/if}
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
		<form action="{{$base_site}}/rejestracja/aktywuj" method="post">
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
</div>
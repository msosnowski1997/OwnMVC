{if isset($response['ERROR'])}
<div class="alert alert-danger alert-light alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <i class="zmdi zmdi-close"></i>
  </button>
  <p>{{$response['ERROR']}}</p>
</div>
{/if}
<form action="{{$base_site}}/rejestracja" method="post">
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
 {if isset($fullpage)}
  </fieldset>
    <div class="row">
      <div class="col-sm-6 animated flipInX animation-delay-16">
        <button class="btn btn-raised btn-primary btn-block">
          <i class="zmdi zmdi-account-add mr-1"></i> Zarejestruj się
        </button>
      </div>
      <div class="col-sm-6 animated flipInX animation-delay-18">
        <a href="{$base_site}/logowanie" class="btn btn-primary btn-block">Zaloguj
         <i class="zmdi zmdi-long-arrow-right no-mr ml-1"></i>
        </a>
      </div>
    </div>
{else}
      <button class="btn btn-raised btn-primary btn-block">
        <i class="zmdi zmdi-account-add mr-1"></i> Zarejestruj się
      </button>
  </fieldset>
{/if}
</form>
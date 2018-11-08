{if isset($response['ERROR'])}
<div class="alert alert-danger alert-light alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <i class="zmdi zmdi-close"></i>
  </button>
  <p>{{$response['ERROR']}}</p>
</div>
{/if}

<form method="post" action="{{$base_site}}/logowanie" onsubmit="checkLoginForm();">
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
{if isset($fullpage)}
    </fieldset>
      <div class="row">
        <div class="col-sm-6">
          <button class="btn btn-raised btn-primary btn-block">Zaloguj
           <i class="zmdi zmdi-long-arrow-right no-mr ml-1"></i>
          </button>
        </div>
        <div class="col-sm-6">
          <a href="{$base_site}/rejestracja" class="btn btn-primary btn-block">
            <i class="zmdi zmdi-account-add mr-1"></i> Zarejestruj się
          </a>
        </div>
      </div>
{else}
    <div class="col-sm-6">
      <button class="btn btn-raised btn-primary pull-right">Zaloguj
       <i class="zmdi zmdi-long-arrow-right no-mr ml-1"></i>
      </button>
    </div>
  </fieldset>
{/if}
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
</div>
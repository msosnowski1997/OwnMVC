{if isset($response['ERROR'])}
<div class="alert alert-danger alert-light alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <i class="zmdi zmdi-close"></i>
  </button>
  <p>{{$response['ERROR']}}</p>
</div>
{/if}
<form method="post" {if isset($destinyURL)}action="{{$destinyURL}}"{/if}>
  <fieldset>
    <div class="form-group label-floating">
      <div class="input-group">
        <span class="input-group-addon">
          <i class="zmdi zmdi-account"></i>
        </span>
        <label class="control-label" for="form_login">Nazwa użytkownika</label>
        <input id="form_login" class="form-control" value="{{$userdata['user_alias']}}" disabled=""> 
      </div>
    </div>
    <div class="form-group label-floating">
      <div class="input-group">
        <span class="input-group-addon">
          <i class="zmdi zmdi-email"></i>
        </span>
        <label class="control-label" for="form_mail">Email</label>
        <input id="form_mail" class="form-control" value="{{$userdata['user_mail']}}" disabled=""> 
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
</form>
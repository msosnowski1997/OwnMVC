<div class="modal modal-primary" id="ms-account-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog animated zoomIn animated-3x" role="document">
    <div class="modal-content">
      <div class="modal-header d-block shadow-2dp no-pb">
        <button type="button" class="close d-inline pull-right mt-2" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">
            <i class="zmdi zmdi-close"></i>
          </span>
        </button>
        <div class="modal-title text-center">
          <span class="ms-logo ms-logo-white ms-logo-sm mr-1">M</span>
          <h3 class="no-m ms-site-title">
            Tenis<span>Stołowy</span>
          </h3>
        </div>
        <div class="modal-header-tabs">
          <ul class="nav nav-tabs nav-tabs-full nav-tabs-3 nav-tabs-primary" role="tablist">
            <li class="nav-item" role="presentation">
              <a href="#ms-login-tab" aria-controls="ms-login-tab" role="tab" data-toggle="tab" class="nav-link active withoutripple">
                <i class="zmdi zmdi-account"></i> Logowanie</a>
            </li>
            <li class="nav-item" role="presentation">
              <a href="#ms-register-tab" aria-controls="ms-register-tab" role="tab" data-toggle="tab" class="nav-link withoutripple">
                <i class="zmdi zmdi-account-add"></i> Rejestracja</a>
            </li>
            <li class="nav-item" role="presentation">
              <a href="#ms-recovery-tab" aria-controls="ms-recovery-tab" role="tab" data-toggle="tab" class="nav-link withoutripple">
                <i class="zmdi zmdi-key"></i> Odzyskiwanie</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="modal-body">
        <div class="tab-content">
          <div role="tabpanel" class="tab-pane fade active show" id="ms-login-tab">
            
            <!-- login form -->
            {include file="elements/forms/login-form.tpl"}

          </div>
          <div role="tabpanel" class="tab-pane fade" id="ms-register-tab">
          
            <!-- register form -->
            {include file="elements/forms/register-form.tpl"}
          </div>
          <div role="tabpanel" class="tab-pane fade" id="ms-recovery-tab">
            <fieldset>
              <div class="form-group label-floating">
                <div class="input-group">
                  <span class="input-group-addon">
                    <i class="zmdi zmdi-account"></i>
                  </span>
                  <label class="control-label" for="ms-form-user">Nazwa użytkownika</label>
                  <input type="text" id="ms-form-user" class="form-control" value="Work in progress..." disabled=""> </div>
              </div>
              <div class="form-group label-floating">
                <div class="input-group">
                  <span class="input-group-addon">
                    <i class="zmdi zmdi-email"></i>
                  </span>
                  <label class="control-label" for="ms-form-email">Email</label>
                  <input type="email" id="ms-form-email" class="form-control" value="Work in progress..." disabled=""> </div>
              </div>
              <button class="btn btn-raised btn-block btn-primary">Zresetuj hasło</button>
            </fieldset>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
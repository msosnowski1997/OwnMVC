<div class="ms-slidebar sb-slidebar sb-left sb-style-overlay" id="ms-slidebar">
  <div class="sb-slidebar-container">
    <header class="ms-slidebar-header">
      <div class="ms-slidebar-login">
{if $user_data['user_permissions']<2}
        <a href="{{$base_site}}/logowanie" class="withripple">
          <i class="zmdi zmdi-account"></i> Zaloguj się</a>
        <a href="{{$base_site}}/rejestracja" class="withripple">
          <i class="zmdi zmdi-account-add"></i> Dołącz</a>
{else}
<div class="btn-group">
  <button type="button" class="btn btn btn-white dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   <i class="zmdi zmdi-account"></i>{{$user_data['user_name']}} <i class="zmdi zmdi-chevron-down right"></i>
  </button>
  {* <button type="button" class="btn-circle btn-circle-white btn-circle-default btn-circle-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-account"></i></button> *}
  <ul class="dropdown-menu dropdown-menu-dark">
    <button type="button" class="btn btn btn-white btn-block align-left">
     <i class="zmdi zmdi-account"></i>{{$user_data['user_name']}} <i class="zmdi zmdi-chevron-up right"></i>
    </button>
    <li><a class="dropdown-item" href="#">Link 1</a></li>
    <li><a class="dropdown-item" href="javascript:void(0)">Link 2</a></li>
    <li><a class="dropdown-item" href="javascript:void(0)">Link 3</a></li>
    <li role="separator" class="dropdown-divider"></li>
    <li><a class="dropdown-item" href="javascript:void(0)">Odseparowany link</a></li>
  </ul>
</div>
        <a href="{{$base_site}}/wyloguj" class="withripple">
          <i class="zmdi zmdi-power"></i> Wyloguj</a>
{/if}
      </div>
      <div class="ms-slidebar-title">
        <form class="search-form" action="{$base_site}/szukaj">
          <input id="search-box-slidebar" type="text" class="search-input" placeholder="Szukaj..." name="q" />
          <label for="search-box-slidebar">
            <i class="zmdi zmdi-search"></i>
          </label>
        </form>
        <div class="ms-slidebar-t">
          <span class="ms-logo ms-logo-sm">M</span>
          <h3>Tenis
            <span>Stołowy</span>
          </h3>
        </div>
      </div>
    </header>


    <ul class="ms-slidebar-menu" id="slidebar-menu" role="tablist" aria-multiselectable="true">
      <li>
        <a class="link" href="{{$base_site}}/admin">
          <i class="zmdi zmdi-home"></i> Panel Główny</a>
      </li>
      <li>
        <a class="link" href="{{$base_site}}/admin/uzytkownicy">
          <i class="zmdi zmdi-accounts"></i> Użytkownicy</a>
      </li>
      <li>
        <a class="link" href="{{$base_site}}/admin/wyglad">
          <i class="zmdi zmdi-eye"></i> Wygląd</a>
      </li>
      <li>
        <a class="link" href="{{$base_site}}/admin/ustawienia-menu">
          <i class="zmdi zmdi-menu"></i> Ustawienia menu</a>
      </li>



      <li class="card" role="tab" id="sch1">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#slidebar-menu" href="#sc1" aria-expanded="false" aria-controls="sc1">
          <i class="zmdi zmdi-home"></i> Użytkownicy </a>
        <ul id="sc1" class="card-collapse collapse" role="tabpanel" aria-labelledby="sch1">
          <li>
            <a href="{{$base_site}}/admin/uzytkownicy">Lista użytkowników</a>
          </li>
          <li>
            <a href="home-generic-2.html">Superliga</a>
          </li>
            {* <li class="card" role="tab" id="sch3">
              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#sc1" href="#sc3" aria-expanded="false" aria-controls="sc3">
                <i class="zmdi zmdi-home"></i> 3 submenu </a>
              <ul id="sc3" class="card-collapse collapse" role="tabpanel" aria-labelledby="sch3">
                <li>
                  <a href="index.html"> 333 Wszystkie ligi</a>
                </li>
                <li>
                  <a href="home-generic-2.html">333 Superliga</a>
                </li>
                <li>
                  <a href="home-landing.html">333 2. liga kobiet</a>
                </li>
                <li>
                  <a href="home-landing.html">333 2. liga mężczyzn</a>
                </li>
                <li>
                  <a href="home-landing3.html">333 3. liga mężczyzn</a>
                </li>
                <li>
                  <a href="home-shop.html">333 34. liga mężczyzn(gr. A)</a>
                </li>
              </ul>
            </li> *}
          <li>
            <a href="home-landing.html">2. liga kobiet</a>
          </li>
          <li>
            <a href="home-landing.html">2. liga mężczyzn</a>
          </li>
          <li>
            <a href="home-landing3.html">3. liga mężczyzn</a>
          </li>
          <li>
            <a href="home-shop.html">4. liga mężczyzn(gr. A)</a>
          </li>
          <li>
            <a href="home-generic-2.html">Superliga</a>
          </li>
          <li>
            <a href="home-landing.html">2. liga kobiet</a>
          </li>
          <li>
            <a href="home-landing.html">2. liga mężczyzn</a>
          </li>
          <li>
            <a href="home-landing3.html">3. liga mężczyzn</a>
          </li>
          <li>
            <a href="home-shop.html">4. liga mężczyzn(gr. A)</a>
          </li>
        </ul>
      </li>
    </ul>
    <div class="ms-slidebar-social ms-slidebar-block">
      <h4 class="ms-slidebar-block-title">Social Links</h4>
      <div class="ms-slidebar-social">
        <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-facebook">
          <i class="zmdi zmdi-facebook"></i>
          <span class="badge-pill badge-pill-pink">12</span>
          <div class="ripple-container"></div>
        </a>
        <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-twitter">
          <i class="zmdi zmdi-twitter"></i>
          <span class="badge-pill">4</span>
          <div class="ripple-container"></div>
        </a>
        <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-google">
          <i class="zmdi zmdi-google"></i>
          <div class="ripple-container"></div>
        </a>
        <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-instagram">
          <i class="zmdi zmdi-instagram"></i>
          <div class="ripple-container"></div>
        </a>
      </div>
    </div>
  </div>
</div>
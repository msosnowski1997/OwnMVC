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
    <li><a class="dropdown-item" href="{$base_site}/profil/{$user_data['user_alias']}">Profil</a></li>
    <li><a class="dropdown-item" href="{$base_site}/ustawienia">Ustawienia</a></li>
    <li><a class="dropdown-item" href="javascript:void(0)">Link 3</a></li>
    <li role="separator" class="dropdown-divider"></li>
    <li><a class="dropdown-item" href="{$base_site}/panel-uzytkownika">Panel użytkownika</a></li>
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
        <a class="link" href="/">
          <i class="zmdi zmdi-home"></i> Strona Główna</a>
      </li>
      <li class="card" role="tab" id="sch1">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#slidebar-menu" href="#sc1" aria-expanded="false" aria-controls="sc1">
          <i class="zmdi zmdi-home"></i> Ligi </a>
        <ul id="sc1" class="card-collapse collapse" role="tabpanel" aria-labelledby="sch1">
          <li>
            <a href="index.html">Wszystkie ligi</a>
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
      <li class="card" role="tab" id="sch2">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#slidebar-menu" href="#sc2" aria-expanded="false" aria-controls="sc2">
          <i class="zmdi zmdi-home"></i> Ligi </a>
        <ul id="sc2" class="card-collapse collapse" role="tabpanel" aria-labelledby="sch2">
          <li>
            <a href="index.html">Wszystkie ligi</a>
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
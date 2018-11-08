{if $themeHEADER != "nohead"}
<header class="ms-header ms-header-{$themeHEADER}">
  <!--ms-header-dark-->
  <div class="container container-full">
    <div class="ms-title">
      <a href="{{$base_site}}">
        <!-- <img src="data/resources/img/demo/logo-header.png" alt=""> -->
        <span class="ms-logo animated zoomInDown animation-delay-5">M</span>
        <h1 class="animated fadeInRight animation-delay-6">Tenis
          <span>Stołowy</span>
        </h1>
      </a>
    </div>
    <div class="header-right">
    <a href="javascript:void(0)" class="btn-circle btn-circle-primary no-focus animated zoomInDown animation-delay-8">
        <span class="badge-pill ">3</span>
        <i class="zmdi zmdi-comments"></i>
    </a>
    <a href="javascript:void(0)" class="btn-circle btn-circle-primary no-focus animated zoomInDown animation-delay-8">
        <span class="badge-pill ">5</span>
        <i class="zmdi zmdi-notifications"></i>
    </a>
{if $user_data['user_permissions'] < 2}
      <a href="javascript:void(0)" class="btn-circle btn-circle-primary no-focus animated zoomInDown animation-delay-8" data-toggle="modal" data-target="#ms-account-modal">
        <span class="badge-pill badge-pill-pink">5</span>
        <i class="zmdi zmdi-account"></i>
      </a>
{/if}
      <form class="search-form animated zoomInDown animation-delay-9" action="{$base_site}/szukaj">
        <input id="search-box" type="text" class="search-input" placeholder="Szukaj..." name="q" />
        <label for="search-box">
          <i class="zmdi zmdi-search"></i>
        </label>
      </form>
      <a href="javascript:void(0)" class="btn-ms-menu btn-circle btn-circle-primary ms-toggle-left animated zoomInDown animation-delay-10">
        <i class="zmdi zmdi-menu"></i>
      </a>
    </div>
  </div>
</header>
{/if}
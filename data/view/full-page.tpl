<!DOCTYPE html>
<html lang="pl">
    {include file="elements/head.tpl"}
  <body>
    {include file="elements/preload.tpl"}

    <div class="bg-full-page ms-hero-bg-dark ms-hero-img-airplane back-fixed">
      <div class="mw-500 absolute-center">
        <div class="card color-dark shadow-6dp animated fadeIn animation-delay-7">
          <div class="ms-hero-bg-primary ms-hero-img-mountain">
            <h2 class="text-center no-m pt-4 pb-4 color-white index-1">{{$title}}</h2>
          </div>
          
          <div class="card-block">
            {include file="elements/forms/$content" fullpage=true}
          </div>
        </div>
        <div class="text-center animated fadeInUp animation-delay-7">
          <a href="{{$base_site}}" class="btn btn-white">
            <i class="zmdi zmdi-home"></i> STRONA GŁÓWNA</a>
        </div>
      </div>
    </div>
    
    {include file="elements/scripts.tpl"}
  </body>
</html>
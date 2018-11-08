<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8 col-md-offset-2">
      <div class="card animated fadeInUp animation-delay-7 color-primary withripple">
        <div class="card-block-big color-dark">
          <div class="text-center">
            <h1 class="color-primary">Błąd 404</h1>
            <h2>Strona nie odnaleziona</h2>
            <p class="lead lead-sm">Coś poszło nie tak.
              <br>Możesz zatrudnić nasze roboty do poszukiwań...</p>
            <a href="{{$base_site}}" class="btn btn-primary btn-raised">
              <i class="zmdi zmdi-home"></i> Wróć na stronę główną</a>
          </div>
        </div>
      </div>
      <div class="card animated fadeInUp animation-delay-9 color-primary withripple">
        <div class="card-block-big color-dark">
          <h2 class="color-primary">Szukaj</h2>
          <p class="lead">Użyj wyszukiwarki i znajdź to co chcesz.</p>
          <form action="{$base_site}/szukaj">
          <div class="form-group label-floating">
            <label class="control-label" for="addon2">Szukaj...</label>
            <input type="text" id="addon2" name="q" class="form-control"> </div>
          <button type="submit" class="btn btn-primary btn-raised btn-block">
            <i class="zmdi zmdi-search"></i> Szukaj</a>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
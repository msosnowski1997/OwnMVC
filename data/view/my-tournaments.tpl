<div class="ms-hero-page-override ms-hero-img-city ms-hero-bg-primary">
  <div class="container">
    <div class="text-center">
      <h1 class="no-m ms-site-title color-white center-block ms-site-title-lg mt-2 animated zoomInDown animation-delay-5">Moje turnieje</span>
      </h1>
    </div>
  </div>
</div>

<div class="container">
  <div class="card card-hero animated slideInUp animation-delay-8 mb-6">
    <div class="card-block">
      {* Filters *}
      <div class="ms-collapse" id="accordion" role="tablist" aria-multiselectable="true">
        <div class="mb-0 card card-primary">
          <div class="card-header" role="tab" id="headingOne">
            <h4 class="card-title ms-rotate-icon">
              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                 <i class="zmdi zmdi-filter-list"></i> Filtry
              </a>
            </h4>
          </div>
          <div id="collapseOne" class="card-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
            <div class="card-block">
              <div class="row">
                <div class="col-lg-8">
                  <form class="form-horizontal" id="Filters">
                    <div class="row">
                      <div class="col-sm-6">
                        <fieldset>
                          <h4 class="mb-1 no-mt">Związany jako:</h4>
                          <div class="form-group no-mt">
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" value=".smartphone"> Uczestnik </label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" value=".tablet"> Sędzia </label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" value=".laptop"> Organizator </label>
                            </div>
                          </div>
                        </fieldset>
                      </div>
                      <div class="col-sm-6">
                        <fieldset>
                          <h4 class="mb-1 no-mt">Czas</h4>
                          <div class="form-group no-mt">
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" value=".apple"> Nadchodzące </label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" value=".microsoft"> Trwające teraz </label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" value=".samsung"> Zakończone </label>
                            </div>
                          </div>
                        </fieldset>
                      </div>
                    </div>
                  </form>
                </div>
                <div class="col-lg-4">
                  <form class="form-horizontal">
                    <h4 class="mb-1 no-mt">Sort by</h4>
                    <select id="SortSelect" class="form-control selectpicker">
                      <option value="random">Ostatnia aktywność</option>
                      <option value="price:asc">Nazwa a-z</option>
                      <option value="price:desc">Nazwa z-a</option>
                      <option value="date:asc">typ związania</option>
                    </select>
                  </form>
                  <button class="btn btn-danger btn-block no-mb mt-2" id="Reset">
                    <i class="zmdi zmdi-delete"></i> Clear Filters</button>
                </div>
              </div>
              <hr class="color">
            </div>
          </div>
        </div>
      </div>
      {* /Filters *}

      <table class="table table-no-border table-striped table-hover">
        <thead>
          <tr>
            <th>Nazwa</th>
            <th>Związany jako:</th>
            <th>Nazwa Użytkownika</th>
            <th>Adres e-mail</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          
        </tbody>
      </table>



    </div>
  </div>
</div>
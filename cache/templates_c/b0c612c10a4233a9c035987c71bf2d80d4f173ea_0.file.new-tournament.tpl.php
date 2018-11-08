<?php
/* Smarty version 3.1.30, created on 2018-01-13 23:25:23
  from "C:\xampp\htdocs\data\view\new-tournament.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a5a87532a3578_54660624',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b0c612c10a4233a9c035987c71bf2d80d4f173ea' => 
    array (
      0 => 'C:\\xampp\\htdocs\\data\\view\\new-tournament.tpl',
      1 => 1515882320,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a5a87532a3578_54660624 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="ms-hero-page-override ms-hero-img-city ms-hero-bg-primary">
  <div class="container">
    <div class="text-center">
      <h1 class="no-m ms-site-title color-white center-block ms-site-title-lg mt-2 animated zoomInDown animation-delay-5">Kreator turnieju</span>
      </h1>
    </div>
  </div>
</div>
<div class="container">
  <div class="card card-hero animated slideInUp animation-delay-8 mb-6">
    <div class="card-block">
      <form method="post" class="form-horizontal">
        <fieldset>
          <legend>Główne informacje</legend>
          <div class="form-group row">
            <label for="inputEmail" autocomplete="false" class="col-lg-2 control-label">Nazwa turnieju</label>
            <div class="col-lg-10">
                <input type="email" class="form-control" id="inputEmail" placeholder="Nazwa Turnieju">
            </div>
          </div>

          <div class="form-group row">
            <label class="col-lg-2 control-label" for="tournament-url">Adres URL</label>
            <div class="input-group col-lg-10">
              <span class="input-group-addon">strona.pl/turniej/</span>
              <input type="text" id="tournament-url" name="tournament-url" maxlength="20" class="form-control">
            </div>
          </div>


          <div class="form-group row justify-content-end mb-4">
            <label for="tournament-description" class="col-lg-2 control-label">Opis turnieju</label>

            <div class="col-lg-10">
              <textarea class="form-control" rows="8" id="tournament-description" name="tournament-description"></textarea>
              <span class="help-block">Tutaj opcjonalnie możesz stworzyć opis turnieju.</span>
            </div>
          </div>
        
          <legend>Informacje o turnieju</legend>
          
          

          <div class="form-group row justify-content-end">
            <label class="col-lg-2 control-label">Typ rozgrywek</label>

            <div class="col-lg-10">
              <div class="radio radio-primary">
                <label>
                  <input type="radio" name="tournament-type" id="single-stage" value="single-stage" checked="" onClick="$('div#two-stage-form-group').slideUp(300);"> Turniej jednostopniowy (Tylko faza eliminacji)
                </label>
              </div>
              <div class="radio radio-primary">
                <label>
                  <input type="radio" name="tournament-type" id="two-stage" value="two-stage" onClick="$('div#two-stage-form-group').slideDown(300);"> Turniej dwustopniowy (Faza grupowa, a potem eliminacje)
                </label>
              </div>
            </div>
          </div>

          

          <div id="two-stage-form-group" style="display: none;">
            <hr class="dashed">
            <div class="form-group row justify-content-end">
              <label for="select111" class="col-lg-2 control-label">Faza Grupowa</label>

              <div class="col-lg-10">
                <select id="select111" class="form-control selectpicker" data-dropup-auto="false">
                  <option>Pojedyncza eliminacja</option>
                  <option>Podwójna eliminacja</option>
                </select>
              </div>
            </div>

            <div class="form-group row">
              <div class="col-3 col-sm-2 col-lg-1 offset-lg-2">
                  <input type="number" class="form-control" id="" value="4">
              </div>
              <div class="col-9 col-sm-10 col-lg-9">
                <span> uczestników w grupie</span>
              </div>
            </div>

            <div class="form-group row">
              <div class="col-3 col-sm-2 col-lg-1 offset-lg-2">
                  <input type="number" class="form-control" id="" value="2">
              </div>
              <div class="col-9 col-sm-10 col-lg-9">
                <span> uczestników awansujących z grupy</span>
              </div>
            </div>

            <hr class="dashed">
          </div>
          
          <div class="form-group row no-mb">
              <label for="select111" class="col-lg-2 control-label">Ostatni Etap</label>

              <div class="col-lg-10">
                <select id="select111" class="form-control selectpicker" data-dropup-auto="false">
                  <option>Pojedyncza eliminacja</option>
                  <option>Podwójna eliminacja</option>
                </select>
              </div>
            </div>
            <div class="form-group row no-mt mb-4">
                <div class="col-lg-10 offset-lg-2">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> Dołącz mecz o trzecie miejsce
                        </label>
                    </div>
                </div>
            </div>


          <legend>Rejestracja uczestników</legend>

          <div class="form-group row no-mt mb-4">
            <label for="maxparticipantsbool" class="col-lg-2 control-label">Ogranicz liczbę uczestników</label>
            <div class="col-2 col-md-1">
              <div class="checkbox">
                <label>
                  <input type="checkbox" onClick="if($(this).is(':checked') == true) $('input#maxparticipants').removeAttr('disabled').show(300);
                  else $('input#maxparticipants').attr('disabled', 'disabled').hide(300);">&nbsp;
                </label>
              </div>
            </div>
            <input type="number" class="form-control col-2 col-md-2 col-lg-1" id="maxparticipants" value="32" max="128" disabled="disabled" style="display: none;">
          </div>



          <div class="form-group row justify-content-end">
            <label class="col-lg-2 control-label">Typ uczestnika</label>

            <div class="col-lg-10">
              <div class="radio radio-primary">
                <label>
                  <input type="radio" name="optionsRadios3" id="optionsRadios31" value="option1" checked="" onClick="$('div#team-particpant-number').slideUp(300);"> Zawodnik
                </label>
              </div>
              <div class="radio radio-primary">
                <label>
                  <input type="radio" name="optionsRadios3" id="optionsRadios32" value="option2" disabled="disabled" onClick="$('div#team-particpant-number').slideDown(300);"> Drużyna
                </label>
              </div>
            </div>
          </div>

          <div id="team-particpant-number" style="display: none;">
            <hr class="dashed">
              <div class="form-group row">
                <div class="col-3 col-sm-2 col-lg-1 offset-lg-2">
                    <input type="number" class="form-control" id="">
                </div>
                <div class="col-9 col-sm-10 col-lg-9">
                  <span> zawodników w drużynie</span>
                </div>
              </div>


            <hr class="dashed">
          </div>
          
          <div class="form-group row justify-content-end">
            <label class="col-lg-2 control-label">Dołączanie uczestników</label>

            <div class="col-lg-10">
              <div class="radio radio-primary">
                <label>
                  <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked=""> Tylko na zaproszenie
                </label>
              </div>
              <div class="radio radio-primary">
                <label>
                  <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"> Samodzielna rejestracja (zostanie utworzona strona do rejestracji)
                </label>
              </div>
            </div>
          </div>

          
          <div class="form-group row justify-content-end mb-4">
            <label class="col-lg-2 control-label">Potwierdzenie uczestnika</label>

            <div class="col-lg-10">
              <div class="radio radio-primary">
                <label>
                  <input type="radio" name="optionsRadios2" id="optionsRadios21" value="option1" checked=""> Zapisz uczestnika po akceptacji organizatora
                </label>
              </div>
              <div class="radio radio-primary">
                <label>
                  <input type="radio" name="optionsRadios2" id="optionsRadios22" value="option2"> Automatyczne zapisywanie uczestników
                </label>
              </div>
            </div>
          </div>
        </fieldset>
        <button class="btn btn-raised btn-primary btn-block">
          Zapisz i kontynuuj
          <i class="zmdi zmdi-long-arrow-right no-mr ml-1"></i>
          <div class="ripple-container"></div>
        </button>
      </form>
    </div>
  </div>
</div>

<?php }
}

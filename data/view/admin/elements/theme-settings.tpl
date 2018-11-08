

<div class="container">
  <div class="panel panel-dark panel-black animated flipInX animation-delay-4 ">
    <ul class="nav nav-tabs nav-tabs-full nav-tabs-3 nav-tabs-transparent indicator-primary " role="tablist">
      <li class="nav-item" role="presentation">
        <a href="#color-options" aria-controls="color-options" role="tab" data-toggle="tab" class="nav-link active withoutripple">
          <i class="zmdi zmdi-invert-colors"></i> Ustawienia koloru</a>
      </li>
      <li class="nav-item" role="presentation">
        <a href="#header-options" aria-controls="header-options" role="tab" data-toggle="tab" class="nav-link withoutripple">
          <i class="zmdi zmdi-view-compact"></i> Ustawienia nagłówka</a>
      </li>
      <li class="nav-item" role="presentation">
        <a href="#navbar-options" aria-controls="navbar-options" role="tab" data-toggle="tab" class="nav-link withoutripple">
          <i class="zmdi zmdi-menu"></i> Ustawienia paska menu</a>
      </li>
    </ul>
    <div class="panel-body">
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane fade active show col-sm-12" id="color-options">
          {foreach from=$arrayofcolors item=item}
            {section name=intense start=300 loop=801 step=100}
              <a onclick="changeThemeColor('{$item}',{$smarty.section.intense.index})" href="javascript:void(0);" class="ms-color-box ms-color-box-primary {$item} c{$smarty.section.intense.index} animated fadeInDown animation-delay-2"">{$item}</a>
            {/section}
          {/foreach}
        </div>

        <div role="tabpanel" class="tab-pane fade show col-sm-12" id="header-options">
          <div class="form-group row justify-content-end">
            <div class="col-sm-12">
                <div class="radio radio-primary" id="headerstyle">
                    <label class="animated fadeInRightTiny animation-delay-1">
                        <input type="radio" name="headerstyle" value="light" onclick="changeHeaderStyle('light')" checked=""> Jasny
                    </label>
                </div>
                <div class="radio radio-primary">
                    <label class="animated fadeInRightTiny animation-delay-2">
                        <input type="radio" name="headerstyle" value="primary" onclick="changeHeaderStyle('primary')"> Kolor wiodący
                    </label>
                </div>
                <div class="radio radio-primary">
                    <label class="animated fadeInRightTiny animation-delay-3">
                        <input type="radio" name="headerstyle" value="dark" onclick="changeHeaderStyle('dark')"> Ciemny
                    </label>
                </div>
                <div class="radio radio-primary">
                    <label class="animated fadeInRightTiny animation-delay-4">
                        <input type="radio" name="headerstyle" value="none" onclick="changeHeaderStyle('nohead')"> Brak nagłówka
                    </label>
                </div>
            </div>
          </div>
        </div>

        <div role="tabpanel" class="tab-pane fade show col-sm-12" id="navbar-options">
          <div class="form-group row justify-content-end">
            <div class="col-sm-12">
              <div class="radio radio-primary" id="navbarstyle">
                  <label class="animated fadeInRightTiny animation-delay-1">
                      <input type="radio" name="navbarstyle" value="light" onclick="changeNavbarStyle('white')" checked=""> Jasny
                  </label>
              </div>
              <div class="radio radio-primary">
                  <label class="animated fadeInRightTiny animation-delay-2">
                      <input type="radio" name="navbarstyle" value="primary" onclick="changeNavbarStyle('primary')"> Kolor wiodący
                  </label>
              </div>
              <div class="radio radio-primary">
                  <label class="animated fadeInRightTiny animation-delay-3">
                      <input type="radio" name="navbarstyle" value="dark" onclick="changeNavbarStyle('dark')"> Ciemny
                  </label>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  function changeThemeColor(gcolor,gintense)
  {
    $.ajax({
    type     : "POST",
    url      : "{$base_site}/admin/wyglad",
    data     : {
        color : gcolor,
        intense : gintense
    },
    success: function(ret) {
        if(ret)
        {
          Snackbar.show({
            text: 'Kolor strony został pomyślnie zmieniony.',
            actionTextColor: 'green',
            pos: 'bottom-left',
            actionText: 'Zamknij'
          }); 
        }
    },
    error: function(jqXHR, errorText, errorThrown) {
      Snackbar.show({
        text: 'Błąd: ' + errorText + '.',
        pos: 'bottom-left',
        actionTextColor: 'red',
        actionText: 'Zamknij'
      }); 
    }
    });
  }

  function changeHeaderStyle(style)
  {
    $.ajax({
    type     : "POST",
    url      : "{$base_site}/admin/wyglad",
    data     : {
        headerstyle : style
    },
    success: function(ret) {
        if(ret)
        {
          Snackbar.show({
            text: 'Nagłówek został pomyślnie zmieniony.',
            actionTextColor: 'green',
            pos: 'bottom-left',
            actionText: 'Zamknij'
          }); 
        }
    },
    error: function(jqXHR, errorText, errorThrown) {
      Snackbar.show({
        text: 'Błąd: ' + errorText + '.',
        pos: 'bottom-left',
        actionTextColor: 'red',
        actionText: 'Zamknij'
      }); 
    }
    });
  }

  function changeNavbarStyle(style)
  {
    $.ajax({
    type     : "POST",
    url      : "{$base_site}/admin/wyglad",
    data     : {
        navbarstyle : style
    },
    success: function(ret) {
        if(ret)
        {
          Snackbar.show({
            text: 'Pasek Nawigacyjny został pomyślnie zmieniony.',
            actionTextColor: 'green',
            pos: 'bottom-left',
            actionText: 'Zamknij'
          }); 
        }
    },
    error: function(jqXHR, errorText, errorThrown) {
      Snackbar.show({
        text: 'Błąd: ' + errorText + '.',
        pos: 'bottom-left',
        actionTextColor: 'red',
        actionText: 'Zamknij'
      }); 
    }
    });
  }
  
</script>
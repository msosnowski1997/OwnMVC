<?php
/* Smarty version 3.1.30, created on 2018-01-13 21:46:14
  from "C:\xampp\htdocs\data\view\admin\elements\theme-settings.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a5a70163b81d1_33616716',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b9283f121383bc737e04aefe95beee78561c94fa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\data\\view\\admin\\elements\\theme-settings.tpl',
      1 => 1515876322,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a5a70163b81d1_33616716 (Smarty_Internal_Template $_smarty_tpl) {
?>


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
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrayofcolors']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
            <?php
$__section_intense_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_intense']) ? $_smarty_tpl->tpl_vars['__smarty_section_intense'] : false;
$_smarty_tpl->tpl_vars['__smarty_section_intense'] = new Smarty_Variable(array());
if (true) {
for ($__section_intense_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_intense']->value['index'] = 300; $__section_intense_0_iteration <= 6; $__section_intense_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_intense']->value['index'] += 100){
?>
              <a onclick="changeThemeColor('<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
',<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_intense']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_intense']->value['index'] : null);?>
)" href="javascript:void(0);" class="ms-color-box ms-color-box-primary <?php echo $_smarty_tpl->tpl_vars['item']->value;?>
 c<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_intense']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_intense']->value['index'] : null);?>
 animated fadeInDown animation-delay-2""><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</a>
            <?php
}
}
if ($__section_intense_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_intense'] = $__section_intense_0_saved;
}
?>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

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
<?php echo '<script'; ?>
 type="text/javascript">
  function changeThemeColor(gcolor,gintense)
  {
    $.ajax({
    type     : "POST",
    url      : "<?php echo $_smarty_tpl->tpl_vars['base_site']->value;?>
/admin/wyglad",
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
    url      : "<?php echo $_smarty_tpl->tpl_vars['base_site']->value;?>
/admin/wyglad",
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
    url      : "<?php echo $_smarty_tpl->tpl_vars['base_site']->value;?>
/admin/wyglad",
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
  
<?php echo '</script'; ?>
><?php }
}

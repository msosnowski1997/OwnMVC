<?php
/* Smarty version 3.1.30, created on 2018-02-17 23:39:57
  from "C:\xampp\htdocs\turnieje\data\view\admin\elements\left-menu.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a88af3de61da3_13102117',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ffde01dfc768dbdc83e26bcf118b7380b7aabfb6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\turnieje\\data\\view\\admin\\elements\\left-menu.tpl',
      1 => 1518907195,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a88af3de61da3_13102117 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="ms-slidebar sb-slidebar sb-left sb-style-overlay" id="ms-slidebar">
  <div class="sb-slidebar-container">
    <header class="ms-slidebar-header">
      <div class="ms-slidebar-login">
<?php if ($_smarty_tpl->tpl_vars['user_data']->value['user_permissions'] < 2) {?>
        <a href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['base_site']->value;
$_prefixVariable1=ob_get_clean();
echo $_prefixVariable1;?>
/logowanie" class="withripple">
          <i class="zmdi zmdi-account"></i> Zaloguj się</a>
        <a href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['base_site']->value;
$_prefixVariable2=ob_get_clean();
echo $_prefixVariable2;?>
/rejestracja" class="withripple">
          <i class="zmdi zmdi-account-add"></i> Dołącz</a>
<?php } else { ?>
<div class="btn-group">
  <button type="button" class="btn btn btn-white dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   <i class="zmdi zmdi-account"></i><?php ob_start();
echo $_smarty_tpl->tpl_vars['user_data']->value['user_name'];
$_prefixVariable3=ob_get_clean();
echo $_prefixVariable3;?>
 <i class="zmdi zmdi-chevron-down right"></i>
  </button>
  
  <ul class="dropdown-menu dropdown-menu-dark">
    <button type="button" class="btn btn btn-white btn-block align-left">
     <i class="zmdi zmdi-account"></i><?php ob_start();
echo $_smarty_tpl->tpl_vars['user_data']->value['user_name'];
$_prefixVariable4=ob_get_clean();
echo $_prefixVariable4;?>
 <i class="zmdi zmdi-chevron-up right"></i>
    </button>
    <li><a class="dropdown-item" href="#">Link 1</a></li>
    <li><a class="dropdown-item" href="javascript:void(0)">Link 2</a></li>
    <li><a class="dropdown-item" href="javascript:void(0)">Link 3</a></li>
    <li role="separator" class="dropdown-divider"></li>
    <li><a class="dropdown-item" href="javascript:void(0)">Odseparowany link</a></li>
  </ul>
</div>
        <a href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['base_site']->value;
$_prefixVariable5=ob_get_clean();
echo $_prefixVariable5;?>
/wyloguj" class="withripple">
          <i class="zmdi zmdi-power"></i> Wyloguj</a>
<?php }?>
      </div>
      <div class="ms-slidebar-title">
        <form class="search-form" action="<?php echo $_smarty_tpl->tpl_vars['base_site']->value;?>
/szukaj">
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
        <a class="link" href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['base_site']->value;
$_prefixVariable6=ob_get_clean();
echo $_prefixVariable6;?>
/admin">
          <i class="zmdi zmdi-home"></i> Panel Główny</a>
      </li>
      <li>
        <a class="link" href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['base_site']->value;
$_prefixVariable7=ob_get_clean();
echo $_prefixVariable7;?>
/admin/uzytkownicy">
          <i class="zmdi zmdi-accounts"></i> Użytkownicy</a>
      </li>
      <li>
        <a class="link" href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['base_site']->value;
$_prefixVariable8=ob_get_clean();
echo $_prefixVariable8;?>
/admin/wyglad">
          <i class="zmdi zmdi-eye"></i> Wygląd</a>
      </li>
      <li>
        <a class="link" href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['base_site']->value;
$_prefixVariable9=ob_get_clean();
echo $_prefixVariable9;?>
/admin/ustawienia-menu">
          <i class="zmdi zmdi-menu"></i> Ustawienia menu</a>
      </li>



      <li class="card" role="tab" id="sch1">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#slidebar-menu" href="#sc1" aria-expanded="false" aria-controls="sc1">
          <i class="zmdi zmdi-home"></i> Użytkownicy </a>
        <ul id="sc1" class="card-collapse collapse" role="tabpanel" aria-labelledby="sch1">
          <li>
            <a href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['base_site']->value;
$_prefixVariable10=ob_get_clean();
echo $_prefixVariable10;?>
/admin/uzytkownicy">Lista użytkowników</a>
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
</div><?php }
}

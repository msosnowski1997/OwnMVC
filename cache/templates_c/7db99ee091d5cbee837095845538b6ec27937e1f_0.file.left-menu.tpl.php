<?php
/* Smarty version 3.1.30, created on 2017-12-13 02:43:18
  from "C:\xampp\htdocs\data\view\admin\elements\left-menu.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3085b618a1d6_20479216',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7db99ee091d5cbee837095845538b6ec27937e1f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\data\\view\\admin\\elements\\left-menu.tpl',
      1 => 1512503547,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a3085b618a1d6_20479216 (Smarty_Internal_Template $_smarty_tpl) {
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
        <a class="link" href="/admin">
          <i class="zmdi zmdi-home"></i> Panel Główny</a>
      </li>
      <li>
        <a class="link" href="/admin/uzytkownicy">
          <i class="zmdi zmdi-accounts"></i> Użytkownicy</a>
      </li>
      <li>
        <a class="link" href="/admin/wyglad">
          <i class="zmdi zmdi-eye"></i> Wygląd</a>
      </li>
      <li>
        <a class="link" href="/admin/ustawienia-menu">
          <i class="zmdi zmdi-menu"></i> Ustawienia menu</a>
      </li>



      <li class="card" role="tab" id="sch1">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#slidebar-menu" href="#sc1" aria-expanded="false" aria-controls="sc1">
          <i class="zmdi zmdi-home"></i> Użytkownicy </a>
        <ul id="sc1" class="card-collapse collapse" role="tabpanel" aria-labelledby="sch1">
          <li>
            <a href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['base_site']->value;
$_prefixVariable6=ob_get_clean();
echo $_prefixVariable6;?>
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

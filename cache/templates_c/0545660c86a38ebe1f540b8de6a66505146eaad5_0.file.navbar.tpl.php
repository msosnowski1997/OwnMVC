<?php
/* Smarty version 3.1.30, created on 2018-01-14 12:33:17
  from "C:\xampp\htdocs\data\view\elements\navbar.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a5b3ffdb6c7c1_26473587',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0545660c86a38ebe1f540b8de6a66505146eaad5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\data\\view\\elements\\navbar.tpl',
      1 => 1515929596,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a5b3ffdb6c7c1_26473587 (Smarty_Internal_Template $_smarty_tpl) {
?>
<nav class="navbar navbar-expand-md  navbar-static ms-navbar ms-navbar-<?php echo $_smarty_tpl->tpl_vars['themeNAVBAR']->value;?>
">
  <div class="container container-full">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.html">
        <!-- <img src="data/resources/img/demo/logo-navbar.png" alt=""> -->
        <span class="ms-logo ms-logo-sm">M</span>
        <span class="ms-title">Tenis
          <strong>Stołowy</strong>
        </span>
      </a>
    </div>
    <div class="collapse navbar-collapse" id="ms-navbar">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a href="<?php echo $_smarty_tpl->tpl_vars['base_site']->value;?>
" class="nav-link animated fadeIn animation-delay-7">Strona główna
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo $_smarty_tpl->tpl_vars['base_site']->value;?>
/aktualnosci" class="nav-link animated fadeIn animation-delay-8">Aktualności
          </a>
        </li>
        <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle animated fadeIn animation-delay-9" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-name="portfolio">Ligi
            <i class="zmdi zmdi-chevron-down"></i>
          </a>
          <ul class="dropdown-menu">
            <li>
              <a class="dropdown-item" href="#">
                <i class="zmdi zmdi-view-compact"></i> Wszystkie ligi
              </a>
            </li>
            <li class="dropdown-divider"></li>
            <li>
              <a class="dropdown-item with-badge" href="#">
                <i class="zmdi zmdi-view-compact"></i> Superliga
                <span class="badge badge-danger">HOT</span>
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="#">
                <i class="zmdi zmdi-view-agenda"></i> 2. liga kobietek</a>
            </li>
            <li>
              <a class="dropdown-item" href="#">
                <i class="zmdi zmdi-view-compact"></i> 2. liga mężczyzn</a>
            </li>
            <li>
              <a class="dropdown-item" href="#">
                <i class="zmdi zmdi-view-agenda"></i> 3. liga mężczyzn</a>
            </li>
            <li>
              <a class="dropdown-item" href="#">
                <i class="zmdi zmdi-card-membership"></i> 4. liga mężczyzn(gr. A)</a>
            </li>
            <li>
              <a class="dropdown-item" href="#">
                <i class="zmdi zmdi-view-dashboard"></i> 4. liga mężczyzn(gr. B)</a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
    <a href="javascript:void(0)" class="ms-toggle-left btn-navbar-menu">
      <i class="zmdi zmdi-menu"></i>
    </a>
  </div>
  <!-- container -->
</nav><?php }
}

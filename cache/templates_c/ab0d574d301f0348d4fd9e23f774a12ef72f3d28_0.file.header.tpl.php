<?php
/* Smarty version 3.1.30, created on 2018-02-16 14:37:41
  from "C:\xampp\htdocs\data\view\elements\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a86dea5cb4021_11559536',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab0d574d301f0348d4fd9e23f774a12ef72f3d28' => 
    array (
      0 => 'C:\\xampp\\htdocs\\data\\view\\elements\\header.tpl',
      1 => 1518788211,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a86dea5cb4021_11559536 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['themeHEADER']->value != "nohead") {?>
<header class="ms-header ms-header-<?php echo $_smarty_tpl->tpl_vars['themeHEADER']->value;?>
">
  <!--ms-header-dark-->
  <div class="container container-full">
    <div class="ms-title">
      <a href="/">
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
<?php if ($_smarty_tpl->tpl_vars['user_data']->value['user_permissions'] < 2) {?>
      <a href="javascript:void(0)" class="btn-circle btn-circle-primary no-focus animated zoomInDown animation-delay-8" data-toggle="modal" data-target="#ms-account-modal">
        <span class="badge-pill badge-pill-pink">5</span>
        <i class="zmdi zmdi-account"></i>
      </a>
<?php }?>
      <form class="search-form animated zoomInDown animation-delay-9" action="<?php echo $_smarty_tpl->tpl_vars['base_site']->value;?>
/szukaj">
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
<?php }
}
}

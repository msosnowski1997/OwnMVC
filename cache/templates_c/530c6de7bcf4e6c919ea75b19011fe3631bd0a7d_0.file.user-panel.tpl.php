<?php
/* Smarty version 3.1.30, created on 2018-02-17 23:36:27
  from "C:\xampp\htdocs\turnieje\data\view\user-panel.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a88ae6bb5e3b0_97209549',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '530c6de7bcf4e6c919ea75b19011fe3631bd0a7d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\turnieje\\data\\view\\user-panel.tpl',
      1 => 1515876478,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a88ae6bb5e3b0_97209549 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="ms-hero-page-override ms-hero-img-city ms-hero-bg-primary">
  <div class="container">
    <div class="text-center">
      <h1 class="no-m ms-site-title color-white center-block ms-site-title-lg mt-2 animated zoomInDown animation-delay-5">Panel użytkownika</span>
      </h1>
    </div>
  </div>
</div>

<div class="container">
  <div class="card card-hero animated slideInUp animation-delay-8 mb-6">
    <div class="card-block">

			<div class="row">
				
				<div class="col-lg-4 col-md-6">
					<div class="card card-primary width-auto">
						<div class="card-header text-center">
							<h3 class="card-title">Turnieje</h3>
						</div>
						<figure class="ms-thumbnail ms-thumbnail-vertical">
							<img src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['resources_path']->value;
$_prefixVariable1=ob_get_clean();
echo $_prefixVariable1;?>
material/img/demo/port1.jpg" alt="" class="img-fluid">
							<figcaption class="ms-thumbnail-caption text-center">
								<div class="ms-thumbnail-caption-content">
									<h4 class="mb-2 no-mt">
										Tutaj znajduję się podgląd na wszystkie związane z tobą turnieje.
										<a href="<?php echo $_smarty_tpl->tpl_vars['base_site']->value;?>
/panel-uzytkownika/moje-turnieje" class="btn btn-lg btn-white"><i class="fa fa-arrow-right"></i> Przejdź</a>
									</h4>
								</div>
							</figcaption>
						</figure>
						<a href="<?php echo $_smarty_tpl->tpl_vars['base_site']->value;?>
/panel-uzytkownika/stworz-turniej" 
						class="btn-circle btn-circle-success btn-circle-raised btn-card-float left wow zoomInDown index-2 mt-2">
							<i class="zmdi zmdi-plus"></i>
						</a>
						<a href="<?php echo $_smarty_tpl->tpl_vars['base_site']->value;?>
/panel-uzytkownika/moje-turnieje" 
						class="btn-circle btn-circle-primary btn-circle-raised btn-card-float right wow zoomInDown index-2 mt-2">
							<i class="zmdi zmdi-eye"></i>
						</a>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6">
					<div class="card card-primary width-auto">
						<div class="card-header text-center">
							<h3 class="card-title">Mecze</h3>
						</div>
						<figure class="ms-thumbnail ms-thumbnail-vertical">
							<img src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['resources_path']->value;
$_prefixVariable2=ob_get_clean();
echo $_prefixVariable2;?>
material/img/demo/port1.jpg" alt="" class="img-fluid">
							<figcaption class="ms-thumbnail-caption text-center">
								<div class="ms-thumbnail-caption-content">
									<h4 class="mb-2 no-mt">
										Tutaj znajduję się podgląd na wszystkie związane z tobą mecze.
										<a href="<?php echo $_smarty_tpl->tpl_vars['base_site']->value;?>
/panel-uzytkownika/moje-mecze" class="btn btn-lg btn-white"><i class="fa fa-arrow-right"></i> Przejdź</a>
									</h4>
								</div>
							</figcaption>
						</figure>
						<a href="<?php echo $_smarty_tpl->tpl_vars['base_site']->value;?>
/panel-uzytkownika/stworz-mecz" 
						class="btn-circle btn-circle-success btn-circle-raised btn-card-float left wow zoomInDown index-2 mt-2">
							<i class="zmdi zmdi-plus"></i>
						</a>
						<a href="<?php echo $_smarty_tpl->tpl_vars['base_site']->value;?>
/panel-uzytkownika/moje-mecze" 
						class="btn-circle btn-circle-primary btn-circle-raised btn-card-float right wow zoomInDown index-2 mt-2">
							<i class="zmdi zmdi-eye"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><?php }
}

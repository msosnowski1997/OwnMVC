<?php
/* Smarty version 3.1.30, created on 2018-02-17 23:32:40
  from "C:\xampp\htdocs\turnieje\data\view\full-news.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a88ad88385a01_77215832',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b843a86f9d3cfaae20edd6f6d2c84d4b5824914a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\turnieje\\data\\view\\full-news.tpl',
      1 => 1515931566,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a88ad88385a01_77215832 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">

  <div class="row">
    <div class="col-md-8">

      <article class="card wow fadeInLeft animation-delay-5 mb-4">
        <div class="card-block">
          <div class="row">
            <div class="col-xl-6 mb-2">
              <figure class="ms-thumbnail ms-thumbnail-diagonal">
                <img src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['resources_path']->value;
$_prefixVariable1=ob_get_clean();
echo $_prefixVariable1;?>
material/img/demo/post4.jpg" alt="" class="img-fluid">
                <figcaption class="ms-thumbnail-caption text-center">
                  <div class="ms-thumbnail-caption-content">
                    <h3 class="ms-thumbnail-caption-title">Lorem ipsum dolor sit</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    <div class="mt-2">
                      <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-sm mr-1 btn-circle-white color-danger">
                        <i class="zmdi zmdi-favorite"></i>
                      </a>
                      <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-sm ml-1 mr-1 btn-circle-white color-warning">
                        <i class="zmdi zmdi-star"></i>
                      </a>
                      <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-sm ml-1 btn-circle-white color-success">
                        <i class="zmdi zmdi-share"></i>
                      </a>
                    </div>
                  </div>
                </figcaption>
              </figure>
              </div>
            <div class="col-xl-6">
              <h3 class="no-mt">
                <a href="javascript:void(0)">Earum delectus libero ipsa temporibus in minus</a>
              </h3>
              <p class="mb-4">Lorem ipsum dolor sit amet, consectetur alter adipisicing elit. Facilis, natuse inse voluptates officia repudianda beatae magni es repudiandae beatae magni magnam autem natuse inse on voluptates elit sit molestias.</p>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-8">
              <img src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['resources_path']->value;
$_prefixVariable2=ob_get_clean();
echo $_prefixVariable2;?>
material/img/demo/avatar50.jpg" alt="..." class="rounded-circle mr-1"> by
              <a href="javascript:void(0)">Victoria</a> in
              <a href="javascript:void(0)" class="ms-tag ms-tag-info">Design</a>
              <span class="ml-1 d-none d-sm-inline">
                <i class="zmdi zmdi-time mr-05 color-info"></i>
                <span class="color-medium-dark">April 15, 2015</span>
              </span>
            </div>
            <div class="col-lg-4 text-right">
              <a href="javascript:void(0)" class="btn btn-primary btn-raised btn-block animate-icon">Read More
                <i class="ml-1 no-mr zmdi zmdi-long-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
      </article>
    </div>
    <div class="col-md-4">
      
    </div>
  </div>
</div><?php }
}

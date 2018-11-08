<?php
/* Smarty version 3.1.30, created on 2017-12-04 12:41:35
  from "C:\xampp\htdocs\data\view\admin\elements\users-list-page.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a25346f0753b5_24252696',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '20056e97e4a12dcaeced9a278fe05be0640d57d7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\data\\view\\admin\\elements\\users-list-page.tpl',
      1 => 1512387694,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/elements/users-list.tpl' => 1,
  ),
),false)) {
function content_5a25346f0753b5_24252696 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
	<div class="card card-primary">
    <div class="card-header">
      <div class="card-title">
        <h2><i class="zmdi zmdi-accounts"></i> Lista użytkowników</h2>
    	</div>
    </div>
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
            <div class="form-group">
              <label class="control-label" for="name">Imię</label>
              <input class="form-control" id="name" type="text">
            </div>
            <div class="form-group no-mt">
              <label class="control-label" for="surname">Nazwisko</label>
              <input class="form-control" id="surname" type="text">
            </div>
          </fieldset>
        </div>
        <div class="col-sm-6">
          <fieldset>
            <h4>Płeć</h4>
      <select id="SortSelect" class="form-control selectpicker">
        <option value="">Wszystkie</option>
        <option value="">Mężczyzna</option>
        <option value="">Kobieta</option>
      </select>
          </fieldset>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <h4>Sortuj po</h4>
      <select id="SortSelect" class="form-control selectpicker">
        <option value="">Data rejestracji</option>
        <option value="">Imię</option>
        <option value="">Nazwisko</option>
        <option value="">Nazwa użytkownika</option>
        <option value="">Wiek</option>
      </select>
    </form>
    <button class="btn btn-danger btn-block no-mb mt-2" id="Reset">
      <i class="zmdi zmdi-delete"></i> Resetuj filtry
    </button>
  </div>
</div>
 
<hr class="color">




          </div>
      	</div>
	    </div>
		</div>

    <div class="card-block">
    	<table class="table table-no-border table-striped table-hover">
    	  <thead>
    	    <tr>
    	      <th>Imię</th>
    	      <th>Nazwisko</th>
    	      <th>Nazwa Użytkownika</th>
    	      <th>Adres e-mail</th>
    	      <th></th>
    	    </tr>
    	  </thead>
    	  <tbody>
    	    <?php $_smarty_tpl->_subTemplateRender("file:admin/elements/users-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    	  </tbody>
    	</table>
    </div>
  </div>
</div><?php }
}

<?php
/* Smarty version 3.1.30, created on 2017-12-05 15:04:44
  from "C:\xampp\htdocs\data\view\admin\elements\users-list.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a26a77c78f800_12063363',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d111c39435873d1a9bf41c9c4fc1d18e9a121cc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\data\\view\\admin\\elements\\users-list.tpl',
      1 => 1512482680,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a26a77c78f800_12063363 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['usersarray']->value, 'user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
?>

<tr>
  <td><?php echo $_smarty_tpl->tpl_vars['user']->value['user_name'];?>
</td>
  <td><?php echo $_smarty_tpl->tpl_vars['user']->value['user_surname'];?>
</td>
  <td><?php echo $_smarty_tpl->tpl_vars['user']->value['user_alias'];?>
</td>
  <td><?php echo $_smarty_tpl->tpl_vars['user']->value['user_mail'];?>
</td>
  <td class="text-right">
    <a href="javascript:void(0)" class="btn-circle btn-circle-info btn-circle-xs">
      <i class="zmdi zmdi-eye"></i>
    </a>
    <a href="javascript:void(0)" class="btn-circle btn-circle-default btn-circle-xs">
      <i class="zmdi zmdi-edit"></i>
    </a>
    <a href="javascript:void(0)" class="btn-circle btn-circle-danger btn-circle-xs">
      <i class="zmdi zmdi-delete"></i>
    </a>
  </td>
</tr>

<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
}
}

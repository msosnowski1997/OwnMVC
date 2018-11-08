{foreach from=$usersarray item=user}

<tr>
  <td>{$user.user_name}</td>
  <td>{$user.user_surname}</td>
  <td>{$user.user_alias}</td>
  <td>{$user.user_mail}</td>
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

{/foreach}
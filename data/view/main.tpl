<!DOCTYPE html>
<html lang="pl">
    {include file="elements/head.tpl"}
  <body>
    {include file="elements/preload.tpl"}

    <div class="ms-site-container">
      <!-- Modal not-logged -->
{if $user_data['user_permissions'] < 2}
    {include file="elements/modal-user-panel.tpl"}
{/if}
    <!-- header -->
    {include file="elements/header.tpl"}
    <!-- navbar -->
    {include file="elements/navbar.tpl"}
    
    {include file=$content}
    <!-- footer -->  
    {include file="elements/footer.tpl"}
    
    </div>
    <!-- ms-site-container -->
    {include file="elements/left-menu.tpl"}
    
    {include file="elements/scripts.tpl"}

  </body>
</html>
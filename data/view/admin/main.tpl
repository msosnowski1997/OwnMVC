<!DOCTYPE html>
<html lang="pl">
    {include file="elements/head.tpl"}
  <body>
    {include file="elements/preload.tpl"}

    <div class="ms-site-container">
    <!-- header -->
    {include file="elements/header.tpl"}
    
    <!-- navbar -->
    {include file="elements/navbar.tpl"}
    
    {include file="admin/$content1"}
    <!-- footer -->  
    {include file="elements/footer.tpl"}
    
    </div>
    <!-- ms-site-container -->
    {include file="admin/elements/left-menu.tpl"}
    
    {include file="elements/scripts.tpl"}
  </body>
</html>
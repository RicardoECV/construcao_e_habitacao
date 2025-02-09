<?php

  $header_footer = true;

  require_once("../requires.php");
  $pagina_backoffice = "banners";
  
  $user = checkLogin();
  $banners = getBanners();

  require_once("components/header.php");
  require_once("views/banners_view.php");
  require_once("components/footer.php");

?>
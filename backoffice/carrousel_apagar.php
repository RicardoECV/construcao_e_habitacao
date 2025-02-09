<?php

  $header_footer = true;

  require_once("../requires.php");
  $pagina_backoffice = "carrousel";
  
  $user = checkLogin();
    
  if(!empty($_GET["id"])) {
    $id = $_GET["id"];
    $carrousel_banner = getCarrouselBanner($id);    
  }

  require_once("components/header.php");
  require_once("views/carrousel_apagar_view.php");
  require_once("components/footer.php");

?>
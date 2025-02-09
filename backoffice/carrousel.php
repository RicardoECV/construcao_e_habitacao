<?php

  $header_footer = true;

  require_once("../requires.php");
  $pagina_backoffice = "carrousel";
  
  $user = checkLogin();  
  $carrousel = getCarrousel();

  require_once("components/header.php");
  require_once("views/carrousel_view.php");
  require_once("components/footer.php");

?>
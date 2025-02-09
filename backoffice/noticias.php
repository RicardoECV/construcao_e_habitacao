<?php

  $header_footer = true;

  require_once("../requires.php");
  $pagina_backoffice = "noticias";
  
  $user = checkLogin();
  $noticias = getNoticias();

  require_once("components/header.php");
  require_once("views/noticias_view.php");
  require_once("components/footer.php");

?>
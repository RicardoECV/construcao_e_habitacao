<?php

  $header_footer = true;

  require_once("../requires.php");
  $pagina_backoffice = "destaques";
  
  $user = checkLogin();
  $destaques = getDestaques();

  require_once("components/header.php");
  require_once("views/destaques_view.php");
  require_once("components/footer.php");

?>
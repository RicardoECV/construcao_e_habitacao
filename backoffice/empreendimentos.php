<?php

  $header_footer = true;

  require_once("../requires.php");
  $pagina_backoffice = "empreendimentos";
  
  $user = checkLogin();
  $empreendimentos = getEmpreendimentos();

  require_once("components/header.php");
  require_once("views/empreendimentos_view.php");
  require_once("components/footer.php");

?>
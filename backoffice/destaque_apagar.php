<?php

  $header_footer = true;

  require_once("../requires.php");
  $pagina_backoffice = "destaques";
  
  $user = checkLogin();
    
  if(!empty($_GET["id"])) {
    $id = $_GET["id"];
    $destaque_unico = getDestaqueUnico($id);    
  }

  require_once("components/header.php");
  require_once("views/destaque_apagar_view.php");
  require_once("components/footer.php");

?>
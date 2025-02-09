<?php

  $header_footer = true;

  require_once("../requires.php");
  $pagina_backoffice = "empreendimentos";
  
  $user = checkLogin();
    
  if(!empty($_GET["id"])) {
    $id = $_GET["id"];
    iduSQL("DELETE FROM empreendimentos WHERE id=$id");    
  }

  require_once("components/header.php");
  require_once("views/empreendimento_apagado_view.php");
  require_once("components/footer.php");

?>
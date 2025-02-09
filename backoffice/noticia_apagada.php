<?php

  $header_footer = true;

  require_once("../requires.php");
  $pagina_backoffice = "noticias";
  
  $user = checkLogin();
    
  if(!empty($_GET["id"])) {
    $id = $_GET["id"];
    iduSQL("DELETE FROM noticias WHERE id=$id");    
  }

  require_once("components/header.php");
  require_once("views/noticia_apagada_view.php");
  require_once("components/footer.php");

?>
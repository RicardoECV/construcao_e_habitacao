<?php

  $header_footer = true;

  require_once("../requires.php");
  $pagina_backoffice = "noticias";
  
  $user = checkLogin();
    
  if(!empty($_GET["id"])) {
    $id = $_GET["id"];
    $noticia_unica = getNoticiaUnica($id);    
  }

  require_once("components/header.php");
  require_once("views/noticia_apagar_view.php");
  require_once("components/footer.php");

?>
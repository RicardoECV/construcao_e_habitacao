<?php

  $header_footer = true;

  require_once("../requires.php");
  $pagina_backoffice = "carrousel";
  
  $user = checkLogin();
  
  if(!empty($_GET["imagem"])) {    
    $imagem = $_GET["imagem"];    
    
    iduSQL("INSERT INTO carrousel (imagem,id_criador,id_editor) VALUES ('$imagem','$user[id]','$user[id]')");
    header("Location: carrousel.php");
  }
 
  require_once("components/header.php");
  require_once("views/carrousel_novo_banner_view.php");
  require_once("components/footer.php");

?>
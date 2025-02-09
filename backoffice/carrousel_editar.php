<?php

  $header_footer = true;

  require_once("../requires.php");
  $pagina_backoffice = "carrousel";
  
  $user = checkLogin();  
  
  if(!empty($_GET["id"])) {
    $id = $_GET["id"];    
    $carrousel_banner = getCarrouselBanner($id);  
    
    if(!empty($_GET["imagem"])) {     
      $imagem = $_GET["imagem"];         
      iduSQL("UPDATE carrousel SET id_editor=$user[id], imagem='$imagem' WHERE id=$id");
      header("Location: carrousel.php");
    }    
  }
 
  require_once("components/header.php");
  require_once("views/carrousel_editar_view.php");
  require_once("components/footer.php");

?>
<?php

  $header_footer = true;

  require_once("../requires.php");
  $pagina_backoffice = "banners";
  
  $user = checkLogin();  
  
  if(!empty($_GET["id"])) {
    $id = $_GET["id"];    
    $banner_unico = getBannerByID($id);  
    
    if(!empty($_GET["imagem"])) {     
      $imagem = $_GET["imagem"]; 
        
      iduSQL("UPDATE banners SET id_editor=$user[id], imagem='$imagem' WHERE id=$id");
      header("Location: banners.php");
    }    
  }
 
  require_once("components/header.php");
  require_once("views/banner_editar_view.php");
  require_once("components/footer.php");

?>
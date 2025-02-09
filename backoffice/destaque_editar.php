<?php

  $header_footer = true;

  require_once("../requires.php");
  $pagina_backoffice = "destaques";
  
  $user = checkLogin();  
  
  if(!empty($_GET["id"])) {
    $id = $_GET["id"];    
    $destaque_unico = getDestaqueUnico($id);

    $form_2 = !empty($_GET["titulo"]) && !empty($_GET["texto"]) && !empty($_GET["imagem"]) && isset($_GET["home_check"]); 
    
    if($form_2) {
      $titulo = $_GET["titulo"];
      $texto = $_GET["texto"];
      $imagem = $_GET["imagem"]; 
      $home_check = $_GET["home_check"];     
      
      iduSQL("UPDATE destaques SET titulo='$titulo', texto='$texto', imagem='$imagem',id_editor=$user[id] , home_page=$home_check WHERE id=$id");
      $destaque_unico = getDestaqueUnico($id);  
    }    
  }
 
  require_once("components/header.php");
  require_once("views/destaque_editar_view.php");
  require_once("components/footer.php");

?>
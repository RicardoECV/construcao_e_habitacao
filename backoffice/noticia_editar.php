<?php

  $header_footer = true;

  require_once("../requires.php");
  $pagina_backoffice = "noticias";
  
  $user = checkLogin();  
  
  if(!empty($_GET["id"])) {
    $id = $_GET["id"];    
    $noticia_unica = getNoticiaUnica($id);

    $form_2 = !empty($_GET["titulo"]) && !empty($_GET["texto"]) && !empty($_GET["imagem"]); 
    
    if($form_2) {
      $titulo = $_GET["titulo"];
      $texto = $_GET["texto"];
      $imagem = $_GET["imagem"];
      
      iduSQL("UPDATE noticias SET id_editor=$user[id], titulo='$titulo', texto='$texto', imagem='$imagem' WHERE id=$id");
      $noticia_unica = getNoticiaUnica($id);
    }    
  }
 
  require_once("components/header.php");
  require_once("views/noticia_editar_view.php");
  require_once("components/footer.php");

?>
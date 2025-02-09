<?php

  $header_footer = true;

  require_once("../requires.php");
  $pagina_backoffice = "noticias";
  
  $user = checkLogin();
  
  $form = !empty($_GET["titulo"]) && !empty($_GET["texto"]) && !empty($_GET["imagem"]);

  if($form) {
    $titulo = $_GET["titulo"];
    $texto = $_GET["texto"];
    $imagem = $_GET["imagem"];    
    
    iduSQL("INSERT INTO noticias (titulo, texto, imagem, id_editor, id_criador) VALUES ('$titulo', '$texto', '$imagem', $user[id], $user[id])");
    header("Location: noticias.php");
  }
 
  require_once("components/header.php");
  require_once("views/noticia_nova_view.php");
  require_once("components/footer.php");

?>
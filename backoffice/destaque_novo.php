<?php

  $header_footer = true;

  require_once("../requires.php");
  $pagina_backoffice = "destaques";
  
  $user = checkLogin();
  
  $form = !empty($_GET["titulo"]) && !empty($_GET["texto"]) && !empty($_GET["imagem"]) && isset($_GET["home_check"]);

  if($form) {
    $titulo = $_GET["titulo"];
    $texto = $_GET["texto"];
    $imagem = $_GET["imagem"];
    $home_check = $_GET["home_check"];
    
    iduSQL("INSERT INTO destaques (titulo, texto, imagem, id_criador, id_editor, home_page) VALUES ('$titulo', '$texto', '$imagem', $user[id], '$user[id]', $home_check)");
    header("Location: destaques.php");
  }
 
  require_once("components/header.php");
  require_once("views/destaque_novo_view.php");
  require_once("components/footer.php");

?>
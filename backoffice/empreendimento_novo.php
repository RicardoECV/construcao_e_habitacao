<?php

  $header_footer = true;

  require_once("../requires.php");
  $pagina_backoffice = "empreendimentos";
  
  $user = checkLogin();
  
  $form = !empty($_GET["titulo"]) && !empty($_GET["texto"]);

  if($form) {
    $titulo = $_GET["titulo"];
    $texto = $_GET["texto"];
    $imagem_1 = $_GET["imagem_1"];    
    $imagem_2 = $_GET["imagem_2"];    
    $imagem_3 = $_GET["imagem_3"];    
    $imagem_4 = $_GET["imagem_4"];    
    
    iduSQL("INSERT INTO empreendimentos (titulo, texto, imagem_1, imagem_2, imagem_3, imagem_4, id_criador, id_editor) VALUES ('$titulo', '$texto', '$imagem_1', '$imagem_2', '$imagem_3', '$imagem_4', '$user[id]', '$user[id]')");
    header("Location: empreendimentos.php");
  }
 
  require_once("components/header.php");
  require_once("views/empreendimento_novo_view.php");
  require_once("components/footer.php");

?>
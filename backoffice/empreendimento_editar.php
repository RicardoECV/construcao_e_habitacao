<?php

  $header_footer = true;

  require_once("../requires.php");
  $pagina_backoffice = "empreendimentos";
  
  $user = checkLogin();  
  
  if(!empty($_GET["id"])) {
    $id = $_GET["id"];    
    $empreendimento_unico = getEmpreendimentoUnico($id);

    $form_2 = !empty($_GET["titulo"]) && !empty($_GET["texto"]);
    
    if($form_2) {
      $titulo = $_GET["titulo"];
      $texto = $_GET["texto"];
      $imagem_1 = $_GET["imagem_1"]; 
      $imagem_2 = $_GET["imagem_2"]; 
      $imagem_3 = $_GET["imagem_3"]; 
      $imagem_4 = $_GET["imagem_4"]; 
                
      iduSQL("UPDATE empreendimentos SET titulo='$titulo', texto='$texto', imagem_1='$imagem_1', imagem_2='$imagem_2', imagem_3='$imagem_3', imagem_4='$imagem_4', id_editor=$user[id] WHERE id=$id");
      $empreendimento_unico = getEmpreendimentoUnico($id);
    }
    
  }
 
  require_once("components/header.php");
  require_once("views/empreendimento_editar_view.php");
  require_once("components/footer.php");

?>
<?php

  require_once("requires.php");

  $pagina_actual = "empreendimento";
  $scroll_destaques = true;
  $footer_contacto = false;
  $banner = getBanner($pagina_actual);
  $empreendimentos = getEmpreendimentos();
  $contactos = getContactos();

  if(!empty($_GET["id"])) {
    $id = $_GET["id"];
    $empreendimento = getEmpreendimentoUnico($id);  
  }

  require_once("components/header.php");
  require_once("views/empreendimento_view.php");
  require_once("components/footer.php");

?>


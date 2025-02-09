<?php

  require_once("requires.php");

  $pagina_actual = "destaque_unico";  
  $scroll_destaques = true;
  $footer_contacto = false;
  $banner = getBanner($pagina_actual);
  $empreendimentos = getEmpreendimentos();
  $contactos = getContactos(); 
  $pagina = 1; 

  if(!empty($_GET["id"])) {
    $id = $_GET["id"];       
    $destaque_unico = getDestaqueUnico($id);  
    if(!empty($_GET["pagina"])) {$pagina = $_GET["pagina"];}  
  }

  require_once("components/header.php");
  require_once("views/destaque_unico_view.php");
  require_once("components/footer.php");

?>


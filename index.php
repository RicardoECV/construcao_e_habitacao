<?php

  require_once("requires.php");

  $pagina_actual = "index";   
  $scroll_destaques = true;
  $footer_contacto = false;
  $carrousel = getCarrousel();
  $quem_somos = getTextoQuem();
  $destaques_h = getDestaquesHome();
  $empreendimentos = getEmpreendimentos();
  $contactos = getContactos(); 

  require_once("components/header.php");
  require_once("views/index_view.php");
  require_once("components/footer.php");

?>

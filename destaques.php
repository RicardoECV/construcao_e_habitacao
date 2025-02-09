<?php

  require_once("requires.php");
  
  $pagina_actual = "destaques";
  $scroll_destaques = true;
  $footer_contacto = false;
  $banner = getBanner($pagina_actual);
  $empreendimentos = getEmpreendimentos();
  $contactos = getContactos();
    
  // Paginação
  $pagina = 1;
  $elementos_pagina = 6;
  
  $total_paginas = getTotalPaginasD($elementos_pagina);

  if(!empty($_GET["pagina"])) {
    $pagina = intval($_GET["pagina"]);
    if(isset($_GET["scroll"])) {$scroll_destaques = boolval($_GET["scroll"]);}    
  }
 
  if($pagina <= 0 || $pagina > $total_paginas ) {$pagina = 1;}
      
  $destaques = getDestaquesPorPagina($elementos_pagina, $pagina);

  require_once("components/header.php");
  require_once("views/destaques_view.php");
  require_once("components/footer.php");

?>

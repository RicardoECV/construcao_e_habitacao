<?php

  function getNoticias() {
    return selectSQL("SELECT * FROM noticias ORDER BY id DESC");    
  }

  function getNoticiaUnica($id) {
    return selectSQLUnique("SELECT * FROM noticias WHERE id=$id");    
  }

  // Paginacao
  function getTotalPaginasN($elementos_pagina) {    
    $total_noticias = selectSQLUnique("SELECT count(*) AS total FROM noticias");
    $total_elementos = intval($total_noticias["total"]);
    $total_paginas = ceil($total_elementos/$elementos_pagina);
    return $total_paginas;
  }

  function getNoticiasPorPagina($elementos_pagina, $pagina) {
    $elementos_ignorados = (($pagina - 1) * $elementos_pagina);
    $noticias_pagina = selectSQL("SELECT * FROM noticias ORDER BY id DESC LIMIT $elementos_pagina OFFSET $elementos_ignorados");
    return $noticias_pagina;
  }
  
?>
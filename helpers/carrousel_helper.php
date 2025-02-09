<?php 

  function getCarrousel() {
    $resultado = selectSQL("SELECT * FROM carrousel");
    return $resultado;
  }

  function getCarrouselBanner($id) {
    $resultado = selectSQLUnique("SELECT * FROM carrousel WHERE id=$id");
    return $resultado;
  }

?>
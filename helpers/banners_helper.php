<?php 
    
  function getBanners() {
    $resultado = selectSQL("SELECT * FROM banners");
    return $resultado;
  }

  function getBanner($pagina_actual) {
    $resultado = selectSQLUnique("SELECT * FROM banners WHERE pagina='$pagina_actual'");
    return $resultado;
  }

  function getBannerByID($id) {
    $resultado = selectSQLUnique("SELECT * FROM banners WHERE id=$id");
    return $resultado;
  }

  function getPaginaBanner($pagina) {
    switch ($pagina) {
      case "contactos":
        return "Contactos";
        break;
      case "quem_somos":
        return "Quem Somos";
        break;
      case "centro_ferias":
        return "Centro de Férias";
        break;
      case "socios":
        return "Sócios";
        break;
      case "noticias":
        return "Notícias";
        break;
      case "destaques":
        return "Destaques";
        break;
      case "empreendimento":
        return "Empreendimentos";
        break;
      case "destaque_unico":
        return "Destaque Único";
        break;
    }
  }

?>
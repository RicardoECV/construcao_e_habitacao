<?php

  $header_footer = true;

  require_once("../requires.php");
  $pagina_backoffice = "contactos";
  
  $user = checkLogin();
  $contactos = getContactos();

  require_once("components/header.php");
  require_once("views/contactos_view.php");
  require_once("components/footer.php");

?>
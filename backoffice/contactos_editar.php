<?php

  $header_footer = true;

  require_once("../requires.php");
  $pagina_backoffice = "contactos";
  
  $user = checkLogin();    
     
  $contactos = getContactos();

  $form = !empty($_GET["morada"]) && !empty($_GET["telefone"]) && !empty($_GET["fax"]) && !empty($_GET["email"]) && !empty($_GET["facebook"]); 
  
  if($form) {
    $morada = $_GET["morada"];
    $telefone = $_GET["telefone"];
    $fax = $_GET["fax"]; 
    $email = $_GET["email"];     
    $facebook = $_GET["facebook"];     
    
    iduSQL("UPDATE contactos SET id_editor=$user[id], morada='$morada', telefone='$telefone', fax='$fax', email='$email', facebook='$facebook'");
    $contactos = getContactos();
  }
   
  require_once("components/header.php");
  require_once("views/contactos_editar_view.php");
  require_once("components/footer.php");

?>
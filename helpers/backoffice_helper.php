<?php

  date_default_timezone_set('Europe/Lisbon');
  session_start();
  
  // Pedir Nome de Utilizador
  function getUserName($id) {
    $user_name = selectSQLUnique("SELECT nome FROM backoffice WHERE id=$id");
    return $user_name;
  }

  // Login Utilizador Backoffice
  function user_login ($login, $pw) {
    $user = selectSQLUnique("SELECT * FROM backoffice WHERE login='$login'");
    
    if(!empty($user)) {
      if(password_verify($pw, $user["senha"])) { 
        $_SESSION["user"] = $user;      
        iduSQL("UPDATE backoffice SET data_ultimo_acesso = CURRENT_TIMESTAMP WHERE id=$user[id]");
        header("Location: home.php");
      }   
      else {return false;}
    }
    
    else {return false;}
  }

  // Verificar Login
  function checkLogin() {
    if(empty($_SESSION["user"])) {
      header("Location: index.php");
      exit();
    }
    else {return $_SESSION["user"];}    
  }

  // Logout
  function logout() {
    session_destroy();
    header("Location: index.php");
    exit();
  }

?>
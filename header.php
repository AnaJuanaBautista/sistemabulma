<?php 
  session_start(); 
echo <<<_INIT
<!DOCTYPE html> 
<html>
  <head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src='node_modules/jquery/dist/jquery.min.js'></script>
    <script src='node_modules/jquery-mobile/js/jquery.mobile.js'></script>
    <link href="node_modules/bulma/css/bulma.min.css" rel="stylesheet">
    <link rel='stylesheet' href='styles.css' type='text/css'>
    <script src='javascript.js'></script>
_INIT;
  require_once 'functions.php'; 
  $userstr = "Bienvenido querido usuario "; 
  if (isset($_SESSION['user'])) { 
	$user     = $_SESSION['user']; 
	$loggedin = TRUE;              
	$userstr  = "Conectado como: $user";
  }
  else $loggedin = FALSE; 

 echo <<<_MAIN
     <title> UKULELES: $userstr </title>
   </head>
   <body>
     <div data-role='page'>
        <div data-role='header'>
        <br><br><br>
         <div id='logo' class='center'>UKULELERIA</div>
          <center><img src='ukulele.png'
           width="700" height="300" class="content">
          </center>
          <br><br>
         <div class='username'>$userstr</div>
        </div>
      <div data-role='content'>
_MAIN;
  if($loggedin) {
echo <<<_LOGGEDIN
<nav class="navbar" role="navigation" aria-label="main navigation">
  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
      <a class="navbar-item" href="members.php?view=$userstr">
        Home
      </a>
      <a class="navbar-item" href="members.php" data-transition="slide">
        Miembros
      </a>
      <a class="navbar-item" href="friends.php" data-transition="slide">
        Amigos
      </a>
      <a class="navbar-item" href="messages.php" data-transition="slide">
         Mensajes
      </a>
      <a class="navbar-item" href="profile.php" data-transition="slide">
        Editar perfil
      </a>
      <a class="navbar-item"  href="logout.php" data-transition="slide">
        Cerrar sesion
      </a>
      <a class="navbar-item" href="tiposdeukuleles.php" data-transition="slide">
        Tipos de Ukeleles
      </a>
      <a class="navbar-item" href="musica.php" data-transition="slide">
        Musica
      </a>
      <a class="navbar-item" href="sitiosdeventas.php" data-transition="slide">
        Venta
      </a>
      <a class="navbar-item" href="Comentario.php" data-transition="slide">
        Comentarios
      </a>
    </div>
  </div>
</nav>
_LOGGEDIN;
  }
  else { 
echo <<<_GUEST
     </div><br>
     <center>
          <a data-role='button' data-inline='true' data-icon='home'
            data-transition="slide" href='index.php'>Inicio</a>
          <a data-role='button' data-inline='true' data-icon='plus'
            data-transition="slide" href='signup.php'>Regístrate</a>
          <a data-role='button' data-inline='true' data-icon='check'
            data-transition="slide" href='login.php'>Iniciar sesión</a>
          <div class='textosb'>(Debe iniciar sesión para usar esta aplicación)</div></center>
_GUEST;
  }

?>
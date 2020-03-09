<!DOCTYPE html>
<html>
<head>
	<title>GYM-SPORT</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="iconos/style.css">
  <script type="text/javascript" src="js/estilo.js"></script>
</head>
 
<body>
<?php

include 'php/conexion.php';



?>


<header>
  <div class="header">
    <h1>GYM-SPORT</h1>
  </div>
</header>
    <form method="POST" action="php/validacionUsuario.php">     
      <div class="row">
        <div class="col-1">
          <nav>
            <h1 class="subtitulo" >Iniciar Sesión</h1>            
            <h2 class="admin">Administrador</h2>
              <div class="form" ac>
                <p>Usuario<span class="icon-user" aria-hidden="true"></span></p>  
                <input type="text" name="admin" id="admin" class="admin"> 
                <p><br>Contraseña<input type="checkbox" class="icon-unlocked" aria-hidden="true" id="che" onclick="verpass()"></p> 
                <input type="password" name="contrasena" id="contrasena" class="contrasena" required="">
                <input type="submit" name="sesion" class="sesion" value="Siguiente">
              </div>
          </nav> 
        </div>
      </div>
    </form> 
    


<div class="footer">
  <p>© Copyright 2020 GYM-SPORT | Privacy Policy.</p>
</div>

   
</body>
</html>

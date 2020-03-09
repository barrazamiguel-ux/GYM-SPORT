

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/administrador.css">
<link rel="stylesheet" href="iconos/style.css">

</head>
<body>
<?php
include 'php/validando.php';

$micontrasena = $_SESSION['contrasena'];

$_SESSION['nombreCompleto']  = $nombre ;
$_SESSION['imagen']  = $foto ;


  /*
  if($fechaDeOrigen === $PruebaSeisMeses){  
    echo "Ah caducado tu MANTENIMIENTO GRATIS De Un Ano";
  }
  else {
   echo "Siga Disfrutando del Mantenimiento"."<br>";
   echo "Fecha Inicio" . $fechaDeOrigen."<br>";
   echo "Fecha Final" . $PruebaSeisMeses."<br>"."<br>";

  }
  if($fechaDeOrigen === $PruebaUnDia){  
    echo "Ah caducado tu MANTENIMIENTO GRATIS de un dia";
  }
  else {
   echo "Siga Disfrutando del Mantenimiento"."<br>";
   echo "Fecha Inicio" . $fechaDeOrigen."<br>";
   echo "Fecha Final" . $PruebaUnDia;

  }*/
?>




<div class="header">
  <h1>GYM-SPORT</h1>
</div>

<div class="row">   
  <div class="col-3 menu">
    <ul class="navegacion">                       
      <li class="fondo">
        <div class="img-admin" >
          <center>
            <?php echo  "<input  type='image' src='img-cv/$foto'>"."<h2>"."Administrador<h2>"."<p>".$nombre."</p>"; ?>
          </center>
        </div> 
      </li>
      <li>
        <center>
          <div class="li-item" >
            <div class="li-uno">
              <span class="icon-users" aria-hidden="true">528
            </div>  
            <div class="li-dos">
              <span class="icon-user-minus" aria-hidden="true">133
            </div>
          </div>
        </center>                        
      </li>     
      <li><a href="">Usuarios</a></li>
      <li><a href="Trabajadores.php">Trabajadores</a></li>                      
      <li><a href="">Disciplinas</a></li>    
      <center>
      <li>
        <div class="li-item" >
        <div class="li-uno">
          <span class="mas">$ 49.310 </span>
        </div>  
        <div class="li-dos ">
          <span class="menos">$ -3.840 </span>
        </div>
      </div>
     </li>
        </center>  
      <li class="fondo"><a href="php/cerrarsesion.php" style="color:white;font-size:1.2em;">cerrar Sesion</a></li>
    </ul>
  </div> 
</div>


    <nav id="nav" >

        <form method="POST"  action="php/trabajador.php" enctype="multipart/form-data">
           

            <div id="Iniciar"     onclick="kut()"><h1>Crear Disciplina</h1></div>
            <div id="Registrarse" onclick="kut()"><h1></h1></div>
            
        <div id="priemr">

            <div id="nombre">
            <h1>Nombre Completo:</h1>
            <input type="text" name="nombrecompleto" id="nombrecompleto"> 
            </div>

            <div id="ocupacion">
            <h1>Precio:</h1>
            <input type="text" name="cargo" > 
            </div>

            <div id="ocupacion">
            <h1>Entrenador:</h1>
            <input type="text" name="telefono" id="telefono"> 
            </div>
           

        <div id="telefono">
            <h1>Caracteristicas:</h1>
            <input type="text" name="telefono" id="telefono"> 
            </div>
        </div>

        <div id="segun">

           

            <div id="pago">
            <h1>Fecha:</h1>
            <input type="text" name="pago"> 
            </div>
            <div id="pago">
            <h1>Horarios:</h1>
            <input type="text" name="pago"> 
            </div>

            
        </div>

            <input type="submit" name="sesion"  value="Siguiente"  >            
              
       </form>  
    </nav>   



<div class="footer">
  <p>© Copyright 2020 GYM-SPORT | Privacy Policy.</p>
</div>

</body>
</html>
					
										
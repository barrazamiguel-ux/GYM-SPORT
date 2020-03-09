<!DOCTYPE html>
<html>
<head>
	<title>Formulario de registro</title>
	<meta charset="utf-8">
    <link rel="styleshoeet" type="text/css" href="css/inscri.css">


    <link rel="stylesheet" href="iconos/style.css">
	<script type="text/javascript" src="js/inscribir.js"></script>

 
	
</head>
 
<body >

    <header id="bod" onclick="kut()">
      
            <div id="log">
            <img src="iconos/imagenes/logo.png">
            </div>
            <div id="iniciarsesion"><p><a href="index.php"> Inscripcion <span class="icon-users" style="color: white;"></span></p>  </a> 
            </div>
      
    </header>

      

    <nav id="nav" >

        <form method="POST"  action="php/usuarios.php" enctype="multipart/form-data">
           

            <div id="Iniciar"     onclick="kut()"><h1>Crea tu cuenta GYM-SPORT</h1></div>
            <div id="Registrarse" onclick="kut()"><h1></h1></div>
            
        <div id="priemr">

            <div id="nombre">
            <h1>Nombre Completo:</h1>
            <input type="text" name="nombreCompleto" id="nombreCompleto"> 
            </div>

            <div id="ocupacion">
            <h1>Ocupación:</h1>
            <input type="text" name="ocupacion"> 
            </div>

             <div id="sexo" name="sexo">
            <h1>Sexo:</h1>
            <input type="radio" id="sexo" name="sexo" value="Masculino">Masculino    
            <input type="radio" id="sexo" name="sexo" value="Femenino">Femenino  
            </div>

            <div id="edad">
            <h1>Edad:</h1>
            <input type="number" name="edad" min="18" max="40" placeholder="18-40"> 
            </div>
           

        <div id="telefono">
            <h1>Telefono:</h1>
            <input type="text" name="telefono" id="telefono"> 
            </div>
        </div>

        <div id="segun">

            <div id="foto"> 
              <p id="cv">Ingresa un Imagen</p>
      <input type="file" name="imagen" id="imagen" size="20" placeholder="Foto"></input>
            </div>

            <div id="correo">
            <h1>Correo:</h1>
            <input type="text" name="correo"> 
            </div>

            <div id="contraseña">
            <h1>Contraseña:</h1>
            <input type="text" name="contrasena"> 
            </div>
        </div>

            <input type="submit" name="sesion"  value="Siguiente"  >            
              
       </form>  
    </nav>     

   
    <aside>

        <div  id="redes" onclick="kut()">    
           <div class="mail"><span class="icon-mail"></span></div> 
           <div class="face"><span class="icon-facebook2"></span></div>
           <div class="what"><span class="icon-whatsapp"></span></div>
        </div>
 

    </aside>
 
    <footer onclick="kut()">
        <div id="mensaje"  ><h1 class="bacantes">Tenemos las mejores bacantes para ti! <span class=" icon-briefcase"></span></h1></div>
 <?php
 /*
        <div id="warmaps">
            <div class="ubi">Encuentranos en</div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3763.5305117252883!2d-99.1383664501494!3d19.389471147019915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1fef9b69eb459%3A0xf97fac0b83134d1a!2sPedro+Santacilia+258%2C+Iztaccihuatl%2C+03520+Ciudad+de+M%C3%A9xico%2C+CDMX!5e0!3m2!1ses-419!2smx!4v1533938976562" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>

        </div>
        */
?>
    </footer>
            

</body>
</html>










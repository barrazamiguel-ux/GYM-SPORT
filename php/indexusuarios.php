
<!DOCTYPE html>
<html>
<head>
	<title>Bienvenido Usuario</title>
	<link rel="stylesheet" type="text/css" href="../css/scss.css">
	<script src="js/usuarios.js"></script>	
</head>
<body>
             <?php include 'validando.php'; ?>
</script>
<div class="contact-area">
  <div class="contact">
    <main>
      <section>
        <div class="content">
          <?php 
            echo "<input width=40%; type='image' src='../img-cv/$ruta' name='zoom' />"."</td>";
          ?>

          <aside>           
            <h1>
              Bienvenido: <?php echo $nombre; ?>
            </h1>
            <p>
              Hi, Te ayudaremos al canzar tus metas.
            </p>
          </aside>
          
          <button onclick="click()">
            <span>Contact Me</span>
          </button>
        </div>

        <div class="title"><p>Contact Me</p></div>
      </section>

      
    </main>

    <nav>
      <a href="#" class="gmail">
        <div class="icon">
             <?php 
              echo "<input width=40%; type='image' src='../img-cv/$ruta' name='zoom' />"."</td>";
            ?>

          </div>

          <div class="content">
            <h1>Insctructor</h1>
            <span><?php echo $extraido['nombreCompleto']; ?></span>
          </div>
          
          <svg class="arrow" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"> <g class="nc-icon-wrapper" fill="#444444"> <path d="M17.17 32.92l9.17-9.17-9.17-9.17L20 11.75l12 12-12 12z"></path> </g> </svg>
        </a>

        <a href="#" class="facebook">
          <div class="icon">
           <img width="100%" src="../img-cv/fuerte.png">
          </div>

          <div class="content">
            <h1>Motivacion</h1>
            <span>Informacion</span>
          </div>
         </a>

        <a href="#" class="twitter">
          <div class="icon"> <img width="100%" src="../img-cv/conversacion.png">    </div>

          <div class="content">
            <h1>Informacion</h1>
              <p>24-julio-3230</p>
          </div>
        </a>

        <div class="content">
            <a href="cerrarsesion.php"> <h1>Cerrar Sesion</h1></a>
        </div>          
     </a>
    </nav>

  </div>

</div>
 
</body>
</html>
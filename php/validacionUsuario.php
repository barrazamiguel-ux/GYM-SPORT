<?php


session_start();
include 'conexion.php';
 $contrasena=$_POST["contrasena"];

$proceso=mysqli_query($conexion,"SELECT * FROM  administrador WHERE contrasena='$contrasena' ");
if($resultado=mysqli_fetch_array($proceso)){
   

$_SESSION['contrasena']=$contrasena;
header("Location:../administrador.php");


}
else{
    ?>

    <?php
  		 echo "<script type='text/javascript'>";
  		 echo "alert('Usuario o contraseña Incorrectos');";
 		 echo "window.history.back(-1)";
 		echo "</script>";
}


?>


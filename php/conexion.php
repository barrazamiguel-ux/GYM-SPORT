
<?php
	$conexion=new mysqli("localhost","root","","diplomado");
		 if (!$conexion) {
		    die("Error: " .mysql_error());
		    echo "CONEXION EXITOZA";

		  }
	$database=mysqli_select_db($conexion,"gym-sport");
?>
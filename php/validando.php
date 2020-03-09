<?php
session_start();
  if(isset($_SESSION['contrasena'])){  
  }
  else {
   header("Location:index.php");
  }
?>
<?php
  $fechaDeOrigen = "14-02-2020";
  $PruebaSeisMeses = date ('d-m-Y', strtotime ('+ 6 month', strtotime($fechaDeOrigen)));

	$PruebaUnDia = date ('d-m-Y', strtotime ('+ 1 day', strtotime($fechaDeOrigen)));
	$masOchoDias = date ('d-m-Y', strtotime ('+ 8 day', strtotime($fechaDeOrigen)));
	$menosSeisSemanas = date ('d-m-Y', strtotime ('- 6 week', strtotime($fechaDeOrigen)));
	$masUnAno = date ('d-m-Y', strtotime ('+ 12 month', strtotime($fechaDeOrigen)));
	$menosDiezMeses = date ('d-m-Y', strtotime ('- 10 month', strtotime($fechaDeOrigen)));
	$masVeinticuatroMeses = date ('d-m-Y', strtotime ('+ 24 month', strtotime($fechaDeOrigen)));
	$menosCincoAnnos = date ('d-m-Y', strtotime ('- 5 year', strtotime($fechaDeOrigen)));
	$masSieteAnnos = date ('d-m-Y', strtotime ('+ 7 year', strtotime($fechaDeOrigen)));
 
  /*
  	echo utf8_encode("Fecha original: ".$fechaDeOrigen."<br />");
  echo utf8_encode("Fecha original en formato español: ".date('d-m-Y', strtotime($fechaDeOrigen))."<br />");
	echo utf8_encode("Fecha menos tres días: ".$PruebaUnDia."<br />");
	echo utf8_encode("Fecha menos tres días: ".$menosTresDias."<br />");
	echo utf8_encode("Fecha más ocho días: ".$masOchoDias."<br />");
	echo utf8_encode("Fecha menos seis semanas: ".$menosSeisSemanas."<br />");
	echo utf8_encode("Fecha más cuatro semanas: ".$masUnAno."<br />");
	echo utf8_encode("Fecha menos diez meses: ".$menosDiezMeses."<br />");
	echo utf8_encode("Fecha más veinticuatro meses: ".$masVeinticuatroMeses."<br />");
	echo utf8_encode("Fecha menos cinco años: ".$menosCincoAnnos."<br />");
	echo utf8_encode("Fecha más siete años: ".$masSieteAnnos."<br />");
*/
	header('Content-Type: text/html; charset=UTF-8');
$micontrasena = $_SESSION['contrasena'];
  include 'conexion.php';
    $consulta=mysqli_query($conexion,"SELECT * from administrador where  contrasena='$micontrasena' ") or die ("error de conexion");
     while ($extraido=mysqli_fetch_array ($consulta)){
  
      $foto=$extraido["imagen"];



      $nombre=$extraido["nombrecompleto"];
      $_SESSION['nombrecompleto']  = $nombre ;
?>
<?php
}
mysqli_close($conexion);
?>
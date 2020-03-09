<?php
 

include 'conexion.php';


$nombrecompleto=$_POST["nombrecompleto"];
$cargo=$_POST["cargo"];
$sexo=$_POST["sexo"];
$edad=$_POST["edad"];
$telefono=$_POST["telefono"];
$pago=$_POST["pago"];

$img=$_FILES['imagen']['name'];
$tipo_imagen=$_FILES['imagen']['type'];
$tamaño_img=$_FILES['imagen']['size'];


$id=0;

if ($tamaño_img<=3000000) {

  if ($tipo_imagen=="image/jpg" || $tipo_imagen=="image/png" || $tipo_imagen=="image/gif" || $tipo_imagen=="image/jpeg"){
    # code...

  echo "EXITOSAMENTE SE SUBIO LA IMGAEN"."<br>".$tipo_imagen=$_FILES['imagen']['type']."<BR>".$tamaño_img=$_FILES['imagen']['size'];
$carpeta_destino=$_SERVER['DOCUMENT_ROOT']  . '../img-cv/';

//Movemos la imagen del directorio temporal al directoreio escogido
move_uploaded_file($_FILES['imagen']['tmp_name'],$carpeta_destino.$img);
}else{
  echo "solo se pueden subir imagen en jpg, gin o png";
 }
}else{
  echo "Tiene un TAMAÑO superior, intente con otra";
 }
 $insert="INSERT into trabajadores Values ('$','$nombrecompleto',
                                      '$cargo',
                                      '$sexo',
                                      '$edad',
                                      '$telefono',
                                      '$pago',
                                      '$img')";
$resultado=mysqli_query($conexion,$insert) or  die ("Estan insertados incorrectamente");


mysqli_close($conexion);

?>
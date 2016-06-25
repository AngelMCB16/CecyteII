<?php

include "conexion.php";

$id=$_POST["ID"];
$nombre=$_POST["NOMES"];
$APP=$_POST["APP"];
$APM=$_POST["APM"];
$ED=$_POST["ED"];
$SX=$_POST["SX"];
$SM=$_POST["SM"];
$ESP=$_POST["ESP"];


$sql="INSERT INTO alumnoscecyte (id_Alumno, Nombres, Apellido_Paterno, Apellido_Materno, Edad, Sexo, Semestre, Especialidad) VALUES ('$id','$nombre','$APP','$APM','$ED' ,'$SX' ,'$SM' ,'$ESP')";
$result=mysqli_query($conexion, $sql);
if($result){
  echo "datos guardados exitosamente";

}else{
  echo "Error al guardar la información: ".mysqli_error();
}
mysqli_close($conexion);
?>

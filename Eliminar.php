<?php
include "conexion.php";
$id=$_POST['ID'];
$sql="DELETE FROM alumnoscecyte WHERE id_Alumno='$id'";
$res=mysqli_query($conexion, $sql);

if($res){
  echo "Se eliminarion los datos correctamente";
}else{
  echo "No se produjo ninguna respuesta: ".mysqli_error();
}

mysqli_close($conexion);

?>

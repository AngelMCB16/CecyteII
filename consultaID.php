<?php
include "conexion.php";
$id=$_POST["ID"];

$sql="SELECT * FROM alumnoscecyte where id_Alumno='$id'";
$res=mysqli_query($conexion, $sql);
$datos=array();
if($res){
  $i=0;
  while($fila=mysqli_fetch_assoc($res)){
    $datos[$i]=$fila;
    $i=$i+1;
  }
}else{
  echo "No se produjo ninguna respuesta: ".mysqli_error();
}
echo json_encode($datos);
mysqli_close($conexion);
?>

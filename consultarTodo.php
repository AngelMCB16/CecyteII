<?php
include "conexion.php";


$sql="SELECT * FROM alumnoscecyte";
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

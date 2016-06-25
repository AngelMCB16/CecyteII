<?php
$server="mysql.hostinger.mx";
$usuario="u148656092_angel";
$password="angel651426387979";
$baseDatos="u148656092_cecyt";

$conexion=mysqli_connect($server, $usuario, $password,$baseDatos) or die("Error al conectarse al servidor de base de datos".mysqli_error());
//mysql_select_db($baseDatos,$conexion);
?>

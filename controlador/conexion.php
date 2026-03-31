<?php


$server = "localhost";//o localhost

$user = "root";//usuario si tiene

$pass = "";//contraseña si tiene

$db = "instatech";//nombre de BD


$con = mysqli_connect( $server,$user,$pass,$db );


//if ($con->connect_error) {
// die("Conexion fallo: ".$con->connect_error);
//}
//echo"Conexion Exitosa";

?>
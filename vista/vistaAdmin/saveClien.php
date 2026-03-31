<?php

include('db.php');

if (isset($_POST['enviar'])) {
  $id_cliente = $_POST['id_cliente'];
  $usuario = $_POST['usuario'];
  $contrasena = $_POST['contrasena'];
  $cedula = $_POST['cedula'];
  $edad = $_POST['edad'];

  $query = "INSERT INTO cliente (id_cliente, usuario, contrasena, cedula, edad) VALUES ('$id_cliente', '$usuario', '$contrasena', '$cedula', '$edad')";
  $result = mysqli_query($con, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Agregado Exitosamente';
  $_SESSION['message_type'] = 'Listo';
  header('Location: tablaClien.php');

}

?>

<?php

include('db.php');

if (isset($_POST['enviar'])) {
  $IdTecnico = $_POST['IdTecnico'];
  $usuario = $_POST['usuario'];
  $nombrecompleto = $_POST['nombrecompleto'];
  $cedula = $_POST['cedula'];
  $contrasena = $_POST['contrasena'];
  $edad = $_POST['edad'];
  $celular = $_POST['celular'];
  $email = $_POST['email'];

  $query = "INSERT INTO tecnico (IdTecnico, usuario, nombrecompleto, cedula, contrasena, edad, celular, email) VALUES ('$IdTecnico', '$usuario', '$nombrecompleto', '$cedula', '$contrasena', '$edad', '$celular', '$email')";
  $result = mysqli_query($con, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Agregado Exitosamente';
  $_SESSION['message_type'] = 'Listo';
  header('Location: tablaTecn.php');

}

?>

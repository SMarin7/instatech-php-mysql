<?php

include('db.php');

if (isset($_POST['enviar'])) {
  $idUsuario = $_POST['idUsuario'];
  $Usuario = $_POST['Usuario'];
  $Contrasena = $_POST['Contrasena'];
  $CorreoDeEmpresa = $_POST['CorreoDeEmpresa'];

  $query = "INSERT INTO provedores(idUsuario, Usuario, Contrasena, CorreoDeEmpresa) VALUES ('$idUsuario', '$Usuario', '$Contrasena', '$CorreoDeEmpresa')";
  $result = mysqli_query($con, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Agregado Exitosamente';
  $_SESSION['message_type'] = 'Listo';
  header('Location: tablaProve.php');

}

?>

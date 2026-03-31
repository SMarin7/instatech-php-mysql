<?php

include("db.php");

if(isset($_GET['idUsuario'])) {
  $idUsuario = $_GET['idUsuario'];
  $query = "DELETE FROM provedores WHERE idUsuario = $idUsuario";
  $result = mysqli_query($con, $query);
  if(!$result) {
    die("Error en la operación.");
  }

  $_SESSION['message'] = 'Borrado exitosamente';
  $_SESSION['message_type'] = 'danger';
  header('Location: tablaProve.php');
}

?>

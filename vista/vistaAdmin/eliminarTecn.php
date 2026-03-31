<?php

include("db.php");

if(isset($_GET['IdTecnico'])) {
  $IdTecnico = $_GET['IdTecnico'];
  $query = "DELETE FROM tecnico WHERE IdTecnico = $IdTecnico";
  $result = mysqli_query($con, $query);
  if(!$result) {
    die("Error en la operación.");
  }

  $_SESSION['message'] = 'Borrado exitosamente';
  $_SESSION['message_type'] = 'danger';
  header('Location: tablaTecn.php');
}

?>

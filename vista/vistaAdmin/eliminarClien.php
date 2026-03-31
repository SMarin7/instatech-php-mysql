<?php

include("db.php");

if(isset($_GET['id_cliente'])) {
  $id_cliente = $_GET['id_cliente'];
  $query = "DELETE FROM cliente WHERE id_cliente = $id_cliente";
  $result = mysqli_query($con, $query);
  if(!$result) {
    die("Error en la operación.");
  }

  $_SESSION['message'] = 'Borrado exitosamente';
  $_SESSION['message_type'] = 'danger';
  header('Location: tablaClien.php');
}

?>

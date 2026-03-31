<head>
<link rel="shortcut icon" href="img/iconoAdmin.png" type="image/x-icon">
<link rel="stylesheet" href="css/tablas.css">
</head>

<section class="fondito">

<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
<?php include('includes/header.php'); ?>
<?php include('db.php'); ?>

<header class="menu-wrap">
   <nav class="navegacion">
            
				<a class="salir" href="tablaProve.php"><box-icon name='left-arrow-circle' type='solid' ></box-icon></box-icon></a>
      <div class="admin3">
      <img id="imagenA" src="img/Admin-Profile.png" alt=""> 
      <p class="Ad"><b>Administrador</b></p>
      </div>
   </nav>   
</header>

<?php
include("db.php");
$idUsuario = '';
$Usuario= '';
$Contraseña = '';
$CorreoDeEmpresa= '';


if  (isset($_GET['idUsuario'])) {
  $idUsuario = $_GET['idUsuario'];
  $query = "SELECT * FROM provedores WHERE idUsuario=$idUsuario";
  $result = mysqli_query($con, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $idUsuario = $row['idUsuario'];
    $Usuario = $row['Usuario'];
    $Contrasena = $row['Contrasena'];
    $CorreoDeEmpresa = $row['CorreoDeEmpresa'];
  }
}

if (isset($_POST['actualizar'])) {
  $idUsuario = $_GET['idUsuario'];
  $Usuario= $_POST['Usuario'];
  $Contrasena = $_POST['Contrasena'];
  $CorreoDeEmpresa = $_POST['CorreoDeEmpresa'];

  $query = "UPDATE provedores set idUsuario = '$idUsuario', Usuario = '$Usuario', Contrasena = '$Contrasena', CorreoDeEmpresa = '$CorreoDeEmpresa' WHERE idUsuario=$idUsuario";
  mysqli_query($con, $query);
  $_SESSION['message'] = 'Actualizado Exitosamente';
  $_SESSION['message_type'] = 'warning';
  header('Location: tablaProve.php');
}

?>
<?php include('includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="editProve.php?idUsuario=<?php echo $_GET['idUsuario']; ?>" method="POST">

        <div class="form-group">
          <input name="idUsuario" disabled type="text" class="form-control" value="<?php echo $idUsuario; ?>" placeholder="Editar ID">
        </div>

        <div class="form-group">
          <input name="Usuario" type="text" class="form-control" value="<?php echo $Usuario; ?>" placeholder="Editar Usuario">
        </div>

        <div class="form-group">
          <input name="Contrasena" type="text" class="form-control" value="<?php echo $Contrasena; ?>" placeholder="Editar Contraseña">
        </div>

        <div class="form-group">
          <input name="CorreoDeEmpresa" type="text" class="form-control" value="<?php echo $CorreoDeEmpresa; ?>" placeholder="Editar Correo">
        </div>

        <button class="btn-success" name="actualizar">
          Actualizar
</button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>

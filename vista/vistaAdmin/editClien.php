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
            
				<a class="salir" href="tablaClien.php"><box-icon name='left-arrow-circle' type='solid' ></box-icon></box-icon></a>
      <div class="admin3">
      <img id="imagenA" src="img/Admin-Profile.png" alt=""> 
      <p class="Ad"><b>Administrador</b></p>
      </div>
   </nav>   
</header>

<div>

<?php
include("db.php");
$idUsuario = '';
$Usuario= '';
$Contraseña = '';
$CorreoDeEmpresa= '';


if  (isset($_GET['id_cliente'])) {
  $id_cliente = $_GET['id_cliente'];
  $query = "SELECT * FROM cliente WHERE id_cliente=$id_cliente";
  $result = mysqli_query($con, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $id_cliente = $row['id_cliente'];
    $usuario = $row['usuario'];
    $contrasena = $row['contrasena'];
    $cedula = $row['cedula'];
    $edad = $row['edad'];
  }
}

if (isset($_POST['actualizar'])) {
  $id_cliente = $_GET['id_cliente'];
  $usuario= $_POST['usuario'];
  $contrasena = $_POST['contrasena'];
  $cedula = $_POST['cedula'];
  $edad = $_POST['edad'];

  $query = "UPDATE cliente set id_cliente = '$id_cliente', usuario = '$usuario', contrasena = '$contrasena', cedula = '$cedula', edad = '$edad' WHERE id_cliente=$id_cliente";
  mysqli_query($con, $query);
  $_SESSION['message'] = 'Actualizado Exitosamente';
  $_SESSION['message_type'] = 'warning';
  header('Location: tablaClien.php');
}

?>
<?php include('includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="editClien.php?id_cliente=<?php echo $_GET['id_cliente']; ?>" method="POST">

        <div class="form-group">
          <input name="id_cliente" disabled type="text" class="form-control" value="<?php echo $id_cliente; ?>" placeholder="Editar ID">
        </div>

        <div class="form-group">
          <input name="usuario" type="text" class="form-control" value="<?php echo $usuario; ?>" placeholder="Editar Usuario">
        </div>

        <div class="form-group">
          <input name="contrasena" type="text" class="form-control" value="<?php echo $contrasena; ?>" placeholder="Editar Contraseña">
        </div>

        <div class="form-group">
          <input name="cedula" type="number" class="form-control" value="<?php echo $cedula; ?>" placeholder="Editar cedula">
        </div>

        <div class="form-group">
          <input name="edad" type="number" class="form-control" value="<?php echo $edad; ?>" placeholder="Editar edad">
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

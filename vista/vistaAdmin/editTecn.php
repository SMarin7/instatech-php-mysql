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
            
				<a class="salir" href="tablaTecn.php"><box-icon name='left-arrow-circle' type='solid' ></box-icon></box-icon></a>
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


if  (isset($_GET['IdTecnico'])) {
  $IdTecnico = $_GET['IdTecnico'];
  $query = "SELECT * FROM tecnico WHERE IdTecnico=$IdTecnico";
  $result = mysqli_query($con, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $IdTecnico = $row['IdTecnico'];
    $usuario = $row['usuario'];
    $nombrecompleto = $row['nombrecompleto'];
    $cedula = $row['cedula'];
    $contrasena = $row['contrasena'];
    $edad = $row['edad'];
    $celular = $row['celular'];
    $email = $row['email'];

  }
}

if (isset($_POST['actualizar'])) {
  $IdTecnico = $_GET['IdTecnico'];
  $usuario= $_POST['usuario'];
  $nombrecompleto = $_POST['nombrecompleto'];
  $cedula = $_POST['cedula'];
  $contrasena = $_POST['contrasena'];
  $edad= $_POST['edad'];
  $celular = $_POST['celular'];
  $email = $_POST['email'];
  $archivo = $_POST['archivo'];

  $query = "UPDATE tecnico set IdTecnico = '$IdTecnico', usuario = '$usuario', nombrecompleto = '$nombrecompleto', cedula = '$cedula', contrasena = '$contrasena', edad = '$edad', celular = '$celular', email = '$email'  WHERE IdTecnico=$IdTecnico";
  mysqli_query($con, $query);
  $_SESSION['message'] = 'Actualizado Exitosamente';
  $_SESSION['message_type'] = 'warning';
  header('Location: tablaTecn.php');
}

?>
<?php include('includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="editTecn.php?IdTecnico=<?php echo $_GET['IdTecnico']; ?>" method="POST">

        <div class="form-group">
          <input name="IdTecnico" disabled type="text" class="form-control" value="<?php echo $IdTecnico; ?>" placeholder="Editar ID">
        </div>

        <div class="form-group">
          <input name="usuario" type="text" class="form-control" value="<?php echo $usuario; ?>" placeholder="Editar Usuario">
        </div>

        <div class="form-group">
          <input name="nombrecompleto" type="text" class="form-control" value="<?php echo $nombrecompleto; ?>" placeholder="Editar Nombre">
        </div>

        <div class="form-group">
          <input name="cedula"  type="number" class="form-control" value="<?php echo $cedula; ?>" placeholder="Editar Cedula">
        </div>

        <div class="form-group">
          <input name="contrasena" type="text" class="form-control" value="<?php echo $contrasena; ?>" placeholder="Editar Contraseña">
        </div>

        <div class="form-group">
          <input name="edad" type="text" class="form-control" value="<?php echo $edad; ?>" placeholder="Editar Edad">
        </div>

        <div class="form-group">
          <input name="celular" type="text" class="form-control" value="<?php echo $celular; ?>" placeholder="Editar Celular">
        </div>

        <div class="form-group">
          <input name="email" type="email" class="form-control" value="<?php echo $email; ?>" placeholder="Editar Email">
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

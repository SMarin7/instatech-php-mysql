
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
            
				<a class="salir" href="tablas.php"><box-icon name='left-arrow-circle' type='solid' ></box-icon></box-icon></a>
      <div class="admin3">
      <img id="imagenA" src="img/Admin-Profile.png" alt=""> 
      <p class="Ad"><b>Administrador</b></p>
      </div>
   </nav>   
</header>

<div>

<br><br><br>
    
    <title>Tabla Clientes</title>
    <center><h1 class="tituloTaa">Tabla Clientes</h1></center>


</div>

<main class="container p-4">
  <div class="row">
    <div class="col-md-4">
      <!-- MESSAGES -->

      <?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php session_unset(); } ?>

        <div class="tablaCliente">
    <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>ID</th>
            <th>Usuario</th>
            <th>Contraseña</th>
            <th>Cedula</th>
            <th>Edad</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $query = "SELECT * FROM cliente";
          $result_tasks = mysqli_query($con, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['id_cliente']; ?></td>
            <td><?php echo $row['usuario']; ?></td>
            <td><?php echo $row['contrasena']; ?></td>
            <td><?php echo $row['cedula']; ?></td>
            <td><?php echo $row['edad']; ?></td>
            <td>
              <a href="editClien.php?id_cliente=<?php echo $row['id_cliente']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
              <a href="eliminarClien.php?id_cliente=<?php echo $row['id_cliente']?>" class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
    </div>
    </div>
  </div>
</main>

<?php include('includes/footer.php'); ?>

</section>
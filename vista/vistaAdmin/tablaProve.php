
<head>
<link rel="shortcut icon" href="img/iconoAdmin.png" type="image/x-icon">
<link rel="stylesheet" href="css/tablas.css">
</head>

<section class="fondito">
<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
<?php include("db.php"); ?>

<?php include('includes/header.php'); ?>

<header class="menu-wrap">
   <nav class="navegacion">
            
				<a class="salir" href="tablas.php"><box-icon name='left-arrow-circle' type='solid' ></box-icon></box-icon></a>
      <div class="admin3">
      <img id="imagenA" src="img/Admin-Profile.png" alt=""> 
      <p class="Ad"><b>Administrador</b></p>
      </div>
   </nav>   
</header>

<br><br><br>

<div>

    <title>Tabla Proveedores</title>
    <center><h1 class="tituloTA">Tabla Proveedores</h1></center>

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

      <!-- ADD TASK FORM -->
      <div class="card card-body">
        <form action="saveProve.php" method="POST">

          <div class="form-group">
            <input type="text" required name="Usuario" class="form-control" placeholder="Usuario" autofocus>
          </div>

          <div class="form-group">
            <input type="text" required name="Contrasena" class="form-control" placeholder="Contrasena" autofocus>
          </div>

          <div class="form-group">
            <input type="email" required name="CorreoDeEmpresa" class="form-control" placeholder="Correo" autofocus>
          </div>

          <input type="submit" required name="enviar" class="btn btn-success btn-block" value="Enviar">
        </form>
      </div>
    </div>
    <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>ID</th>
            <th>Usuario</th>
            <th>Contraseña</th>
            <th>Correo</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $query = "SELECT * FROM provedores";
          $result_tasks = mysqli_query($con, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['idUsuario']; ?></td>
            <td><?php echo $row['Usuario']; ?></td>
            <td><?php echo $row['Contrasena']; ?></td>
            <td><?php echo $row['CorreoDeEmpresa']; ?></td>
            <td>
              <a href="editProve.php?idUsuario=<?php echo $row['idUsuario']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
              <a href="eliminarProve.php?idUsuario=<?php echo $row['idUsuario']?>" class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</main>

<?php include('includes/footer.php'); ?>

</section>
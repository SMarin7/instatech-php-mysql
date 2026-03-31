<?php
error_reporting(~E_NOTICE);
require_once '../controlador/conexion.php';

$con = new mysqli($server, $user, $pass, $db);

if ($con->connect_error) {
    die("Error en la conexión: " . $con->connect_error);
}

if (isset($_GET['edit_id'])) {
    $id = $_GET['edit_id'];

    $stmt = $con->prepare("SELECT nombre, descripcion, imagen, precio, marca, cantidad FROM productos WHERE idProducto = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $nombre = $row['nombre'];
        $descripcion = $row['descripcion'];
        $precio = $row['precio'];
        $marca = $row['marca'];
        $cantidad = $row['cantidad'];
        $imagen = $row['imagen'];
    }
}

if (isset($_POST['btnsave'])) {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $marca = $_POST['marca'];
    $cantidad = $_POST['cantidad'];

    $imgFile = $_FILES['imagen']['name'];
    $tmp_dir = $_FILES['imagen']['tmp_name'];
    $imgSize = $_FILES['imagen']['size'];

    if (empty($nombre)) {
        $errMSG = "Por favor, ingresa un nombre de producto.";
    } elseif (empty($descripcion)) {
        $errMSG = "Por favor, ingresa una descripción.";
    } else {
        if (!empty($imgFile)) {
            $upload_dir = '../vista/user_images/';
            $imgExt = strtolower(pathinfo($imgFile, PATHINFO_EXTENSION));
            $valid_extensions = array('jpeg', 'jpg', 'png', 'gif');
            $nuevaImagen = rand(1000, 1000000) . "." . $imgExt;

            if (in_array($imgExt, $valid_extensions)) {
                if ($imgSize < 5000000) {
                    move_uploaded_file($tmp_dir, $upload_dir . $nuevaImagen);
                    $imagen = $nuevaImagen;
                } else {
                    $errMSG = "La imagen es demasiado grande. Máximo 5MB.";
                }
            } else {
                $errMSG = "Solo se permiten archivos JPG, JPEG, PNG y GIF.";
            }
        }

        if (!isset($errMSG)) {
            $stmt = $con->prepare('UPDATE productos SET nombre = ?, descripcion = ?, imagen = ?, precio = ?, marca = ?, cantidad = ? WHERE idProducto = ?');
            $stmt->bind_param('ssssssi', $nombre, $descripcion, $imagen, $precio, $marca, $cantidad, $id);

            if ($stmt->execute()) {
                header("Location: ../vista/catalogoProv.php");
                exit();
            } else {
                $errMSG = "Error al actualizar el registro.";
            }
        }
    }
}

$con->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar producto | InstaTech</title>
    <link rel="stylesheet" href="../css/formCrud.css">
</head>
<body>

<div class="page-wrapper">
    <div class="form-card">
        <h1 class="form-title">Editar producto</h1>
        <p class="form-subtitle">Actualiza la información del producto seleccionado.</p>

        <?php if (isset($errMSG)) { ?>
            <div class="alert alert-error"><?php echo $errMSG; ?></div>
        <?php } ?>

        <form method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $id; ?>">

            <div class="form-grid">
                <div class="form-group">
                    <label>Nombre del producto</label>
                    <input type="text" name="nombre" value="<?php echo $nombre; ?>" required>
                </div>

                <div class="form-group">
                    <label>Marca</label>
                    <input type="text" name="marca" value="<?php echo $marca; ?>" required>
                </div>

                <div class="form-group full">
                    <label>Descripción</label>
                    <textarea name="descripcion" required><?php echo $descripcion; ?></textarea>
                </div>

                <div class="form-group">
                    <label>Precio</label>
                    <input type="number" name="precio" value="<?php echo $precio; ?>" required>
                </div>

                <div class="form-group">
                    <label>Cantidad</label>
                    <input type="number" name="cantidad" value="<?php echo $cantidad; ?>" required>
                </div>

                <div class="form-group full">
                    <label>Imagen actual</label>
                    <div class="current-image-box">
                        <img src="../vista/user_images/<?php echo $imagen; ?>" alt="Imagen actual del producto">
                        <span>Puedes dejar esta imagen o seleccionar una nueva.</span>
                    </div>
                </div>

                <div class="form-group full">
                    <label>Seleccionar nueva imagen</label>
                    <input type="file" name="imagen" accept="image/*">
                </div>
            </div>

            <div class="button-row">
                <button type="submit" name="btnsave" class="btn-main">Guardar cambios</button>
                <a href="../vista/catalogoProv.php" class="btn-secondary">Volver al catálogo</a>
            </div>
        </form>
    </div>
</div>

</body>
</html>
<?php
error_reporting(~E_NOTICE);
require_once '../controlador/conexion.php';

$nombre = "";
$descripcion = "";
$precio = "";
$marca = "";
$cantidad = "";
$errMSG = "";

if (isset($_POST['btnsave'])) {
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
    } elseif (empty($imgFile)) {
        $errMSG = "Por favor, selecciona una imagen.";
    } else {
        $upload_dir = 'user_images/';
        $imgExt = strtolower(pathinfo($imgFile, PATHINFO_EXTENSION));
        $valid_extensions = array('jpeg', 'jpg', 'png', 'gif');
        $imagen = rand(1000, 1000000) . "." . $imgExt;

        if (in_array($imgExt, $valid_extensions)) {
            if ($imgSize < 5000000) {
                move_uploaded_file($tmp_dir, $upload_dir . $imagen);
            } else {
                $errMSG = "La imagen es demasiado grande. Máximo 5MB.";
            }
        } else {
            $errMSG = "Solo se permiten archivos JPG, JPEG, PNG y GIF.";
        }
    }

    if (empty($errMSG)) {
        $con = new mysqli($server, $user, $pass, $db);

        if ($con->connect_error) {
            die("Error en la conexión: " . $con->connect_error);
        }

        $stmt = $con->prepare('INSERT INTO productos (nombre, descripcion, imagen, precio, marca, cantidad) VALUES (?, ?, ?, ?, ?, ?)');
        $stmt->bind_param('ssssss', $nombre, $descripcion, $imagen, $precio, $marca, $cantidad);

        if ($stmt->execute()) {
            header("Location: ../vista/catalogoProv.php");
            exit();
        } else {
            $errMSG = "Error al insertar el registro.";
        }

        $con->close();
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir producto | InstaTech</title>
    <link rel="stylesheet" href="../css/formCrud.css">
</head>
<body>

<div class="page-wrapper">
    <div class="form-card">
        <h1 class="form-title">Subir producto</h1>
        <p class="form-subtitle">Agrega un nuevo producto al catálogo de InstaTech.</p>

        <?php if (!empty($errMSG)) { ?>
            <div class="alert alert-error"><?php echo htmlspecialchars($errMSG); ?></div>
        <?php } ?>

        <form method="post" enctype="multipart/form-data">
            <div class="form-grid">
                <div class="form-group">
                    <label>Nombre del producto</label>
                    <input type="text" name="nombre" placeholder="Ej: Iphone 18" value="<?php echo htmlspecialchars($nombre); ?>">
                </div>

                <div class="form-group">
                    <label>Marca</label>
                    <input type="text" name="marca" placeholder="Ej: Apple" value="<?php echo htmlspecialchars($marca); ?>">
                </div>

                <div class="form-group full">
                    <label>Descripción</label>
                    <textarea name="descripcion" placeholder="Describe el producto"><?php echo htmlspecialchars($descripcion); ?></textarea>
                </div>

                <div class="form-group">
                    <label>Precio</label>
                    <input type="number" name="precio" placeholder="Ej: 1000" value="<?php echo htmlspecialchars($precio); ?>">
                </div>

                <div class="form-group">
                    <label>Cantidad</label>
                    <input type="number" min="1" name="cantidad" placeholder="Ej: 5" value="<?php echo htmlspecialchars($cantidad); ?>">
                </div>

                <div class="form-group full">
                    <label>Imagen del producto</label>
                    <input type="file" name="imagen" accept="image/*">
                </div>
            </div>

            <div class="button-row">
                <button type="submit" name="btnsave" class="btn-main">Guardar producto</button>
                <a href="../vista/catalogoProv.php" class="btn-secondary">Volver al catálogo</a>
            </div>
        </form>
    </div>
</div>

</body>
</html>
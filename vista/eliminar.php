<?php

require '../controlador/conexion.php';
    
    if (isset($_GET['delete_id'])) {
        $delete_id = $_GET['delete_id'];
    
        // Select image from db to delete
        $stmt_select = $con->prepare('SELECT imagen FROM productos WHERE idProducto = ?');
        $stmt_select->bind_param('i', $delete_id);
        $stmt_select->execute();
        $result_select = $stmt_select->get_result();
        $imgRow = $result_select->fetch_assoc();
    
        // Delete the actual record from db
        $stmt_delete = $con->prepare('DELETE FROM productos WHERE idProducto = ?');
        $stmt_delete->bind_param('i', $delete_id);
        $stmt_delete->execute();

        header("Location: catalogoProv.php");
    
    }
    ?>
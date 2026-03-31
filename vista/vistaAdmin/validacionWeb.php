<?php

session_start();
if (isset($_POST['usuario']) && isset($_POST['contrasena'])) {
    // Comprobar las credenciales del usuario y autenticar si son válidas.
    if (validarCredenciales($_POST['usuario'], $_POST['contrasena'])) {
        $_SESSION['autenticado'] = true;
    } else {
        // Mostrar un mensaje de error o redirigir a la página de inicio de sesión.
    }
}


session_start();
if (isset($_SESSION['autenticado'])) {
    unset($_SESSION['autenticado']);
}


session_start();
if (!isset($_SESSION['autenticado'])) {
    // Redirigir al usuario a la página de inicio de sesión.
    header('Location: login.php');
    exit();
}


header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
header('Pragma: no-cache');

?>
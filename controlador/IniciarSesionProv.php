<?php   
    session_start();
    include('../controlador/conexion.php');

    if (isset($_POST['Usuario']) && isset($_POST['Contrasena']) ) {

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $Usuario = validate($_POST['Usuario']); 
    $Contrasena = validate($_POST['Contrasena']);

    if (empty($Usuario)) {
        header("Location: formprove.php?error=El Usuario Es Requerido");
        exit();
    }elseif (empty($Contrasena)) {
        header("Location: formprove.php?error=La contraseña Es Requerida");
        exit();
    }else{

        // $Clave = md5($Clave);

        $Sql = "SELECT * FROM provedores WHERE Usuario = '$Usuario' AND Contrasena ='$Contrasena'"; 

        $result = mysqli_query($con, $Sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['Usuario'] === $Usuario && $row['Contraseña'] === $Contraseña) {
                $_SESSION['Usuario'] = $row['Usuario'];
                $_SESSION['idUsuario'] = $row['idUsuario'];
                header("Location:../vista/catalogoProv.php");
                exit();
            }else {
                header("Location:/vista/VistaProv.php?error=El usuario o la clave son incorrectas");
                exit();
            }

        }else {
            header("Location: /vista/VistaProv.php?error=El usuario o la clave son incorrectas");
            exit();
        }
    }

} else {
    header("Location:vista/RegisProv.php");
            exit();
}

?>
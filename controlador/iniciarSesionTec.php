<?php   
    session_start();
    include('../controlador/conexion.php');

    if (isset($_POST['usuario']) && isset($_POST['contrasena']) ) {

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $usuario = validate($_POST['usuario']); 
    $contrasena = validate($_POST['contrasena']);

    if (empty($usuario)) {
        header("Location: formtec.php?error=El Usuario Es Requerido");
        exit();
    }elseif (empty($contrasena)) {
        header("Location: formtec.php?error=La contraseña Es Requerida");
        exit();
    }else{

        // $Clave = md5($Clave);

        $Sql = "SELECT * FROM tecnico WHERE usuario = '$usuario' AND contrasena ='$contrasena'"; 

        $result = mysqli_query($con, $Sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['usuario'] === $usuario && $row['contrasena'] === $contrasena) {
                $_SESSION['usuario'] = $row['usuario'];
                $_SESSION['IdTecnico'] = $row['IdTecnico'];
                header("Location:../vista/VistaTec.php");
                exit();
            }else {
                header("Location:/vista/VistaTec.php?error=El usuario o la clave son incorrectas");
                exit();
            }

        }else {
            header("Location: /vista/VistaTec.php?error=El usuario o la clave son incorrectas");
            exit();
        }
    }

} else {
    header("Location:vista/RegisTec.php");
            exit();
}

?>
<?php   

if(!empty($_POST)){

    if(isset($_POST["usuario"]) &&isset($_POST["contrasena"]) &&isset($_POST["cedula"]) &&isset($_POST["edad"]))
    
    { include "../controlador/conexion.php";

            $sql = "INSERT INTO cliente (usuario,contrasena,cedula,edad )
             VALUES (\"$_POST[usuario]\",\"$_POST[contrasena]\",\"$_POST[cedula]\", \"$_POST[edad]\")";

            $query = $con->query($sql);
      
            if($query!=null){
               
                print "<script>alert(\"Agregado exitosamente.\");window.location='../vista/formusuario.php';</script>";
                 }else{
                     
             print "<script>alert(\"No se pudo agregar.\");window.location='../vista/regisUsuario.php';</script>";
            }
        }
    }       

?>
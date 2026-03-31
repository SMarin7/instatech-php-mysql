<?php   

if(!empty($_POST)){

    if(isset($_POST["usuario"]) &&isset($_POST["nombrecompleto"]) &&isset($_POST["cedula"]) &&isset($_POST["contrasena"]) &&isset($_POST["edad"]) &&isset($_POST["celular"]) &&isset($_POST["email"]) &&isset($_POST["archivo"]))
    
    { include "../controlador/conexion.php";

            $sql = "INSERT INTO tecnico (usuario,nombrecompleto,cedula,contrasena,edad,celular,email,archivo )
             VALUES (\"$_POST[usuario]\",\"$_POST[nombrecompleto]\",\"$_POST[cedula]\", \"$_POST[contrasena]\", \"$_POST[edad]\", \"$_POST[celular]\", \"$_POST[email]\", \"$_POST[archivo]\")";

            $query = $con->query($sql);
      
            if($query!=null){
               
                print "<script>alert(\"Agregado exitosamente.\");window.location='../vista/formtec.php';</script>";
                 }else{
                     
             print "<script>alert(\"No se pudo agregar.\");window.location='../vista/regisTec.php';</script>";
            }
        }
    }       

?>
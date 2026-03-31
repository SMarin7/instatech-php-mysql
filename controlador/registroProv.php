<?php   

if(!empty($_POST)){

    if(isset($_POST["Usuario"]) &&isset($_POST["Contrasena"]) &&isset($_POST["CorreoDeEmpresa"]))
    
    { include "../controlador/conexion.php";

            $sql = "INSERT INTO provedores(Usuario,Contrasena,CorreoDeEmpresa)
             VALUES (\"$_POST[Usuario]\",\"$_POST[Contrasena]\",\"$_POST[CorreoDeEmpresa]\")";

            $query = $con->query($sql);
      
            if($query!=null){
               
                print "<script>alert(\"Agregado exitosamente.\");window.location='../vista/formprove.php';</script>";
                 }else{
                     
             print "<script>alert(\"No se pudo agregar.\");window.location='../vista/RegisProv.php';</script>";
            }
        }
    }       

?>
<?php
    
        $baseD="prueba";
        $usuario="root";
        $contra="";
        $servidor="localhost";
        $tabla = "productos";
        
        
        $conexion = mysqli_connect("$servidor", "$usuario", "$contra", "$baseD");
        mysqli_set_charset($conexion, "utf8");


        if(!$conexion){

            die("No hay conexion ".mysqli_connect_errno());
        }
        else{
        // echo "Conexion correcta";
        }
    
?>
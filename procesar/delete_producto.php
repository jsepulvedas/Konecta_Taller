
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/style/for_Reg_Product.css">

    <title>Document</title>
</head>
<body>

<?php

//Open conexión
include("../config/cn.php");

$ident = $_GET['id'];

//echo $ident;



$resultados = mysqli_query($conexion, "DELETE FROM `productos` WHERE `productos`.`registroId` = '$ident'");
  
  {
    echo "El articulo fue eliminado con exito";
  }
  
?>

<center><a href="<?=$_SERVER["HTTP_REFERER"]?>" class="boton">Atras</a>   </center>
    
</body>
</html>





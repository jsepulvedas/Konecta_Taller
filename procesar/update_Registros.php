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

	date_default_timezone_set("America/Bogota");

	include("../config/cn.php");

	//Recepcion de datos
	$id = $_POST['id_Produc'];
	$nameProduct = $_POST['nombre_Produc'];
	$referencia = $_POST['referencia'];
	$precio = $_POST['precio_Produc'];
	$peso = $_POST['peso'];
	$categoria = $_POST['categoria'];
	$stock = $_POST['stock'];
	$fecha_Creacion = date("Y-m-d H:i:s");


	//Registros
		echo "<br>";
		echo $id."<br>";
		echo $nameProduct."<br>";
		echo $referencia."<br>";
		echo $precio."<br>";
		echo $peso."<br>";
		echo $categoria."<br>";
		echo $stock."<br>";
		echo $fecha_Creacion."<br>";
			
		
	//Consulta para registro
	$existe = 0;


	$actualizar = "UPDATE $tabla SET 
	
	id='$id', 
	nomProduc='$nameProduct', 
	referencia='$referencia', 
	precio='$precio', 
	peso='$peso', 
	categoria='$categoria', 
	stock='$stock', 
	fechCreacion='$fecha_Creacion', 
	fechUltiVenta='' 
	
	WHERE id = '$id'";


	//Ejecuta registro
	$resultado = mysqli_query($conexion, $actualizar);

	if ($resultado) {
		?>
		<h3 class="OK inicio"> ¡Has actualizado correctamente el producto!</h3>
		<?php
	}else{
		?>
		<h3 class="bad inicio"> ¡Ups ha ocurrido un error!</h3>
		<?php
	}

	//Cierre de la conexión
	mysqli_close($conexion);


?>


</body>
</html>











<?php

include("../config/cn.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar productos</title>

    <link href="../style/for_Reg_Product.css" rel="stylesheet" type="text/css">
    
</head>
<body class="Inicio">

<center>
  <form method="post" name="frm" action="delete_Producto.php?id=%s">
      <table width="804" height="225" border="1">
        <tbody>
          <tr class="titulo_fondo">
            <th width="720" colspan="4" class="titulo">ELIMINAR PRODUCTOS</th>
          </tr>
          </tbody>
      </table>
      
 <div>
 	<div>
 		<table border="1">
 			<thead>
 				<tr align="center">
 					<th width="100">ID REGISTRO</th>
 					<th width="100">IDENTIFICACION</th>
 					<th width="100">NOMBRE PRODUCTO</th>
 					<th width="100">REFERENCIA</th>
 					<th width="100">PRECIO</th>
 					<th width="100">PESO</th>
 					<th width="100">CATEGORIA</th>
 					<th width="100">STOCK</th>
 					<th width="100">FECHA CREACIÓN</th>
 					<th width="100">FECHA Y HORA DE ULTIMA VENTA</th>
 					<th>ELIMINAR</th>
 				</tr>
 			</thead>
		  <tbody>
 	<?php
	


		$resultados = mysqli_query($conexion, "SELECT * FROM $tabla");

  		while ($consulta = mysqli_fetch_array($resultados))
		{	
	
    ?>
    
    <p></p>
		
		<tr align="center">
			<td><?php echo $consulta['registroId']; ?></td>
			<td><?php echo $consulta['id']; ?></td>
			<td><?php echo $consulta['nomProduc']; ?></td>
			<td><?php echo $consulta['referencia']; ?></td>
			<td><?php echo $consulta['precio']; ?></td>
			<td><?php echo $consulta['peso']; ?></td>
			<td><?php echo $consulta['categoria']; ?></td>
			<td><?php echo $consulta['stock']; ?></td>
			<td><?php echo $consulta['fechCreacion']; ?></td>
			<td><?php echo $consulta['fechUltiVenta']; ?></td>
			<td><input type="submit" formaction="../procesar/delete_producto.php?id=<?php echo $consulta['registroId']; ?>" value="Eliminar"></td>
		</tr>
		<?php
		}
		?>	
 			</tbody>
 		</table>
 	</div>
 </div>   
    
      
      
    <p>&nbsp;</p>
    <table width="490" border="0">
      <tbody>
        <tr>
          <td width="31" align="center" valign="middle" nowrap="nowrap">&nbsp;</td>
          <td width="151" align="center" valign="middle" nowrap="nowrap"><input type="button" class="btnEnviar" id="btnEnviar" value="Registrar Producto" onClick="window.location = 'reg_Product.php'" name="btnEnviar"></td>
          <td colspan="2" align="center" valign="middle" nowrap="nowrap"><input name="modRegistro" type="button" class="btnEnviar" id="inicio" title="modRegistro" value="Modificar Registro" onClick="window.location = 'update_Producto.php'"></td>
          <td width="31" align="center" valign="middle" nowrap="nowrap">&nbsp;</td>
        </tr>
        <tr>
          <td align="center" valign="middle" nowrap="nowrap">&nbsp;</td>
          <td align="center" valign="middle" nowrap="nowrap">&nbsp;</td>
          <td width="144" align="center" valign="middle" nowrap="nowrap">&nbsp;</td>
          <td width="113" align="center" valign="middle" nowrap="nowrap">&nbsp;</td>
          <td align="center" valign="middle" nowrap="nowrap">&nbsp;</td>
        </tr>
        <tr>
		<td colspan="5" align="center" valign="middle" nowrap="nowrap"><a href="https://www.grupokonecta.com/"><input name="inicio" type="button" class="btnEnviar" id="inicio3" title="salir" value="Salir"></a></td>
        </tr>
      </tbody>
    </table>
    </p>
      
    </form>
    
   
   
    
    
</center>





 

</body>
</html>
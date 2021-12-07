<?php
  
  //Open conexión
  include("../config/cn.php");

  $id = $_POST['id_Produc'];

  $resultados = mysqli_query($conexion, "SELECT *, COUNT(id) FROM $tabla WHERE id = $id");

  while ($consulta = mysqli_fetch_array($resultados)) 
  {
	  ?>
<link href="../style/consulta_Registros.css" rel="stylesheet" type="text/css">

    
    
    
<center>
    
  <table width="1104" border="1">
  <tbody>
    <tr class="titulos_tabla">
      <td width="130">Id Producto</td>
      <td width="190">Nombre del Producto</td>
      <td width="87">Referencia</td>
      <td width="92">Precio</td>
      <td width="72">Peso</td>
      <td width="105">Categoria</td>
      <td width="111">Stock</td>
      <td width="114">Fecha de Creación</td>
      <td width="145">Fecha de Ultima venta</td>
    </tr>
    <tr>
      <td align="center"><?php echo $consulta['id']; ?></td>
      <td align="center"><?php echo $consulta['nomProduc']; ?></td>
      <td align="center"><?php echo $consulta['referencia']; ?></td>
      <td align="center"><?php echo $consulta['precio']; ?></td>
      <td align="center"><?php echo $consulta['peso']; ?></td>
      <td align="center"><?php echo $consulta['categoria']; ?></td>
      <td align="center"><?php echo $consulta['stock']; ?></td>
      <td align="center"><?php echo $consulta['fechCreacion']; ?></td>
      <td align="center"><?php echo $consulta['fechUltiVenta']; ?></td>
    </tr>
  </tbody>
</table>
</center>
<p>
  <?php

  }

?>
  <center><a href="<?=$_SERVER["HTTP_REFERER"]?>" class="boton">Atras</a>   </center>

  <?php

  //Cierre de la conexión
	mysqli_close($conexion);

?>
</p>


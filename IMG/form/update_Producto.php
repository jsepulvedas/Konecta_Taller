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
    <form action="../procesar/pro_Reg_Product.php" method="post" name="frm">
      <table width="804" height="225" border="1">
        <tbody>
          <tr class="titulo_fondo">
            <th colspan="4" class="titulo">MODIFICAR PRODUCTOS</th>
          </tr>
          <tr>
            <td colspan="4">&nbsp;</td>
          </tr>
          <tr>
            <td width="145" class="textos_Lebel">ID PRODUCTO</td>
            <td colspan="3" align="center" class="txtCuadros"><input name="id_Produc" type="text" required="required" class="txtCuadros" id="id_Produc" title="id_Produc" maxlength="11"></td>
          </tr>
          <tr>
            <td class="textos_Lebel">NOMBRE DEL PRODUCTO</td>
            <td width="209"><input name="nombre_Produc" type="text" title="nombre_Produc" maxlength="200" id="nombre_Produc"></td>
            <td width="115" align="right" class="textos_Lebel">REFERENCIA</td>
            <td width="251" align="left"><input name="referencia" type="text" class="txtCuadros" id="referencia" title="referencia" maxlength="200"></td>
          </tr>
          <tr>
            <td class="textos_Lebel">PRECIO</td>
            <td><input name="precio_Produc" type="number" title="precio_Produc" maxlength="10" id="precio_Produc"></td>
            <td align="right" class="textos_Lebel">PESO</td>
            <td align="left"><input name="peso" while="1px" type="number" required id="peso" title="peso" maxlength="10" value="1">
              kg</td>
          </tr>
          <tr>
            <td class="textos_Lebel">CATEGORIA</td>
            <td align="left"><input name="categoria" type="text" title="categoria" maxlength="50" id="categoria"></td>
            <td align="right" class="textos_Lebel">STOCK</td>
            <td align="left"><input name="stock" type="number" required id="stock" title="stock" value="1" maxlength="4">
            Unidades</td>
          </tr>
        </tbody>
      </table>
      <p>&nbsp;</p>
      <table width="490" border="0">
        <tbody>
          <tr>
            <td width="31" align="center" valign="middle" nowrap="nowrap">&nbsp;</td>
            <td width="151" align="center" valign="middle" nowrap="nowrap"><input type="button" class="btnEnviar" id="btnEnviar" value="Registrar Producto" onClick="window.location = 'reg_Product.php'" name="btnEnviar"></td>
            <td width="144" align="center" valign="middle" nowrap="nowrap"><input name="modRegistro" type="submit" class="btnEnviar" id="inicio" formaction="../procesar/update_Registros.php" title="modRegistro" value="Modificar Registro"></td>
            <td width="113" align="center" valign="middle" nowrap="nowrap"><input name="elimiRegistro" type="button" class="btnEnviar" id="inicio2" title="elimiRegistro" value="Eliminar Registro" onClick="window.location = 'delete_Producto.php'" ></td>
            <td width="31" align="center" valign="middle" nowrap="nowrap">&nbsp;</td>
          </tr>
          <tr>
            <td align="center" valign="middle" nowrap="nowrap">&nbsp;</td>
            <td align="center" valign="middle" nowrap="nowrap">&nbsp;</td>
            <td align="center" valign="middle" nowrap="nowrap"><input name="buscar" type="submit" class="btnEnviar" id="inicio4" formaction="../procesar/buscar_Articulo.php" title="buscar" value="Buscar Registro"></td>
            <td align="center" valign="middle" nowrap="nowrap">&nbsp;</td>
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
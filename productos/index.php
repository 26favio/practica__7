<?php 
require('conexcion.php');
$query="SELECT id_producto,descripcion,costo_unitario, cantidad,stock_minimo,id_categoria FROM productos";
$resultado=$mysqli->query($query);


 ?>
 <html>
 <head>
 	<title>registro de producto</title>
 	<link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body>
 <CENTER><h1>REDISTRO DE PRODUCTOS</h1></CENTER>
<a href="nuevo.php">NUEVO PRODUCTO</a>
<p> </p>
 <table border=1 widhth="80%">
<thead>
<tr>

<td><b>NUMERO</b> </td>
<td><b>DESCRIPCION</b> </td>
<td><b>COSTO UNITARIO</b> </td>
<td><b>CANTIDAD</b> </td>
<td><b>STOCK MINIMO</b> </td>
<td><b>CATEGORIA</b> </td>

<TH COLSPAN="2"><B>ACCION</B></TH>
								
</tr>


<tbody>
<?php while($row=$resultado->fetch_assoc()){ ?>
<tr>

<td><?php echo $row['id_producto']; ?> 	</td>
<td><?php echo $row['descripcion']; ?></td>
<td><?php echo $row['costo_unitario']; ?></td>
<td><?php echo $row['cantidad']; ?></td>
<td><?php echo $row['stock_minimo']; ?></td>
<td><?php echo $row['id_categoria']; ?></td>

<td><a href="modificar.php?id=<?php echo $row['id_producto'];?>">Modificar</a> </td>

<td><a href="eliminar.php?id=<?php echo $row['id_producto'];?>">Eliminar</a> </td>

</tr>
<?php } ?>

</tbody>

</thead>


 </table>
 </body>
 </html>
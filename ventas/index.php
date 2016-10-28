<?php 
require('conexcion.php');
$query="SELECT id_ventas,fecha,id_producto, cantidad,total,id_usuario FROM ventas";
$resultado=$mysqli->query($query);

 ?>
 <html>
 <head>
 	<title>registro de ventas</title>
 	<link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body>
 <CENTER><h1>REDISTRO DE VENTAS</h1></CENTER>
<a href="nuevo.php">NUEVA VENTA</a>
<p> </p>
 <table border=1 widhth="80%">
<thead>
<tr>



<td><b>NUMERO</b> </td>
<td><b>FECHA VENDIDA</b> </td>
<td><b>PRODUCTO</b> </td>
<td><b>CANTIDAD</b> </td>
<td><b>TOTAL</b> </td>
<td><b>USUARIO</b> </td>

<TH COLSPAN="2"><B>ACCION</B></TH>
								
</tr>


<tbody>
<?php while($row=$resultado->fetch_assoc()){ ?>
<tr>

<td><?php echo $row['id_ventas']; ?> 	</td>
<td><?php echo $row['fecha']; ?></td>
<td><?php echo $row['id_producto']; ?></td>
<td><?php echo $row['cantidad']; ?></td>
<td><?php echo $row['total']; ?></td>
<td><?php echo $row['id_usuario']; ?></td>


<td><a href="modificar.php?id=<?php echo $row['id_ventas'];?>">Modificar</a> </td>

<td><a href="eliminar.php?id=<?php echo $row['id_ventas'];?>">Eliminar</a> </td>

</tr>
<?php } ?>

</tbody>

</thead>


 </table>
 </body>
 </html>
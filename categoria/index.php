<?php 
require('conexcion.php');
$query="SELECT id_categoria,descripcion FROM categoria";
$resultado=$mysqli->query($query);
?>
 <html>
 <head>
 	<title>registro de categoria</title>
 	<link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body>
 <CENTER><h1>REDISTRO DE CATEGORIA</h1></CENTER>
<a href="nuevo.php">NUEVO PRODUCTO</a>
<p> </p>
 <table border=1 widhth="80%">
    <thead>
       <tr>

         <td><b>NUMERO</b> </td>
         <td><b>DESCRIPCION</b> </td>

         <TH COLSPAN="2">ACCION</B></TH>
								
       </tr>


    <tbody>
       <?php while($row=$resultado->fetch_assoc()){ ?>
         <tr>

            <td><?php echo $row['id_categoria']; ?> 	</td>
            <td><?php echo $row['descripcion']; ?></td>

<td><a href="modificar.php?id=<?php echo $row['id_categoria'];?>">Modificar</a> </td>

<td><a href="eliminar.php?id=<?php echo $row['id_categoria'];?>">Eliminar</a> </td>

</tr>
<?php } ?>
 

</tbody>

</thead>


 </table>
 </body>
 </html>
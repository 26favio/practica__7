<?php 
include 'class.farmacia.php';
$datos = array('usuario'=>'', 'clave'=>'', 'nombre'=>'', 'correo'=>'', 'id'=>'');
$accion = 'insert';
include 'get.php';
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>usuarios</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/fonts.css">
</head>
<body>

<form action="post.php" method="post">

	<div class="icon-user-plus"></div>
	<br>
	<br>
	<br>
	
	<input type="text" name="usuario" value="<?php echo $datos['usuario'] ?>" placeholder="usuario" required="requiered">
	
	<input type="password" name="clave" value="<?php echo $datos['clave'] ?>" placeholder="password" required="requiered">
	
	<input type="text" name="nombre"  value="<?php echo $datos['nombre'] ?>"placeholder="nombre" required="requiered">
	
	<input type="text" name="correo"  value="<?php echo $datos['correo'] ?>"placeholder="correo" required="requiered">

	

	<input type="hidden" name="id" value="<?php  echo $datos['id_usuario']?>">
	<input type="hidden" name="accion" value="<?php  echo $accion?>">
	<input type="submit" name="submit" value="Enviar">
</form>

<?php include 'tabla.php';?>

<a href="salir.php" class="texto1">Cerrar Sesion (Salir)</a><!--redirecciona a al archivo para cerrar la session-->
</body>
</html> 
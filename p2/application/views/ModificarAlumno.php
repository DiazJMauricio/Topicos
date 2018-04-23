<!DOCTYPE html>
<html>
<head>
	<title>Modificar</title>
</head>
<body>
	<form method="POST" action="">
		<input type="text" name="nombre" placeholder="Nombre" value="<?php echo $nombre; ?>">
		<input type="text" name="carrera" placeholder="Carrera" value="<?php echo $carrera; ?>">
		<input type="text" name="nregistro" placeholder="Nro de Registro" value="<?php echo $nregistro; ?>">
		<input type="text" name="agno" placeholder="Año que cursa" value="<?php echo $agno; ?>">
		<input type="submit" name="submit" value="Modificar">
	</form>
	<a href="<?php echo base_url();?>">Volver</a>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Modificar</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>plantilla/css/home.css">
</head>
<body>
	<div class="Formulario">
		<form method="POST" action="">
			<input type="text" name="nombre" placeholder="Nombre" value="<?php echo $nombre; ?>">
			<input type="text" name="carrera" placeholder="Carrera" value="<?php echo $carrera; ?>">
			<input type="text" name="nregistro" placeholder="Nro de Registro" value="<?php echo $nregistro; ?>">
			<input type="text" name="agno" placeholder="Año que cursa" value="<?php echo $agno; ?>">
			<input type="submit" name="submit" value="Modificar">
		</form>
		<div style="margin-left: 80%;font-size: 20px">
			<a href="<?php echo base_url();?>" id="link">Volver</a>
		</div>
	</div>
</body>
</html>
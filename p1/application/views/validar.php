<!DOCTYPE html>
<html>
<head>
	<title>Validacion</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>plantilla/css/home.css">
</head>
<body>
	<div><h2><?php echo $tipo; ?></h2></div>
	<div>
		<form action="<?php echo base_url();?>validar/registrar" method="post">			
			<input type="text" name="nombre"  placeholder="Nombre"><br>
			<input type="number" name="edad"  placeholder="Edad"><br>
			<input type="text" name="dni"  placeholder="DNI"><br>

			<?php if ($tipo == 'Infante' || $tipo == 'Juvenil'){ ?>
			<input type="text" name="nombretutor" placeholder="Nombre Tutor"><br>
			<input type="text" name="dnitutor" placeholder="DNI Tutor"><br>
			<?php } ?>
			<input type="submit" name="submit" value="Registrar"><br>
		</form>
	</div>
	<a href="<?php echo base_url();?>">Volver</a>
</body>
</html>
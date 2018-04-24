<!DOCTYPE html>
<html>
<head>
	<title>Validacion</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>plantilla/css/home.css">
</head>
<body>
	<div><h2></h2></div>
	<div>
		<form action="<?php echo base_url();?>validar/registrarMenor" method="post">		
			<input type="text" name="nombre"  placeholder="Nombre" value="<?php echo set_value('nombre'); ?>"><br>
			<input type="number" name="edad"  placeholder="Edad" value="<?php echo set_value('edad'); ?>"><br>
			<input type="text" name="dni"  placeholder="DNI" value="<?php echo set_value('dni'); ?>"><br>
			<input type="text" name="nombretutor" placeholder="Nombre Tutor" value="<?php echo set_value('nombretutor'); ?>"><br>
			<input type="text" name="dnitutor" placeholder="DNI Tutor" value="<?php echo set_value('dnitutor'); ?>"><br>
			<input type="submit" name="submit" value="Registrar"><br>
		</form>
	</div>
	<a href="<?php echo base_url();?>">Volver</a>
</body>
</html>
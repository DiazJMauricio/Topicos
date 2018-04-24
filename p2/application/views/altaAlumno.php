<!DOCTYPE html>
<html>
<head>
	<title>Alta Alumno</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>plantilla/css/home.css">
</head>
<body>
	<div class="Formulario">
		<form method="POST" action="">
			<input type="text" name="nombre" placeholder="Nombre">
			<input type="text" name="carrera" placeholder="Carrera">
			<input type="text" name="nregistro" placeholder="Nro de Registro">
			<input type="text" name="agno" placeholder="Año que cursa">
			<input type="submit" name="submit" value="Dar Alta">

		</form>
		<div style="margin-left: 80%;font-size: 20px">
			<a href="<?php echo base_url();?>" id="link" >Volver</a>
		</div>
	</div>
	
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Alta Docente</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>plantilla/css/home.css">
</head>
<body>
	<div class="Formulario">
		<form method="POST" action="">
			<input type="text" name="nombre" placeholder="Nombre">
			<input type="text" name="cargo" placeholder="Cargo">
			<input type="text" name="cuil" placeholder="CUIL/CUIT">
			<input type="submit" name="submit" value="Dar Alta">
		</form>
		<div style="margin-left: 80%;font-size: 20px">
			<a href="<?php echo base_url();?>" id="link">Volver</a>
		</div>
	</div>
</body>
</html>
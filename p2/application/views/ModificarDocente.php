<!DOCTYPE html>
<html>
<head>
	<title>Modificar</title>
</head>
<body>
	<form method="POST" action="">
		<input type="text" name="nombre" placeholder="Nombre" value="<?php echo $nombre; ?>">
		<input type="text" name="cargo" placeholder="Cargo" value="<?php echo $cargo; ?>">
		<input type="text" name="cuil" placeholder="CUIL/CUIT" value="<?php echo $cuil; ?>">
		<input type="submit" name="submit" value="Modificar">
	</form>
	<a href="<?php echo base_url();?>">Volver</a>
</body>
</html>
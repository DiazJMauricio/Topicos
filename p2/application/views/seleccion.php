<?php 

?>
<!DOCTYPE html>
<html>
<head>
	<title>Selecionar</title>
</head>
<body>
	<div>
		<form method="post">
			<input type="checkbox" name="personas" value="alumnos"><h5>Alumnos</h5>
			<input type="checkbox" name="personas" value="docentes"><h5>Docentes</h5>
			<input type="checkbox" name="personas" value="noDocentes"><h5>No Docentes</h5>
			<input type="submit" name="submit" value="<?php echo $accion;?>">
		</form>
	</div>

</body>
</html>
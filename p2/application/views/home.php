<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 5</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>plantilla/css/home.css">
</head>
<body>
	<div class="T1"><h5>Ejercicio 5</h5></div>
	<div class="Contenido">
		<div class="T2">
			<h3>Comunidad UNSL</h3>
		</div>
		<div>
			<h3>Tabla</h3>
			<form method="post">
				<input type="checkbox" name="personas[]" value="alumnos"><h5>Alumnos</h5>
				<input type="checkbox" name="personas[]" value="docentes"><h5>Docentes</h5>
				<input type="checkbox" name="personas[]" value="noDocentes"><h5>No Docentes</h5>
				<input type="submit" name="submit" value="Buscar">
			</form>
			<a href="">
				<div><h2>Dar Alta</h2></div>
			</a>
			<div>
			<?php 
				if (isset($_POST['personas'])) {
					if (sizeof($_POST['personas']) > 1) {
						?>
						<table>
							<tr>
								<td>Tipo</td>
								<td>Nombre</td>
							</tr>
						<?php
					}
					foreach ($_POST['personas'] as $chek) {
					}
				}
			?>

			</div>
		</div>
		
	</div>
</body>
</html>
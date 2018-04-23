<?php 
	$tablaAlumnos = ['tipo','nombre',''];
?>
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
					foreach ($_POST['personas'] as $chek) {
						if ($chek == 'alumnos') {
							?>
								<table>
									<h4>Alumnos</h4>
									<tr>
										<td>Nombre</td>
										<td>Carrera</td>
										<td>Nro Registro</td>
										<td>Año que cursa</td>
									</tr>
							<?php
							foreach ($alumnos->result() as $fila) {
								?>
									<tr>
										<td><?php echo $fila->nombre; ?></td>
										<td><?php echo $fila->carrera; ?></td>
										<td><?php echo $fila->nregistro; ?></td>
										<td><?php echo $fila->agno; ?></td>
										<td><a href="<?php echo base_url();?>alumno/modificar/<?php echo $fila->id;?>">Modificar</a></td>
										<td><a href="">Dar de Baja</a></td>
									</tr>
								<?php
							}
							?></table><?php
						}
						if ($chek == 'docentes') {
							?>
								<table>
									<h4>Docentes</h4>
									<tr>
										<td>Nombre</td>
										<td>Cargo</td>
										<td>CUIL/CUIT</td>
									</tr>
							<?php
							foreach ($docentes->result() as $fila) {
								?>
									<tr>
										<td><?php echo $fila->nombre; ?></td>
										<td><?php echo $fila->cargo; ?></td>
										<td><?php echo $fila->cuil; ?></td>
										<td></td>
										<td><a href="<?php echo base_url();?>docente/modificar/<?php echo $fila->id;?>">Modificar</a></td>
										<td><a href="">Dar de Baja</a></td>
									</tr>
								<?php
							}
							?></table><?php
						}
						if ($chek == 'noDocentes') {
							?>
								<table>
									<h4>No Docentes</h4>
									<tr>
										<td>Nombre</td>
										<td>Departamento</td>
										<td>Categoria</td>
										<td>CUIL/CUIT</td>
									</tr>
							<?php
							foreach ($noDocentes->result() as $fila) {
								?>
									<tr>
										<td><?php echo $fila->nombre; ?></td>
										<td><?php echo $fila->departamento; ?></td>
										<td><?php echo $fila->categoria; ?></td>
										<td><?php echo $fila->cuil; ?></td>
										<td></td>
										<td><a href="<?php echo base_url();?>noDocente/modificar/<?php echo $fila->id;?>">Modificar</a></td>
										<td><a href="<?php echo base_url();?>noDocente/eliminar/<?php echo $fila->id;?>">Dar de Baja</a></td>
									</tr>
								<?php
							}
							?></table><?php
						}
					?>

					<?php
					}
				}
			?>

			</div>
		</div>
		
	</div>
</body>
</html>
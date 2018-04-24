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
	<div ><h5 class="T1">Ejercicio 5</h5></div>
	<div class="Contenido">
		<div class="T2"><h3>Comunidad UNSL</h3>	</div>
		<div>
			<div class="Menu">
				<h3>Tabla</h3>
				<form method="post">
					<input type="checkbox" name="personas[]" value="alumnos"><h5>Alumnos</h5>
					<input type="checkbox" name="personas[]" value="docentes"><h5>Docentes</h5>
					<input type="checkbox" name="personas[]" value="noDocentes"><h5>No Docentes</h5>
					<input type="submit" name="submit" value="Buscar" class="Boton">
				</form>
			</div>
			<div class="Tablas">
			<?php 
				if (isset($_POST['personas'])) {
					foreach ($_POST['personas'] as $chek) {
						if ($chek == 'alumnos') {
							?>
							<div class="Tabla" id="alumnos">
								<table>
									<h4 class="T3">Alumnos</h4>
									<a href="<?php echo base_url()?>alumno/alta" ><h5 class="BotonAlta" id="link">Alta Alumno</h5></a>
									<tr>
										<td><b>Nombre</b></td>
										<td><b>Carrera</b></td>
										<td><b>Nro Registro</b></td>
										<td><b>Año que cursa</b></td>
									</tr>
							<?php
							foreach ($alumnos->result() as $fila) {
								?>
									<tr>
										<td><?php echo $fila->nombre; ?></td>
										<td><?php echo $fila->carrera; ?></td>
										<td><?php echo $fila->nregistro; ?></td>
										<td><?php echo $fila->agno; ?></td>
										<td><a href="<?php echo base_url();?>alumno/modificar/<?php echo $fila->id;?>" id="link">Modificar</a></td>
										<td><a href="<?php echo base_url();?>alumno/eliminar/<?php echo $fila->id;?>" id="link">Dar de Baja</a></td>
									</tr>
								<?php
							}
							?></table>
							</div><?php
						}
						if ($chek == 'docentes') {
							?>
							<div class="Tabla" id="Docentes">
								<table>
									<h4 class="T3">Docentes</h4>
									<a href="<?php echo base_url()?>docente/alta"><h5 class="BotonAlta" id="link">Alta Docente</h5></a>
									<tr>
										<td><b>Nombre</b></td>
										<td><b>Cargo</b></td>
										<td><b>CUIL/CUIT</b></td>
									</tr>
							<?php
							foreach ($docentes->result() as $fila) {
								?>
									<tr>
										<td><?php echo $fila->nombre; ?></td>
										<td><?php echo $fila->cargo; ?></td>
										<td><?php echo $fila->cuil; ?></td>
										<td></td>
										<td><a href="<?php echo base_url();?>docente/modificar/<?php echo $fila->id;?>" id="link">Modificar</a></td>
										<td><a href="<?php echo base_url();?>docente/eliminar/<?php echo $fila->id;?>" id="link">Dar de Baja</a></td>
									</tr>
								<?php
							}
							?></table>
							</div><?php
						}
						if ($chek == 'noDocentes') {
							?>
							<div class="Tabla" id="noDocentes">
								<table>
									<h4 class="T3">No Docentes</h4>
									<a href="<?php echo base_url()?>noDocente/alta"><h5 class="BotonAlta" id="link">Alta No Docente</h5></a>
									<tr>
										<td><b>Nombre</b></td>
										<td><b>Departamento</b></td>
										<td><b>Categoria</b></td>
										<td><b>CUIL/CUIT</b></td>
									</tr>
							<?php
							foreach ($noDocentes->result() as $fila) {
								?>
									<tr>
										<td><?php echo $fila->nombre; ?></td>
										<td><?php echo $fila->departamento; ?></td>
										<td><?php echo $fila->categoria; ?></td>
										<td><?php echo $fila->cuil; ?></td>
										<td><a href="<?php echo base_url();?>noDocente/modificar/<?php echo $fila->id;?>" id="link">Modificar</a></td>
										<td><a href="<?php echo base_url();?>noDocente/eliminar/<?php echo $fila->id;?>" id="link">Dar de Baja</a></td>
									</tr>
								<?php
							}
							?></table>
							</div><?php
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
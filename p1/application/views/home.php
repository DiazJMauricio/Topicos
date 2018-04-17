<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>plantilla/css/home.css">
</head>
<body>
	<div>
		<h1><?php echo $content; ?></h1>
		<a href="<?php echo base_url()?>">link</a>
	</div>
	<div>
		<table>
			<tr>
				<td><h3>Tipo de Socio</h3></td>
				<td><h3>Nombre</h3></td>
				<td><h3>Edad</h3></td>
				<td><h3>DNI</h3></td>
				<td><h3>Nombre Tutor</h3></td>
				<td><h3>DNI Tutor</h3></td>
			</tr>
			<?php 
				foreach ($consulta->result() as $fila) {
					?>
					<td><?php echo $fila->tipo; ?></td>
					<td><?php echo $fila->nombre; ?></td>
					<td><?php echo $fila->edad; ?></td>
					<td><?php echo $fila->dni; ?></td>
					<td><?php echo $fila->nombretutor; ?></td>
					<td><?php echo $fila->dnitutor ?></td>
					<?php 
				}
			?>
		</table>
	</div>
</body>
</html>
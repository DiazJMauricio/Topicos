<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>plantilla/css/home.css">
</head>
<body>
	<div>
		<a href="<?php echo base_url()?>validar/registrarMenor">Registrar un Menor</a><br>
		<a href="<?php echo base_url()?>validar">Registrar un Mayor</a>
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
					<tr>
					<td><?php 
						if ($fila->edad < 12) {
							echo 'Infante';
						}
						else if($fila->edad < 18){
							echo 'Juvenil';
						}else if($fila->edad < 30){
							echo 'Mayor';
						}else {
							echo 'Veterano';
						}
					?></td>
					<td><?php echo $fila->nombre; ?></td>
					<td><?php echo $fila->edad; ?></td>
					<td><?php echo $fila->dni; ?></td>
					<td><?php echo $fila->nombretutor; ?></td>
					<td><?php echo $fila->dnitutor ?></td>
					</tr>
					<?php 
				}
			?>
		</table>
	</div>
</body>
</html>
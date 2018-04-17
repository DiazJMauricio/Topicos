<!DOCTYPE html>
<html>
<head>
	<title>Validacion</title>
</head>
<body>
	<div>
	<?php 
		if ($tipo == 'Juvenil' || $tipo == 'Infante'){
			?>
			<form action="<?php echo base_url();?>validar/registrar" method="post">
				<select name = "tipo" disabled="on">
				    <option value="<?php echo $tipo;?>"><?php echo $tipo;?></option>
				 	
				</select><br>
				<input type="text" name="nombre" value="<?php echo $nombre;?>" placeholder="Nombre"><br>
				<input type="number" name="edad" value="<?php echo $edad;?>" placeholder="Edad"><br>
				<input type="text" name="dni" value="<?php echo $dni;?>" placeholder="DNI"><br>

				<input type="text" name="nombretutor" placeholder="Nombre Tutor"><br>
				<input type="text" name="dnitutor" placeholder="DNI Tutor"><br>
				<input type="submit" name="submit" value="Registrar"><br>
			</form>
			<?php 
		}else{
			echo "sas";
		}
	?>
	</div>
</body>
</html>
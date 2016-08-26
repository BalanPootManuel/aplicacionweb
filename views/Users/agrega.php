<!DOCTYPE html>
<html> 
	<head> 
		
		<meta charset="UTF-8"> 
		
	<head>

	<body>

		<?php
			//conexión a la base de datos
			$con = mysqli_connect("localhost", "root", "rodovox", "basededatos1");
			if (mysqli_connect_errno()){
				echo "No se pudo conectar a la base de datos" . mysqli_connect_error();


			}
			//obtiene valores del formulario
			$nombre = mysqli_real_escape_string($con, $_POST["nombre"]);
			$correo = mysqli_real_escape_string($con, $_POST["correo"]);

			//insertamos los valores del formulario en nuestra bd
			$sql = "INSERT INTO registros (nombre, correo)
			VALUES ('$nombre', '$correo')";

			if (!mysqli_query($con,$sql)) {
			 		die('Error: ' . mysqli_error($con));
				} else{ 

						echo "Registro guardado exitosamente"
					}

		?>

	</body>
</html>
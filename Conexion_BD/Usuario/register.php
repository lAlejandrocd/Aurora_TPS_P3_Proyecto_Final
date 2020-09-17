<?php
	include('../conexion.php');

	


		if (isset($_POST['btn-register'])){
		$documento_identidad = $_POST['documento_identidad'];
		$nombre_completo = $_POST['nombre_completo'];
		$email = $_POST['email'];
		$contra = $_POST['clave'];
		$contrahash = password_hash($contra, PASSWORD_BCRYPT);
		$telefono = $_POST['telefono'];
		$direccion = $_POST['direccion'];
		

		
		$insert = mysqli_query($con,"INSERT INTO usuarios (documento_identidad,nombre_completo,email,clave,telefono,direccion) VALUES ('$documento_identidad', '$nombre_completo', '$email', '$contrahash', '$telefono','$direccion')") or die("Problemas al insertar".mysqli_error($con));

	

		///**Si no existe esta variable ($resultado) significa que no hay consulta, la consulta no se ha hecho. Entonces termina la consulta.*/
	
		if (!$insert) {
			
			die("Query failed");

		}


		//** Vamos a redireccionar la respuesta cuando se haya completado la operación de forma exitosa. */

		header("Location: ../../Registrarse/Registro.php");

	}


		
?>


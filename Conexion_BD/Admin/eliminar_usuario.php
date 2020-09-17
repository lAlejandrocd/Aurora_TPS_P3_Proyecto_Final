<?php  

	include("../conexion.php");

	if (isset($_POST['documento_identidad'])) {		
		$documento_identidad= $_POST['documento_identidad'];

		$query = mysqli_query($con, "DELETE FROM envio WHERE documento_identidad = '$documento_identidad'") or die("Problemas al insertar".mysqli_error($con));

		$query = mysqli_query($con, "DELETE FROM factura WHERE id_usuario = '$documento_identidad'") or die("Problemas al insertar".mysqli_error($con));

		$query = mysqli_query($con, "DELETE FROM usuarios WHERE documento_identidad = '$documento_identidad'") or die("Problemas al insertar".mysqli_error($con));


		if (!$query) {
			
			die("Query Failed");

		}


		header("Location: ad_usuarios/ver_usuarios.php");
		$_SESSION['message'] = "la ejecución se hizo satisfactoriamente";
		$_SESSION['message_type'] = 'danger';
	

	}


?>
<?php 


	session_start();
	include("Conexion_BD/conexion.php");

	if (empty($_SESSION['id'])) {
    echo "Se produjo un Error";
    header("location: ../../index.php");
	}else{
?>

<?php  

	include("../conexion.php");

	if (isset($_POST['documento_identidad'])) {		
		$documento_identidad= $_POST['documento_identidad'];
		//** Creamos la sentencia de eliminar. */
		//** Elimina los datos que son de la cedula que te estan pasando. */
		$query= "DELETE FROM usuarios WHERE documento_identidad = '$documento_identidad'";
		//** Ejecutamos la sentencia y los datos generados lo guardamos en una variable. */
		$resultado= mysqli_query($con, $query);

		if (!$resultado) {
			
			die("Query Failed");

		}


		header("Location: datos.php");
		$_SESSION['message'] = "la ejecución se hizo satisfactoriamente";
		$_SESSION['message_type'] = 'danger';
	

	}


?>

<?php } ?>
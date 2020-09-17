<?php 
session_start();
include("../conexion.php");

if (!isset($_SESSION['admin'])) {
	
	header("location: ../../index.php");
    
}else{
  ?>


<?php  

	include("../conexion.php");

	if (isset($_POST['codigo_categoria'])) {		
		$codigo_categoria= $_POST['codigo_categoria'];
		//** Creamos la sentencia de eliminar. */
		//** Elimina los datos que son de la cedula que te estan pasando. */
		$query= "DELETE FROM categorias WHERE categorias.codigo_categoria = '$codigo_categoria'";
		//** Ejecutamos la sentencia y los datos generados lo guardamos en una variable. */
		$resultado= mysqli_query($con, $query);

		if (!$resultado) {
			
			die("Query Failed");

		}


		header("Location: ver_categoria.php");
		$_SESSION['message'] = "la ejecución se hizo satisfactoriamente";
		$_SESSION['message_type'] = 'danger';
	

	}


?>

<?php } ?>
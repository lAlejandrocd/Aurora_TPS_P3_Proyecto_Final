<?php 
session_start();
include("../conexion.php");

if (!isset($_SESSION['admin'])) {
	
	header("location: ../../index.php");
    
}else{
  ?>


<?php 

include ("../conexion.php");


		//** Validamos que estamos recibiendo los datos con una condición.*/
		if (isset($_POST['btn-admin-send'])){
			$codigo_categoria = $_POST["codigo_categoria"];
			$nombre_categoria = $_POST["nombre_categoria"];
			$descripcion_categoria = $_POST["descripcion_categoria"];
			
	
		$insert = mysqli_query($con, "INSERT INTO categorias (codigo_categoria,nombre_categoria,descripcion_categoria) VALUES ('$codigo_categoria', '$nombre_categoria', '$descripcion_categoria')") or die("Problemas al insertar".mysqli_error($con));
		///** guardar datos  */
		

		
	
		if (!$insert) {
			
			die("Ha ocurrido un error");

		}


		//** Vamos a redireccionar la respuesta cuando se haya completado la operación de forma exitosa. */

		header("Location: ../../index_admin.php");
		
		//** Vamos a almacenar un mensaje y un color para el mensaje.  */

	

		}


		
?>


<?php } ?>



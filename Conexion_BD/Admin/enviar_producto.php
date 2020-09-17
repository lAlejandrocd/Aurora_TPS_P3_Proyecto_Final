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
			$codigo_producto = $_POST["codigo_producto"];
			$nombre_producto = $_POST["nombre_producto"];
			$cantidad_producto = $_POST["cantidad_producto"];
			$precio_producto = $_POST["precio_producto"];
			$descripcion_producto = $_POST["descripcion_producto"];
			$estado_producto = $_POST["estado_producto"];
			
		

	
		mkdir("img/". $codigo_producto, 0777);
		//** El primer file debemos determinar el nombre, es decir, de que campo viene la imagen*//
		//** Ponemos la propiedad name en los segundos corchetes para guardar el nombre de la imagen.*//
		$imagen_producto = "img/".$codigo_producto."/".$_FILES['imagen_producto']['name'];

		//** Variable de tipo de imagen, en el primero determinamos de que formulario viene la imagen y el tipo de imagen en l asegunda. *//
		$tipo_imagen = $_FILES['imagen_producto']['type'];

		//** Aquí determinamos el peso de la imagen con una variable, el primero determina el nombre del formulario y el segundo "size" determina el tamaño. *//
		$peso_imagen= $_FILES['imagen_producto']['size'];



		echo $imagen_producto. " ".$tipo_imagen. " ".$peso_imagen;


		//***  */
		move_uploaded_file($_FILES["imagen_producto"]['tmp_name'], $imagen_producto);

	
		$categoria = $_POST['codigo_codigo_categoria'];

		//** Ejecutamos la consulta de mysqli.*/

		//** Inserta dentro de crud(nombre de la tabla) los siguientes datos.  values = los valores que te voy a enviar son los siguientes. */

		$insert = mysqli_query($con, "INSERT INTO productos (codigo_producto,nombre_producto,cantidad_producto,precio_producto,descripcion_producto, estado_producto, imagen_producto, codigo_codigo_categoria) VALUES ('$codigo_producto', '$nombre_producto', '$cantidad_producto', '$precio_producto', '$descripcion_producto', '$estado_producto', '$imagen_producto', '$categoria')") or die("Problemas al insertar".mysqli_error($con));
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

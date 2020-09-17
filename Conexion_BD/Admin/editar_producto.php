<?php 
session_start();
include("../conexion.php");

if (!isset($_SESSION['admin'])) {
	
	header("location: ../../index.php");
    
}else{
  ?>
	


	
	
	<?php 



	include("../conexion.php");

	if (isset($_POST['codigo_producto'])) {
		$codigo_producto= $_POST['codigo_producto'];
		//** Ejecutamos sentencia de sql editar y lo guardamos en la variable query*/
		$query= "SELECT * FROM productos WHERE codigo_producto= '$codigo_producto'";
		//** ejecutas la sentencia escrita anteriormente con la variable y su variable conexión ($coon)*/
		$resultado = mysqli_query($con, $query);

		//** Si los resultados en columna es 1 ... ejecuta la sentencia. Esto hace referencia a que si hay un dato por editar, ejecuta la sentencia. */ 
		if (mysqli_num_rows($resultado ) == 1) {
			
			$row = mysqli_fetch_array($resultado);

			$codigo_producto = $row['codigo_producto'];
            $nombre_producto   = $row['nombre_producto'];
            $cantidad_producto = $row['cantidad_producto'];
			$precio_producto = $row['precio_producto'];
			$descripcion_producto = $row['descripcion_producto'];
			$estado_producto = $row['estado_producto'];           $imagen_producto = $row['imagen_producto'];
            $codigo_codigo_categoria = $row['codigo_codigo_categoria'];
			
			
		
						
		}

	}

	//** Luego de haber escrito los datos actualizados debemos enviarlos a una parte, los enviaremos a esta misma página pero debemos validar que el "botton" se encuentra funcionando. para eso hacemos este condicional : Si existe METODO POST(datos enviados) muestra en pantalla la siguiente condición: Actualizando... */
	if (isset($_POST['actualizar'])) {
		
		
		    $codigo_producto = $_POST['codigo_producto'];
            $nombre_producto   = $_POST['nombre_producto'];
            $cantidad_producto = $_POST['cantidad_producto'];
			$precio_producto = $_POST['precio_producto'];
			$descripcion_producto = $_POST['descripcion_producto'];
			$estado_producto = $_POST['estado_producto'];
				
					
		
			if ($_FILES['imagen_producto']['name']) {
				
				if (is_uploaded_file($_FILES['imagen_producto']['tmp_name'])) {
						
					$imagen_producto = "img/".$codigo_producto."/".$_FILES['imagen_producto']['name'];
					move_uploaded_file($_FILES['imagen_producto']['tmp_name'],$imagen_producto);
								
				}


			}





		$codigo_codigo_categoria = $_POST['codigo_codigo_categoria'];
			

		// if (!file_exists($imagen_producto)) {
			
			
		// }

		//** Ponemos la sentencia de consulta actualización de datos.*/
		//** Vamos a actualizar los siguientes datos : nombre, aprellido, teléfono... siempre y cuando la cédula sea igual a la cédula que estamos recibiendo. */
		$query = "UPDATE productos SET nombre_producto = '$nombre_producto', cantidad_producto = '$cantidad_producto', precio_producto = '$precio_producto', descripcion_producto = '$descripcion_producto', estado_producto = '$estado_producto', imagen_producto = '$imagen_producto', codigo_codigo_categoria = '$codigo_codigo_categoria' WHERE codigo_producto = '$codigo_producto'";
		//** Ejecutamos la consulta con el siguiente código: Le pasamos la conexión y la consulta. La guardamos en la variable $resultado. */
		
		$resultado = mysqli_query($con, $query);

		//** Redireccionamos el resultado planteado. */
		header("Location: ver_productos.php");
	}




	
?>
<style type="text/css">
	body {
  
  font-family: 'Titillium Web', sans-serif;
  background-image: url(../../img/ini.jpg);
  background-repeat: no-repeat, repeat;
  background-size: contain;
  height: 2000px;
  overflow:hidden;
  margin: 40px auto;
 

}
</style>
<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
	<!---clase container con un padding de 4. (p-4).-->
	<div class="container p-8">
		
				<!---row = fila. --->
				<div class="row">
						<!---Mi formulario va a medir 4 columnas pero que se encuentre centrado. Usamos las clases "mx-auto".--->
						<div class="col-md-7 mx-auto">
								<!---crear una tarjeta. --->
								<div class="card card-body">
										<h1>Actualización de datos</h1>
										<form action="editar_producto.php?codigo_producto=<?php echo $_POST['codigo_producto']; ?>" method= 'POST' class="table table-dark" enctype="multipart/form-data"> 
											
											<div class="form-group">
													<!--¿Desde donde va a tener el valor? lo tendra desde la variable que invocamos en el ultimo condicional en la línea 13, variable de línea 17----->
													<input type='hidden' name='codigo_producto' value="<?php echo $codigo_producto; ?>" class='form-control' placeholder ='Actualiza la cedula. '>
											</div>
											<div class="form-group">											
													<input type='text' name='nombre_producto' value="<?php echo $nombre_producto; ?>" class='form-control' placeholder ='Actualiza el nombre del producto'>
											</div>
											<div class="form-group">
												

													<input type='text' name='cantidad_producto' value="<?php echo $cantidad_producto; ?>" class='form-control' placeholder ='Actualiza la cantidad '>
											</div>
											<div class="form-group">
												

													<input type='text' name='precio_producto' value="<?php echo $precio_producto; ?>" class='form-control' placeholder ='Actualiza el precio del producto.'>
											</div>
											<div class="form-group">
												

													<input type='text' name='descripcion_producto' value="<?php echo $descripcion_producto; ?>" class='form-control' placeholder ='Actualiza el teléfono.'>
											</div>
                                            <div class="form-group">
												

													<select name="estado_producto" class="form-control">
													<option value="---">---</option>
													<option value="disponible">disponible</option>
													<option value="agotado">agotado</option>
																
													</select>		
													
											</div>
                                            <div class="form-group">
												

													<td> <?php echo "<img src= '".$row['imagen_producto']."' width='50' height='50'>  "  ?></td>

														<input type='file' value="<?php echo $imagen_producto; ?>"  name='imagen_producto' class='form-control'>


																																						
													
		


													




													
													
											</div>
                                            <div class="form-group">
												

									<select REQUIRED class="form-control"name="codigo_codigo_categoria">
									<option value="0000">--Seleccione el código de la categoria--</option>
									<option value="1101">Tarjetas 1101</option>
									<option value="1102">Discos Duros 1102</option>
									<option value="1103	">Chasis 1103</option>
									<option value="1104">Audio 1104</option>
									<option value="1105">Procesadores 1105</option>
									<option value="1106">Accesorios 1106</option>
									<option value="1001">Novedad#1 1101</option>
									<option value="1002">Novedad#2 1102</option>
									<option value="1003">Novedad#3 1103</option>
									
									
								</select>
								
											</div>




											<!---Con la etiqueta botton ya esta determinando de que es un respectivo boton, sin necesidad de poner un input tipo submit. --->
											<button class="btn btn-success" name="actualizar" >

												
												Actualizar

											</button>



										</form>

											<a href="ver_productos.php"><button class="btn btn-success" name="Regresar">Regresar</button></a>






								</div>	
						</div>


				</div>
				
	</div>

<?php  } ?>

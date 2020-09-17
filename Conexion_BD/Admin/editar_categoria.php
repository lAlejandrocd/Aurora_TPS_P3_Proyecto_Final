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
		
        //$query= "SELECT * FROM categorias WHERE codigo_categoria= '$codigo_categoria'";
        
        $query= "SELECT * FROM categorias WHERE categorias.codigo_categoria= '$codigo_categoria'";
        

		
		$resultado = mysqli_query($con, $query);

		//** Si los resultados en columna es 1 ... ejecuta la sentencia. Esto hace referencia a que si hay un dato por editar, ejecuta la sentencia. */ 
		if (mysqli_num_rows($resultado ) == 1) {
			
			$row = mysqli_fetch_array($resultado);

			$codigo_categoria = $row['codigo_categoria'];
            $nombre_categoria   = $row['nombre_categoria'];
            $descripcion_categoria = $row['descripcion_categoria'];
			
			
		
						
		}

	}

	//** Luego de haber escrito los datos actualizados debemos enviarlos a una parte, los enviaremos a esta misma página pero debemos validar que el "botton" se encuentra funcionando. para eso hacemos este condicional : Si existe METODO POST(datos enviados) muestra en pantalla la siguiente condición: Actualizando... */
	if (isset($_POST['actualizar'])) {
		
        
            $codigo_categoria = $_POST['codigo_categoria'];
            $nombre_categoria   = $_POST['nombre_categoria'];
            $descripcion_categoria = $_POST['descripcion_categoria'];
			
        
        
		$query = "UPDATE categorias SET codigo_categoria = '$codigo_categoria', nombre_categoria = '$nombre_categoria', descripcion_categoria = '$descripcion_categoria' WHERE categorias.codigo_categoria = '$codigo_categoria'";
		//** Ejecutamos la consulta con el siguiente código: Le pasamos la conexión y la consulta. La guardamos en la variable $resultado. */
		
		$resultado = mysqli_query($con, $query);

		//** Redireccionamos el resultado planteado. */
		header("Location: ver_categoria.php");
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
	<div class="container p-4">
		
				<!---row = fila. --->
				<div class="row">
						<!---Mi formulario va a medir 4 columnas pero que se encuentre centrado. Usamos las clases "mx-auto".--->
						<div class="col-md-4 mx-auto">
								<!---crear una tarjeta. --->
								<div class="card card-body">
										<h1>Actualización de datos</h1>
										<form action="editar_categoria.php?codigo_categoria=<?php echo $_POST['codigo_categoria']; ?>" method= 'POST' class="table table-dark" enctype="multipart/form-data"> 
											
											<div class="form-group">
													<!--¿Desde donde va a tener el valor? lo tendra desde la variable que invocamos en el ultimo condicional en la línea 13, variable de línea 17----->
													<input type='number' name='codigo_categoria' value="<?php echo $codigo_categoria; ?>" class='form-control' placeholder ='Actualiza el código. '>
											</div>
											<div class="form-group">											
													<input type='text' name='nombre_categoria' value="<?php echo $nombre_categoria; ?>" class='form-control' placeholder ='Actualiza el nombre de categoria'>
											</div>
											<div class="form-group">
												

													<input type='text' name='descripcion_categoria' value="<?php echo $descripcion_categoria; ?>" class='form-control' placeholder ='Descripción '>
											</div>
											


											<!---Con la etiqueta botton ya esta determinando de que es un respectivo boton, sin necesidad de poner un input tipo submit. --->
											<button class="btn btn-success" name="actualizar" >

												
												Actualizar

											</button>



										</form>

											<a href="ver_categoria.php"><button class="btn btn-success" name="Regresar">Regresar</button></a>






								</div>	
						</div>


				</div>
				
	</div>


<?php } ?>
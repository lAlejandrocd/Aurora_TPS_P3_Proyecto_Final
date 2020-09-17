<?php 


	session_start();
	

	if (empty($_SESSION['id'])) {
    echo "Se produjo un Error";
    header("location: ../../index.php");
	}else{
?>

<body style="background: url(../../img/inin.jpg); background-size: cover; width: 100%; height: 100%;" >

<?php 

	include("../conexion.php");

	if (isset($_POST['documento_identidad'])) {
		$documento_identidad= $_POST['documento_identidad'];
		//** Ejecutamos sentencia de sql editar y lo guardamos en la variable query*/
		$query= "SELECT * FROM usuarios WHERE documento_identidad= '$documento_identidad'";
		//** ejecutas la sentencia escrita anteriormente con la variable y su variable conexión ($coon)*/
		$resultado = mysqli_query($con, $query);

		//** Si los resultados en columna es 1 ... ejecuta la sentencia. Esto hace referencia a que si hay un dato por editar, ejecuta la sentencia. */ 
		if (mysqli_num_rows($resultado ) == 1) {
			
			$row = mysqli_fetch_array($resultado);

			$documento_identidad = $row['documento_identidad'];
			$nombre_completo   = $row['nombre_completo'];
			$email = $row['email'];
			$clave = $row['clave'];
			$telefono = $row['telefono'];
			$direccion = $row['direccion'];
			
		
						
		}

	}

	//** Luego de haber escrito los datos actualizados debemos enviarlos a una parte, los enviaremos a esta misma página pero debemos validar que el "botton" se encuentra funcionando. para eso hacemos este condicional : Si existe METODO POST(datos enviados) muestra en pantalla la siguiente condición: Actualizando... */
	if (isset($_POST['actualizar'])) {
		
		//** La cedula lo tenemos desde el parámetro cedula por el metodo get. */
		$documento_identidad = $_POST['documento_identidad'];
		$nombre_completo   = $_POST['nombre_completo'];
		$email = $_POST['email'];
		$clave = $_POST['clave'];
		$telefono = $_POST['telefono'];
		$direccion = $_POST['direccion'];

		
	
		//** Estos echo los usamos para reconfirmar si nos esta atrayendo los datos.*/

		/*
		echo "$cedula";
		echo "$nombre";
		echo "$apellido";
		echo "$telefono";
		*/
	

		//** Ponemos la sentencia de consulta actualización de datos.*/
		//** Vamos a actualizar los siguientes datos : nombre, aprellido, teléfono... siempre y cuando la cédula sea igual a la cédula que estamos recibiendo. */
		$query = "UPDATE usuarios SET nombre_completo = '$nombre_completo', email = '$email', clave = '$clave', telefono = '$telefono', direccion = '$direccion' WHERE documento_identidad = '$documento_identidad'";
		//** Ejecutamos la consulta con el siguiente código: Le pasamos la conexión y la consulta. La guardamos en la variable $resultado. */
		
		$resultado = mysqli_query($con, $query);

		//** Redireccionamos el resultado planteado. */
		header("Location: datos.php");
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
										<form action="editar.php?documento_identidad=<?php echo $_POST['documento_identidad']; ?>" method= 'POST' class="table table-dark"> 
											
											<div class="form-group">
													<!--¿Desde donde va a tener el valor? lo tendra desde la variable que invocamos en el ultimo condicional en la línea 13, variable de línea 17----->
													<input type='hidden' name='documento_identidad' value="<?php echo $documento_identidad; ?>" class='form-control' placeholder ='Actualiza la cedula. '>
											</div>
											<div class="form-group">											
													<input type='text' name='nombre_completo' value="<?php echo $nombre_completo; ?>" class='form-control' placeholder ='Actualiza el nombre '>
											</div>
											<div class="form-group">
												

													<input type='email' name='email' value="<?php echo $email; ?>" class='form-control' placeholder ='Actualiza el correo.'>
											</div>
											<div class="form-group">
												

													<input type='password' name='clave' value="<?php echo $clave; ?>" class='form-control' placeholder ='Actualiza la contraseña.'>
											</div>
											<div class="form-group">
												

													<input type='text' name='telefono' value="<?php echo $telefono; ?>" class='form-control' placeholder ='Actualiza el teléfono.'>
											</div>
											<div class="form-group">
												

													<input type='text' name='direccion' value="<?php echo $direccion; ?>" class='form-control' placeholder ='Actualiza la direccion.'>
											</div>

											<!---Con la etiqueta botton ya esta determinando de que es un respectivo boton, sin necesidad de poner un input tipo submit. --->
											<button class="btn btn-success" name="actualizar" >

												
												Actualizar

											</button>



										</form>

											<a href="datos.php"><button class="btn btn-success" name="Regresar">Regresar</button></a>






								</div>	
						</div>


				</div>
				
	</div>
<?php } ?>


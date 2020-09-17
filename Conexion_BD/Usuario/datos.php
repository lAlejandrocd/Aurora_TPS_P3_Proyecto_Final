<title>Mi cuenta</title>


<?php include("../conexion.php");

	session_start();
	if (empty($_SESSION['id'])) {
		    echo "Se produjo un Error";
   			 header("location: ../../index.php");
			}else{
 			 ?>


<style type="text/css">
	body {
  
  font-family: 'Titillium Web', sans-serif;
  background-image: url(../../img/inin.jpg);
  background-repeat: no-repeat, repeat;
  background-size: contain;
  height: 2000px;
  overflow:hidden;
 

}
</style>
<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../../css/flexslider.css">
<link rel="stylesheet" type="text/css" href="../../css/linearicons.css">
<link rel="stylesheet" type="text/css" href="../../css/main.css">
<link rel="stylesheet" type="text/css" href="../../css/nice-select.css">
<link rel="stylesheet" type="text/css" href="../../css/owl.carousel.css">
	<body>
		
		

								<!--la clase table table bordered sirve para cambiar el estilo de la tabla con boostrap. -->
								<table class="table table">
									<h1 align="center" class="text-white">Editar Datos de mi Cuenta</h1>
									<!--El thead sirve para la cabeza de la tabla. -->
									<thead thead-dager>
										<!---tr sirve para las filas -->

											<tr class="danger">

													<!---th sirve para el título de las tareas. -->
													<th class="text-white" scope="col">Identificacion</th>
													<th class="text-white" scope="col">Nombre Completo</th>	
													<th class="text-white" scope="col">Correo Electronico</th>
													<th class="text-white" scope="col">Contraseña</th>
													<th class="text-white" scope="col">Telefono</th>
													<th class="text-white" scope="col">Direccion</th>
													<th class="text-white" scope="col">Opciones</th>
													
													
											</tr>

									</thead>
									
									<!---Contiene a un bloque de líneas -->
									<tbody>
										<!---cadena de php, lo que hay dentro de esa cadena es una consulta. -->
										<?php 
											
											//** Consulta php. */
											$query = "SELECT * FROM usuarios WHERE documento_identidad = '".$_SESSION['id']."'";
											$result_datos = mysqli_query($con, $query);
											while ($row = mysqli_fetch_array($result_datos)) { ?>
											
												<tr>
													<!---Por php pinta desde la fila, varible $row, desde la fila cédula. -->

													<td class="text-white"><?php echo $row['documento_identidad'] ?></td>
													<td class="text-white"><?php echo $row['nombre_completo'] ?></td>
													<td class="text-white"><?php echo $row['email'] ?></td>
													<td class="text-white"><?php echo $row['clave'] ?></td>
													<td class="text-white"><?php echo $row['telefono'] ?></td>
													<td class="text-white"><?php echo $row['direccion'] ?></td>
													

														<!---Aquí debo determinar cual dato se debe de editar. -->

														<!--Desde la fila ($row) a cada sentencia agregale un número al lado del id: el número de la tarea.  --->

													<td >


														
															
															<br>

														<form method="post" action="editar.php">
														<input type="hidden" name="documento_identidad" value="<?php echo $row['documento_identidad']. $row['nombre_completo'] . $row['email'].$row['clave']. $row['telefono']. $row['direccion']?>">														
														<input type="submit" class="btn btn-success" value="editar" onClick= 'return validar2()' >
														</form>
														<a href="../../index2.php"><button class="btn btn-success" name="Regresar">Regresar</button></a>
														
														
														
												

													</td>							

													

												</tr>


											<!---Se ha partido el código para que dentro del while se pueda escribir código html. -->
											<?php  } ?>

										
									</tbody>


								</table>



							</div>
				

				</div>
<div class="col md-2">
<form id="myForm" action="baja.php" method="post" class="form-control">
					<h1 align="center">Desactiva tu cuenta llenando el siguiente formulario</h1>
					<div class="row justify-content-center">
					<div class="col-lg-10">
							<h5>Por favor ingresa tu Identificación y tu motivo aquí:</h5>
							<textarea class="common-textarea mt-20" name="mensaje" onfocus="this.placeholder = 'Motivo'" onblur="this.placeholder = 'Motivo'" required></textarea>
						</div>
						<div class="col-lg-3 justify-content-end">
							<button class="primary-btn white-bg d-inline-flex align-items-center mt-20"><span class="mr-10">Solicitar</span><span class="lnr lnr-arrow-right"></span></button> <br>
							<div class="alert-msg"></div>
						</div>
					</div>
				</form>
				</div>
</body>
</html>


<?php } ?>



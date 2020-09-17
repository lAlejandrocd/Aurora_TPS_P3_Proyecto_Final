
<?php 
session_start();
include("../../conexion.php");

if (!isset($_SESSION['admin'])) {
	
		header("location: ../../../index.php");
    
}else{
  ?>


<?php include("../../conexion.php");

 			 ?>


<style type="text/css">
	body {
  
  font-family: 'Titillium Web', sans-serif;
  

}
</style>
<link href="popup.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="../../../css/linearicons.css">
<link rel="stylesheet" type="text/css" href="../../../css/bootstrap.css">
<body style="background: url(../backgrounds/back2.jpg); background-size: cover; width: 100%; height: 100%;" >
	
		<div class="container">
			<div class="col-md-8">
					<style type="text/css">
					.table-text{color: green;}
					</style>
<h1 class="text-white">Perfiles de Usuarios⠀<a href="#popup"><button class="btn btn-success" name="Regresar">Generar reporte</button></a><a href="../../../index_admin.php">⠀<button class="btn btn-success" name="Regresar">Regresar</button></a></h1>
<form role="search" method="post" id="searchform" action="bajas_de_usuarios.php">
  		<label for="s">
    		<i class="fa fa-search"></i>
  		</label>
  	<input type="text"  name="documento_identidad" placeholder="Buscar..." class="" id="s" />
</form>
								<!--la clase table table bordered sirve para cambiar el estilo de la tabla con boostrap. -->
								<div id="Layer1" style="width:900px; height:500px; overflow-y: scroll;">
								<table class="table table-dark" align="center">
									
									<!--El thead sirve para la cabeza de la tabla. -->
									<thead thead-dager>
										<!---tr sirve para las filas -->
											<tr class="danger">
													<!---th sirve para el título de las tareas. -->
													<th scope="col">Identificacion</th>
													<th scope="col">Nombre Completo</th>	
													<th scope="col">Correo Electronico</th>
													<th scope="col">Contraseña</th>
													<th scope="col">Telefono</th>
													<th scope="col">Direccion</th>
													<th scope="col">Acciones</th>
													
													
													
											</tr>

									</thead>
									
									<!---Contiene a un bloque de líneas -->
									<tbody>
										<!---cadena de php, lo que hay dentro de esa cadena es una consulta. -->
										<?php 
											
											//** Consulta php. */
											$query = "SELECT * FROM usuarios";
											$result_datos = mysqli_query($con, $query);
											while ($row = mysqli_fetch_array($result_datos)) { ?>
											
												<tr>
													<!---Por php pinta desde la fila, varible $row, desde la fila cédula. -->

													<td><?php echo $row['documento_identidad'] ?></td>
													<td><?php echo $row['nombre_completo'] ?></td>
													<td><?php echo $row['email'] ?></td>
													<td><?php echo $row['clave'] ?></td>
													<td><?php echo $row['telefono'] ?></td>
													<td><?php echo $row['direccion'] ?></td>
													

														<!---Aquí debo determinar cual dato se debe de editar. -->

														<!--Desde la fila ($row) a cada sentencia agregale un número al lado del id: el número de la tarea.  --->

													<td >

													<form method="post" action="../eliminar_usuario.php">
														<input type="hidden" name="documento_identidad" value="<?php echo $row['documento_identidad']?> ">														
														<input type="submit" class="btn btn-danger" value="eliminar" onClick= 'return validar()' >
														</form>
															
															<br>

															

														
														<form method= "POST" action = "editar_usuarios.php">
														<input type="hidden" name="documento_identidad" value="<?php echo $row['documento_identidad']. $row['nombre_completo'] . $row['email'].$row['clave']. $row['telefono'].$row['direccion']?>">													
														<input type="submit" class="btn btn-success" value="editar" onClick= 'return validar2()' >
														</form>
														
														
														
														
														
														
														
														
												

													</td>							

													

												</tr>


											<!---Se ha partido el código para que dentro del while se pueda escribir código html. -->
											<?php  } ?>

										
									</tbody>


								</table>
<!-- <a href="../../../index_admin.php"><button class="btn btn-success" name="Regresar">Regresar</button></a> -->


							</div>
				

				</div>


			</div>
		</div>
	</div>
<div id="popup" class="overlay">
            <div id="popupBody">

                <h2>Generar Reporte</h2>
                <a id="cerrar" href="#">&times;</a>
                <div class="popupContent">
                    <p>En base a usuario especifico sobre las compras realizadas</p>
                </div>
                <form role="search" method="post" id="searchform" action="generar_reporte.php">
  				
  				<input type="text" class="form-control" name="documento_identidad" placeholder="Buscar..." class="" id="s" />
				</form>
            </div>
        </div>
</body>
</html>


<?php } ?>
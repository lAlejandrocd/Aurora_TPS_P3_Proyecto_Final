<?php 
session_start();
include("../conexion.php");

if (!isset($_SESSION['admin'])) {
	
	header("location: ../../index.php");
    
}else{
  ?>

 <!DOCTYPE html>
<html>
<head>
	<title>Registrar Producto</title>
	<meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">


</head>
<body style="background: url(backgrounds/back1.jpg); background-size: cover; width: 100%; height: 100%;" >
<style type="text/css">
	body {
  
  font-family: 'Titillium Web', sans-serif;
  
 
}

</style>
<link href="popup.css" rel="stylesheet" type="text/css" />

		<div class="container">
			<div class="col-md-8">
					<style type="text/css">
					.table-text{color: green;}
					</style>
<h1 class="text-white">Productos <a href="generar_reporte.php"><button class="btn btn-success" name="Regresar">Generar reporte</button></a> <a href="../../index_admin.php"><button class="btn btn-success" name="Regresar">Regresar</button></a></h1>
<form role="search" method="get" id="searchform" action="#popup">
  		<label for="s">
    		<i class="fa fa-search"></i>
  		</label>
  	<input type="text"  name="codigo_producto" placeholder="Buscar..." class="" id="s" />
</form>

								<!--la clase table table bordered sirve para cambiar el estilo de la tabla con boostrap. -->
								 <div id="Layer1" style="width:1100px; height:500px; overflow-y: scroll;">
								<table class="table table-dark" align="center">
									
									<!--El thead sirve para la cabeza de la tabla. -->
									<thead thead-dager>
										<!---tr sirve para las filas -->
											<tr class="danger">
													<!---th sirve para el título de las tareas. -->
													<th scope="col">Codigo</th>
													<th scope="col">Nombre </th>	
													<th scope="col">Cantidad</th>
													<th scope="col">Precio</th>
													<th scope="col">Descripción</th>
													<th scope="col">Estado</th>
													<th scope="col">Imagen</th>
													<th scope="col">Codigo categoria</th>
													<th scope="col">Acciones</th>
													
													
													
											</tr>

									</thead>
									
									<!---Contiene a un bloque de líneas -->
									<tbody>
										<!---cadena de php, lo que hay dentro de esa cadena es una consulta. -->
										<?php 
											
											//** Consulta php. */
											$query = "SELECT * FROM productos order by codigo_codigo_categoria";
											$result_datos = mysqli_query($con, $query);
											while ($row = mysqli_fetch_array($result_datos)) { ?>
											
												<tr>
													<!---Por php pinta desde la fila, varible $row, desde la fila cédula. -->

													<td><?php echo $row['codigo_producto'] ?></td>
													<td><?php echo $row['nombre_producto'] ?></td>
													<td><?php echo $row['cantidad_producto'] ?></td>
													<td><?php echo $row['precio_producto'] ?></td>
													<td><?php echo $row['descripcion_producto'] ?></td>
                                                    <td><?php echo $row['estado_producto'] ?></td>
													<td> <?php echo "<img src= '".$row['imagen_producto']."' width='60' height='60'>  " ?></td>



													<td><?php echo $row['codigo_codigo_categoria'] ?></td>
													
													

														<!---Aquí debo determinar cual dato se debe de editar. -->

														<!--Desde la fila ($row) a cada sentencia agregale un número al lado del id: el número de la tarea.  --->

													<td >

													<form method="post" action="eliminar_producto.php" enctype="multipart/form-data">
														<input type="hidden" name="codigo_producto" value="<?php echo $row['codigo_producto']?> ">														
														<input type="submit" class="btn btn-danger" value="eliminar" onClick= 'return validar()' >
														</form>
															
															<br>

															

														
														<form method= "POST" action = "editar_producto.php" enctype="multipart/form-data">
														<input type="hidden" name="codigo_producto" value="<?php echo $row['codigo_producto']. $row['nombre_producto'] . $row['cantidad_producto'].$row['precio_producto']. $row['descripcion_producto']. $row['estado_producto']. $row['imagen_producto'].$row['codigo_codigo_categoria']?>">													
														<input type="submit" class="btn btn-success" value="editar" onClick= 'return validar2()' >
														</form>
														
														


												<form method= "POST" action = "generar_reporte.php" enctype="multipart/form-data">
																																		
														
														</form>
														
													
														
														
														
														
														
														
												

													</td>							

													

												</tr>


											<!---Se ha partido el código para que dentro del while se pueda escribir código html. -->
											<?php  } ?>

										
									</tbody>


								</table>



							</div>
		

				</div>


			</div>
		</div>

</div>
<div id="popup" class="overlay">
            <div id="popupBody">
            	 <?php $codigo_producto = $_GET['codigo_producto'] ?>
                <h2>Producto #<?php echo "$codigo_producto";  ?></h2>
                <a id="cerrar" href="#">&times;</a>
                <div class="popupContent">
                 
                </div>
                
                	<div id="Layer1" style="width:900px; height:560px; overflow-y: scroll;">	
                <table class="table table-dark" >
									 
									<!--El thead sirve para la cabeza de la tabla. -->
									<thead>
										<!---tr sirve para las filas -->
											<tr >
													<!---th sirve para el título de las tareas. -->
													<th >Codigo</th>
													<th >Nombre </th>	
													<th >Cantidad</th>
													<th >Precio</th>
													<th >Descripción</th>
													<th >Estado</th>
													<th >Imagen</th>
													<th >Codigo categoria</th>
													<th >Acciones</th>
													
													
													
											</tr>

									</thead>
									
									<!---Contiene a un bloque de líneas -->
									<tbody>
                	<?php $query = "SELECT * FROM productos WHERE codigo_producto =".$_GET['codigo_producto'];
							$result_datos = mysqli_query($con, $query);
							while ($row = mysqli_fetch_array($result_datos)) { ?>
									<tr>
													<!---Por php pinta desde la fila, varible $row, desde la fila cédula. -->

													<td><?php echo $row['codigo_producto'] ?></td>
													<td><?php echo $row['nombre_producto'] ?></td>
													<td><?php echo $row['cantidad_producto'] ?></td>
													<td><?php echo $row['precio_producto'] ?></td>
													<td><?php echo $row['descripcion_producto'] ?></td>
                                                    <td><?php echo $row['estado_producto'] ?></td>
													<td> <?php echo "<img src= '".$row['imagen_producto']."' width='60' height='60'>  " ?></td>



													<td><?php echo $row['codigo_codigo_categoria'] ?></td>
													
													

														<!---Aquí debo determinar cual dato se debe de editar. -->

														<!--Desde la fila ($row) a cada sentencia agregale un número al lado del id: el número de la tarea.  --->

													<td >

													<form method="post" action="eliminar_producto.php" enctype="multipart/form-data">
														<input type="hidden" name="codigo_producto" value="<?php echo $row['codigo_producto']?> ">														
														<input type="submit" class="btn btn-danger" value="eliminar" onClick= 'return validar()' >
														</form>
															
															<br>

															

														
														<form method= "POST" action = "editar_producto.php" enctype="multipart/form-data">
														<input type="hidden" name="codigo_producto" value="<?php echo $row['codigo_producto']. $row['nombre_producto'] . $row['cantidad_producto'].$row['precio_producto']. $row['descripcion_producto']. $row['estado_producto']. $row['imagen_producto'].$row['codigo_codigo_categoria']?>">													
														<input type="submit" class="btn btn-success" value="editar" onClick= 'return validar2()' >
														</form>
														
														


												<form method= "POST" action = "generar_reporte.php" enctype="multipart/form-data">
																																		
														
														</form>
														
													
														
														
														
														
														
														
												

													</td>							

													

												</tr>

											<?php }  ?>
											<!---Se ha partido el código para que dentro del while se pueda escribir código html. -->
											

										
									</tbody>


								</table>
<a href="../../index_admin.php"><button class="btn btn-success" name="Regresar">Regresar</button></a>


							</div>
				

				</div>


			</div>
		</div>
					
            </div>
        </div>
    </div>
    </div>
</body>
</html>



<?php } ?>
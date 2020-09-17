<?php 


	session_start();
	include("Conexion_BD/conexion.php");

	if (empty($_SESSION['key_admin'])) {
    echo "Se produjo un Error";
    header("location: index.php");
	}else{
?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>

<?php

 $busqueda = $_POST['busqueda']; ?>
<body>
<header><h1>Los resultados en base a tu busqueda: <?php echo "$busqueda"; ?></h1></header>

<?php include ("Conexion_BD/conexion.php"); ?>
		<link rel="stylesheet" href="css/bootstrap.css">
<div class="container">
			<div class="col-md-8">
					<style type="text/css">
					.table-text{color: green;}
					</style>
<h1 class="table-text">Productos</h1>
<a href="index2.php"><button class="btn btn-success" name="Regresar">Regresar</button></a>

								<!--la clase table table bordered sirve para cambiar el estilo de la tabla con boostrap. -->
								<table class="table table-dark" align="center">
									
									<!--El thead sirve para la cabeza de la tabla. -->
									<thead thead-dager>
										<!---tr sirve para las filas -->
											
													
																							
													
													
											

									</thead>
									
									<!---Contiene a un bloque de líneas -->
									<tbody>
										<!---cadena de php, lo que hay dentro de esa cadena es una consulta. -->
										<?php 
											
											//** Consulta php. */
											$query = "SELECT imagen_producto,nombre_producto,cantidad_producto,precio_producto,descripcion_producto, estado_producto FROM productos WHERE descripcion_producto LIKE '%$busqueda%' OR nombre_producto LIKE '%$busqueda%'AND estado_producto = 'Disponible'";
											$result_datos = mysqli_query($con, $query);
											while ($row = mysqli_fetch_array($result_datos)) { ?>
											
												<tr>
													<!---Por php pinta desde la fila, varible $row, desde la fila cédula. -->
													<tr class="danger">
													<td> <?php echo "<img src= 'Conexion_BD/Admin/".$row['imagen_producto']."' width='200' height='150'>  " ?></td>
												</tr>

												<tr class="danger">
													<td><?php echo $row['nombre_producto'] ?></td>
												</tr>
												<tr class="danger">
													<td><?php echo 'Cantidad: ' .$row['cantidad_producto'] ?></td>
												</tr>
												<tr class="danger">
													<td><?php echo $row['precio_producto'] ?></td>
												</tr>
												<tr class="danger">
													<td><?php echo $row['descripcion_producto'] ?></td>

												</tr>

													
													

														<!---Aquí debo determinar cual dato se debe de editar. -->

														<!--Desde la fila ($row) a cada sentencia agregale un número al lado del id: el número de la tarea.  --->

													<td >

													<form method="post" action="carrito/index.php">
														<input type="hidden" name="documento_identidad" value="<?php echo $row['codigo_producto']?> ">														
														<input type="submit" class="btn btn-danger" value="Agregar al carrito" onClick= 'return validar()' >
														</form>
															
															<br>

															

														
														<form method= "POST" action = "Compra.php">
														<input type="hidden" name="compra" value="<?php echo $row['nombre_producto']. $row['cantidad_producto'] .$row['precio_producto']. $row['codigo_producto']?>">													
														<input type="submit" class="btn btn-success" value="Comprar" onClick= 'return validar2()' >
														</form>
														
														
														
														
														
														
														
														
												

													</td>							

													

												</tr>


											<!---Se ha partido el código para que dentro del while se pueda escribir código html. -->
											<?php  } ?>

										
									</tbody>


								</table>
<a href="index2.php"><button class="btn btn-success" name="Regresar">Regresar</button></a>


							</div>
				

				</div>


			</div>
		</div>

</body>
</html>

<?php } ?>
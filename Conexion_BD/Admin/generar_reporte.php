
	<meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8" />

<?php 



	header("Content-type: application/vnd.ms-excel;charset-utf-8");
	header("Content-Disposition: attachment; filename= productos.xls");



	// $sql = "SELECT * FROM productos";
	// $resultado= mysql_query($conn, $sql);

	
?>



									<tbody>



											<table border="2">
												<tr>
													<td>
														Codigo producto

													</td>
													<td>
														Nombre producto

													</td>
													<td>
														Cantidad

													</td>
													<td>
														Precio
													</td>
													<td>
														Descripción
													</td>
													<td>
														Estado
													</td>
													


												</tr>
											</table>
										<!---cadena de php, lo que hay dentro de esa cadena es una consulta. -->
										<?php 
											

											include("../conexion.php");

											
											$query = "SELECT * FROM productos ";
										
											$result_datos = mysqli_query($con, $query);

											while ($row = mysqli_fetch_array($result_datos)) { ?>
											


											<table border="2">


												<tr>
													<!---Por php pinta desde la fila, varible $row, desde la fila cédula. -->

													<td><?php echo $row['codigo_producto'] ?></td>
													<td><?php echo $row['nombre_producto'] ?></td>
													<td><?php echo $row['cantidad_producto'] ?></td>
													<td><?php echo $row['precio_producto'] ?></td>
													<td><?php echo $row['descripcion_producto'] ?></td>
													<td><?php echo $row['estado_producto'] ?></td>
													
													
												


												</tr>
											</table>

											<!---Se ha partido el código para que dentro del while se pueda escribir código html. -->
											<?php  } ?>

										
									</tbody>






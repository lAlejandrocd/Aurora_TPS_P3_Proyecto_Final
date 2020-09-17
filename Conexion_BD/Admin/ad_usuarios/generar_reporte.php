




	<meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8" />

<?php 

	$documento_identidad = $_POST['documento_identidad'];

	header("Content-type: application/vnd.ms-excel;charset-utf-8");
	header("Content-Disposition: attachment; filename= factura.xls");



	// $sql = "SELECT * FROM productos";
	// $resultado= mysql_query($conn, $sql);

	
?>



									<tbody>



											<table border="2">
												<tr>
													<td>
														ID
													</td>
													<td>
														Nombre Completo

													</td>
													<td>
														Codigo Factura

													</td>
													<td>
														Total
													</td>
													<td>
														Fecha
													</td>
													


												</tr>
											</table>
										<!---cadena de php, lo que hay dentro de esa cadena es una consulta. -->
										<?php 
											

											include("../../conexion.php");

											
											$query = "select factura.*, usuarios.documento_identidad, usuarios.nombre_completo
	  											from factura
	  											inner join usuarios on usuarios.documento_identidad = '$documento_identidad'";
										
											$result_datos = mysqli_query($con, $query);

											while ($row = mysqli_fetch_array($result_datos)) { ?>
											


											<table border="2">


												<tr>
													<!---Por php pinta desde la fila, varible $row, desde la fila cédula. -->

													<td><?php echo $row['documento_identidad'] ?></td>
													<td><?php echo $row['nombre_completo'] ?></td>
													<td><?php echo $row['codigo_factura'] ?></td>
													<td><?php echo $row['total'] ?></td>
													<td><?php echo $row['fecha'] ?></td>
													
													
													
												


												</tr>
											</table>

											<!---Se ha partido el código para que dentro del while se pueda escribir código html. -->
											<?php  } ?>

										
									</tbody>






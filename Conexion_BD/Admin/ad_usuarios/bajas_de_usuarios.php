<?php 
session_start();
include("../../conexion.php");

if (!isset($_SESSION['admin'])) {
	
	header("location: ../../../index.php");
    
}else{
  ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body style="background: url(../../../img/inin.jpg); background-size: cover; width: 100%; height: 100%;">

<?php

 $busqueda = $_POST['documento_identidad']; 
 ?>
<body>
<header><h1 class="text-white">Los resultados en base a tu busqueda: <?php echo "$busqueda"; ?></h1></header>

<?php include ("../../conexion.php"); ?>
<link rel="stylesheet" type="text/css" href="../../../css/bootstrap.css">
<div class="container">
			<div class="col-md-8">
					<style type="text/css">
					.table-text{color: green;}
					</style>
<h1 class="text-white">Usuario De Baja</h1>


								<!--la clase table table bordered sirve para cambiar el estilo de la tabla con boostrap. -->
								<table class="table table-dark" align="center">
									
									<!--El thead sirve para la cabeza de la tabla. -->
									<thead thead-dager>
										<!---tr sirve para las filas -->
											
												<th scope="col">Identificacion</th>
													<th scope="col">Nombre Completo</th>	
													<th scope="col">Correo Electronico</th>
													<th scope="col">Contraseña</th>
													<th scope="col">Telefono</th>
													<th scope="col">Direccion</th>
													<th scope="col">Acciones</th>	
					
									</thead>
									
									<!---Contiene a un bloque de líneas -->
									<tbody>
										<!---cadena de php, lo que hay dentro de esa cadena es una consulta. -->
										<?php 
											
											
											$query = "SELECT * FROM usuarios WHERE '$busqueda' = documento_identidad";
											$result_datos = mysqli_query($con, $query);
											while ($row = mysqli_fetch_array($result_datos)) { ?>
											
												<tr>
													<!---Por php pinta desde la fila, varible $row, desde la fila cédula. -->
													
													<td><?php echo $row['documento_identidad'] ?></td>
											

												
													<td><?php echo $row['nombre_completo'] ?></td>
												
													<td><?php echo 'Cantidad: ' .$row['email'] ?></td>
												
													<td><?php echo $row['clave'] ?></td>
												
													<td><?php echo $row['telefono'] ?></td>

													<td><?php echo $row['direccion'] ?></td>


													
													

														<!---Aquí debo determinar cual dato se debe de editar. -->

														<!--Desde la fila ($row) a cada sentencia agregale un número al lado del id: el número de la tarea.  --->

													<td >

													<form method="post" action="../../Usuario/eliminar.php">
														<input type="hidden" name="documento_identidad" value="<?php echo $row['documento_identidad']?> ">														
														<input type="submit" class="btn btn-danger" value="eliminar" onClick= 'return validar()' >
														</form>
															
															<br>
															<a href="ver_usuarios.php"><button class="btn btn-success" name="Regresar">Realizar otra busqueda</button></a>
															

														
														
														
														
														
														
														
														
														
														
												

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

</body>
</html>

<?php } ?>
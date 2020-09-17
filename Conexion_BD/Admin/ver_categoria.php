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
	<title>Categorias</title>
	<meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">


</head>
<body style="background: url(backgrounds/back5.jpg); background-size: cover; width: 100%; height: 100%;" >

<style type="text/css">
	body {
  
  font-family: 'Titillium Web', sans-serif;
  

}
</style>

	
		<div class="container">
			<div class="col-md-8">
					<style type="text/css">
					.table-text{color: green;}
					</style>
<h1 class="text-white">Categorias</h1>⠀<a href="../../index_admin.php"><button class="btn btn-success" name="Regresar">Regresar</button></a>
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
													<th scope="col">Descripción</th>
													<th scope="col">Opciones</th>
													
													
													
													
											</tr>

									</thead>
									
									<!---Contiene a un bloque de líneas -->
									<tbody>
										<!---cadena de php, lo que hay dentro de esa cadena es una consulta. -->
										<?php 
											
											//** Consulta php. */
											$query = "SELECT * FROM categorias";
											$result_datos = mysqli_query($con, $query);
											while ($row = mysqli_fetch_array($result_datos)) { ?>
											
												<tr>
													<!---Por php pinta desde la fila, varible $row, desde la fila cédula. -->

						<td><?php echo $row['codigo_categoria'] ?></td>
						<td><?php echo $row['nombre_categoria'] ?></td>
                        <td><?php echo $row['descripcion_categoria'] ?></td>
						



												
													

														<!---Aquí debo determinar cual dato se debe de editar. -->

														<!--Desde la fila ($row) a cada sentencia agregale un número al lado del id: el número de la tarea.  --->

													<td >

													<form method="post" action="eliminar_categoria.php" enctype="multipart/form-data">
														<input type="hidden" name="codigo_categoria" value="<?php echo $row['codigo_categoria']?> ">														
														<input type="submit" class="btn btn-danger" value="eliminar" onClick= 'return validar()' >
														</form>
															
															<br>

															

														
														<form method= "POST" action = "editar_categoria.php" enctype="multipart/form-data">
		<input type="hidden" name="codigo_categoria" value="<?php echo $row['codigo_categoria']. $row['nombre_categoria'] . $row['descripcion_categoria']?>">													
														<input type="submit" class="btn btn-success" value="editar" onClick= 'return validar2()' >
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
</body>
</html>

<?php } ?>


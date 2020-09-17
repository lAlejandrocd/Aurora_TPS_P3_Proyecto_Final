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
		<link rel="stylesheet" href="../../css/linearicons.css">
		<link rel="stylesheet" href="../../css/owl.carousel.css">
		<link rel="stylesheet" href="../../css/font-awesome.min.css">
		<link rel="stylesheet" href="../../css/nice-select.css">
		<link rel="stylesheet" href="../../css/magnific-popup.css">
		<link rel="stylesheet" href="../../css/bootstrap.css">
		<link rel="stylesheet" href="../../css/flexslider.css">
		<link rel="stylesheet" href="../../css/main.css">
</head>
<body style="background: url(../../img/inin.jpg); background-size: cover; width: 100%; height: 100%;">

	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
	<!---clase container con un padding de 4. (p-4).-->
	<div class="container p-8">
	
		
				<!---row = fila. --->
				<div class="row">
				
	
						<!---Mi formulario va a medir 4 columnas pero que se encuentre centrado. Usamos las clases "mx-auto".--->
						
						<div class="col-md-7 mx-auto">
						<div id="Layer1" style="width:700px; height:560px; overflow-y: scroll;">
								<!---crear una tarjeta. --->
								<div class="card card-body">
										<h1>Actualización de datos</h1>
										<form  class="table table-dark" form action="enviar_producto.php" method="post" enctype="multipart/form-data">
											
											<div class="form-group">
													<!--¿Desde donde va a tener el valor? lo tendra desde la variable que invocamos en el ultimo condicional en la línea 13, variable de línea 17----->
													<input type="number" REQUIRED name="codigo_producto" placeholder="Codigo de Producto" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Codigo de Producto'" required class="form-control">
											</div>
											<div class="form-group">											
													<input type="text" REQUIRED name="nombre_producto" placeholder="Nombre del Producto" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nombre del Producto'" required class="form-control">
											</div>
											<div class="form-group">
												

													<input type="number" REQUIRED name="cantidad_producto" placeholder="Cantidad existente" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Cantidad existente'" required class="form-control">
											</div>
											<div class="form-group">
												

													<input type="number" REQUIRED name="precio_producto" placeholder="Precio del Prodcuto" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Precio del Prodcuto'" required class="form-control">
											</div>
											<div class="form-group">
												

													<textarea class="form-control" REQUIRED name="descripcion_producto" placeholder="descripción del producto" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Descripcion del producto'" required></textarea>
											</div>
                                            <div class="form-group">
												

								<select name="estado_producto" class="form-control" REQUIRED>
									<option>--Seleccione Estado--</option>
									<option value="disponible">Disponible</option>
									<option value="agotado">Agotado</option>

								</select>
													
											</div>
                                            <div class="form-group">
												

													<input type="file" REQUIRED name="imagen_producto" placeholder="x" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Cantidad de Existencias'" required class="form-control">

																			
													
												
											</div>
                                            <div class="form-group">
												

								<select REQUIRED class="form-control"name="codigo_codigo_categoria">
									<option value="0000">--Seleccione el código de la categoria--</option>
									<option value="1101">Tarjetas 1101</option>
									<option value="1102">Discos Duros 1102</option>
									<option value="1103	">Chasis 1103</option>
									<option value="1104">Audio 1104</option>
									<option value="1105">Procesadores 1105</option>
									<option value="1106">Accesorios 1106</option>
									<option value="1001">Novedad#1 1101</option>
									<option value="1002">Novedad#2 1102</option>
									<option value="1003">Novedad#3 1103</option>
									
									
								</select>
											</div>




											<!---Con la etiqueta botton ya esta determinando de que es un respectivo boton, sin necesidad de poner un input tipo submit. --->
											<button class="btn btn-success" name="btn-admin-send" >

												
												Registrar

											</button>



										</form>

											<a href="../../index_admin.php"><button class="btn btn-success" name="Regresar">Regresar</button></a>

											</div>	</div>




								</div>	
						</div>


				</div>
		</div>				
	</div>

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

			
</body>
</html>


<?php } ?>
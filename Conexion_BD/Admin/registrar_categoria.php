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

					
					<div class="container p-8">
		
				<!---row = fila. --->
				<div class="row">
						<!---Mi formulario va a medir 4 columnas pero que se encuentre centrado. Usamos las clases "mx-auto".--->
						<div class="col-md-7 mx-auto">
								<!---crear una tarjeta. --->
								<div class="card card-body">
									<h1>Registro Categorias</h1>
					<form  class="table table-dark" action="enviar_categoria.php" method="post" enctype="multipart/form-data">
											
											<div class="form-group">
													<!--¿Desde donde va a tener el valor? lo tendra desde la variable que invocamos en el ultimo condicional en la línea 13, variable de línea 17----->
													<input type="number" REQUIRED name="codigo_categoria" placeholder="Codigo de categoria" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Codigo de categoria'" required class="form-control">
											</div>
											<div class="form-group">											
													<input type="text" REQUIRED name="nombre_categoria" placeholder="Nombre de categoria" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nombre categoria'" required class="form-control">
											</div>
											
											<div class="form-group">
												

													<textarea class="form-control" REQUIRED name="descripcion_categoria" placeholder="Descripción" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Descripción'" required></textarea>
											</div>
                                           




											<!---Con la etiqueta botton ya esta determinando de que es un respectivo boton, sin necesidad de poner un input tipo submit. --->
											<button class="btn btn-success" name="btn-admin-send" >

												
												Registrar

											</button>



										</form>
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
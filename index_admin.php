<?php 
session_start();
include("Conexion_BD/conexion.php");

if (!isset($_SESSION['admin'])) {
	
	header("location: index.php");
    
}else{
  ?>




<!DOCTYPE html>
<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="CodePixar">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Administrador</title>
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,500,600" rel="stylesheet">
		<!--
		CSS
		============================================= -->
		<link rel="stylesheet" href="css/linearicons.css">
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/nice-select.css">
		<link rel="stylesheet" href="css/magnific-popup.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/flexslider.css">
		<link rel="stylesheet" href="css/main.css">
	</head>
	<body>
		<!-- Start Header Area -->
		<header class="default-header">

			<div class="container">

				<div class="header-wrap">

					<div class="header-top d-flex justify-content-between align-items-center">
						<style type="text/css">
							.logo{margin-left:-53px;}
						</style>
						<div class="logo">
							<a href="index.html"><img src="img/AURORA.png" alt=""></a>
						</div>


						<div class="main-menubar d-flex align-items-center">
							<nav class="hide">
								
								<a href="Conexion_BD/Admin/cerrar_admin.php" >Cerrar sesion</a>
								
								

							</nav>
							<div class="menu-bar"><span class="lnr lnr-menu"></span></div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- End Header Area -->
		<!-- Start Banner Area -->

		<section class="banner-area relative" style="background: url(img/inin.jpg) no-repeat center center/cover;">
			<div class="container">
				<div class="row fullscreen align-items-center justify-content-center" >
					<div class="col-lg-10">
						<div class="banner-content text-center">
							<br><br><br><br>
							<br><br><br><br>
							<br><br><br><br>
							
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Banner Area -->
		<!-- Start Sample Area -->
		
		<!-- End Sample Area -->
		<!-- Start Button -->
		<section class="button-area">
			<div class="container border-top-generic">
				<h3 class="text-heading">Para Usuarios</h3>
				
				<div class="button-group-area mt-40">
					
					<a href="Conexion_BD/Admin/ad_usuarios/ver_usuarios.php" class="btn btn-outline-dark">Ver Perfiles</a>
					
					
					
				</div>

				<br>
				<hr>
				<br>
				
				<h3 class="text-heading">Para Productos</h3>
				
				<div class="button-group-area mt-40">
					
					<a href="Conexion_BD/Admin/registrar_producto.php" class="btn btn-outline-dark">Registrar Producto</a>
						<br>	<br>
					<a href="Conexion_BD/Admin/ver_productos.php" class="btn btn-outline-success">Visualizar Productos</a>
						<br>	<br>
					<a href="Conexion_BD/Admin/registrar_categoria.php" class="btn btn-outline-dark">Registrar Categoria</a>
						<br>	<br>
					<a href="Conexion_BD/Admin/ver_categoria.php" class="btn btn-outline-dark">Ver Categorias</a>


				

					<!-- <a href="#" class="btn btn-outline-info">Lorem ipsum</a> -->
					<!-- <a href="#" class="btn btn-outline-danger">Eliminar Productos</a> -->
					
				</div>
				<!-- <div class="button-group-area mt-40">
					
					<a href="#" class="btn btn-outline-dark">Primary</a>
					<a href="#" class="btn btn-outline-success">Success</a>
					<a href="#" class="btn btn-outline-info">Info</a>
					<a href="#" class="btn btn-outline-danger">Danger</a>
					
				</div> -->

				
			</div>
		</section>
		<!-- End Button -->
		<!-- Start Align Area -->
		
				
				
		
						<!-- For Gradient Border Use -->
						<!-- <div class="mt-10">
										<div class="primary-input">
														<input id="primary-input" type="text" name="first_name" placeholder="Primary color" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Primary color'">
														<label for="primary-input"></label>
										</div>
						</div> -->
						

	<!-- End Align Area -->
	<!-- Start Subscription Area -->
	
	<!-- End Subscription Area -->
	<!-- Strat Footer Area -->
	
	<!-- End Footer Area -->
	<script src="js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.nice-select.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>

<?php } ?>
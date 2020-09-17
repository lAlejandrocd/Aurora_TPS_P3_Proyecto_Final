<?php 
session_start();
include("Conexion_BD/conexion.php");

if (!isset($_SESSION['id'])) {
    echo "Se produjo un Error";
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
	<title>Aurora</title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:100,300,500" rel="stylesheet">
		<!--
		CSS
		============================================= -->
		<link rel="stylesheet" href="css/linearicons.css">
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/nice-select.css">
		<link rel="stylesheet" href="css/magnific-popup.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" href="css/flexslider.css">
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
								
								<a href="Conexion_BD/Usuario/cerrar_sesion.php" >Cerrar sesion</a>
								<a href="Conexion_BD/Usuario/datos.php">Mi cuenta</a>
								<a href="carrito/index.php">Ir a la tienda</a>
								
								

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
		<!-- Start History Area -->
		<section class="section-gap history-area">
			
		<!-- End History Area -->
		
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 col-md-8">
						<div class="section-title text-center">
							<h2 class="text-black">Novedades</h2>
							<p class="text-black">Los mejores articulos de cada categoria, Los mas recientes productos, Ofertas y descuentos especiales.</p>
						</div>
					</div>
				</div>
				<div class="active-project-carousel">
					<div class="item">
						<div class="row no-gutters">
							<div class="col-lg-8 col-md-6">

								<div class="carousel-thumb">	

								<?php 

										include("Conexion_BD/conexion.php");
							
											$query = "SELECT imagen_producto from productos where codigo_codigo_categoria = 1001";
											$result_datos = mysqli_query($con, $query);
											while ($row = mysqli_fetch_array($result_datos)) { ?>


											<?php echo "<img src= 'Conexion_BD/Admin/".$row['imagen_producto']."' width='460' height='290'>  " ?>


								<?php  } ?>
							
							


								</div>
							</div>
							<div class="col-lg-4 col-md-6">
								<div class="novedad-style">
									<h3>
									
									<?php 

										include("Conexion_BD/conexion.php");
							
											$query = "SELECT nombre_producto from productos where codigo_codigo_categoria = 1001";
											$result_datos = mysqli_query($con, $query);
											while ($row = mysqli_fetch_array($result_datos)) { ?>


											<?php echo $row['nombre_producto'] ?>

								<?php  } ?>
							
									
									
									
									</h3>
									<p>

									<?php 

										include("Conexion_BD/conexion.php");
							
											$query = "SELECT descripcion_producto from productos where codigo_producto = 2";
											$result_datos = mysqli_query($con, $query);
											while ($row = mysqli_fetch_array($result_datos)) { ?>


											<?php echo $row['descripcion_producto'] ?>


								<?php  } ?>
							
							
									
									
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="row no-gutters">
							<div class="col-lg-8 col-md-6">
								<div class="carousel-thumb">
								
								<?php 

										include("Conexion_BD/conexion.php");
							
											$query = "SELECT imagen_producto from productos where codigo_codigo_categoria = 1002";
											$result_datos = mysqli_query($con, $query);
											while ($row = mysqli_fetch_array($result_datos)) { ?>


											<?php echo "<img src= 'Conexion_BD/Admin/".$row['imagen_producto']."' width='460' height='290'>  " ?>


								<?php  } ?>
							
							



								
								
								
								</div>
							</div>
							<div class="col-lg-4 col-md-6">
								<div class="novedad-style">
									<h3>
									
									<?php 

										include("Conexion_BD/conexion.php");
							
											$query = "SELECT nombre_producto from productos where codigo_codigo_categoria = 1002";
											$result_datos = mysqli_query($con, $query);
											while ($row = mysqli_fetch_array($result_datos)) { ?>


											<?php echo $row['nombre_producto'] ?>

								<?php  } ?>
							
									
									
									
									
									
									</h3>
									<p>
									
									<?php 

										include("Conexion_BD/conexion.php");
							
											$query = "SELECT descripcion_producto from productos where codigo_producto = 1";
											$result_datos = mysqli_query($con, $query);
											while ($row = mysqli_fetch_array($result_datos)) { ?>


											<?php echo $row['descripcion_producto'] ?>


								<?php  } ?>
									
									
									
									
									
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="row no-gutters">
							<div class="col-lg-8 col-md-6">
								<div class="carousel-thumb">
								
								<?php 

										include("Conexion_BD/conexion.php");
							
											$query = "SELECT imagen_producto from productos where codigo_codigo_categoria = 1003";
											$result_datos = mysqli_query($con, $query);
											while ($row = mysqli_fetch_array($result_datos)) { ?>


											<?php echo "<img src= 'Conexion_BD/Admin/".$row['imagen_producto']."' width='460' height='290'>  " ?>


								<?php  } ?>
							
								
								
								
								</div>
							</div>
							<div class="col-lg-4 col-md-6">
								<div class="novedad-style">
									<h3>
									
									<?php 

										include("Conexion_BD/conexion.php");
							
											$query = "SELECT nombre_producto from productos where codigo_codigo_categoria = 1003";
											$result_datos = mysqli_query($con, $query);
											while ($row = mysqli_fetch_array($result_datos)) { ?>


											<?php echo $row['nombre_producto'] ?>

								<?php  } ?>
							
									
									
									
									
									
									
									</h3>
									<p>
									
									
									<?php 

										include("Conexion_BD/conexion.php");
							
											$query = "SELECT descripcion_producto from productos where codigo_producto = 3";
											$result_datos = mysqli_query($con, $query);
											while ($row = mysqli_fetch_array($result_datos)) { ?>


											<?php echo $row['descripcion_producto'] ?>


								<?php  } ?>

									
									
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		
		<footer class="section-gap">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-sm-6">
						<div class="single-footer-widget">
							<h6 class="text-white text-uppercase mb-20">Acerca de Nosotros</h6>
							<ul class="footer-nav">
								<li><a href="#">Mision</a></li>
								<li><a href="#">Vision</a></li>
								<li><a href="#">Quienes Somos</a></li>
								<li><a href="#">Lema</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="single-footer-widget">
							<h6 class="text-white text-uppercase mb-20">Links de Navegacion</h6>
							<ul class="footer-nav">
								<li><a href="#">Inicio</a></li>
								<li><a href="Registrarse/Registro.php">Registrarse</a></li>
								<li><a href="Registrarse/Registro.php">Iniciar sesion</a></li>
								<li><a href="Conexion_BD/Usuario/datos.php">Mi perfil</a></li>

							</ul>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="single-footer-widget">
							<h6 class="text-white text-uppercase mb-20">Redes y Contactos</h6>
							<ul class="footer-nav">
								<li><a href="#">Twitter</a></li>
								<li><a href="#">Instagram</a></li>
								<li><a href="#">3158835224</a></li>
							</ul>
						</div>
					</div>

				
				</div>
				<div class="footer-bottom d-flex justify-content-between align-items-center flex-wrap">
					<p class="footer-text m-0">Copyright &copy; 2020 Todos lo derechos de autor reservados a <a href="">Aurora</a></p>
					<div class="footer-social d-flex align-items-center">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-instagram"></i></a>
						<a href="#footer"><i class="fa fa-phone"></script></i></a>
					</div>
				</div>
			</div>
		</footer>
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
		<style type="text/css">	.novedad-style{  padding: 70px 50px;   }</style>
</html>

<?php } ?>



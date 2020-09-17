<?php 



session_start();

include("../Conexion_BD/conexion.php");

if (empty($_SESSION['id'])) {
    echo "Se produjo un Error";
    header("location: ../Registrarse/Registro.php");
}else{
  ?>

  

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Aurora</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">


    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
  
  <div class="site-wrap">
    <?php include("./layouts/header.php"); ?> 

    <div class="site-section">
      <div class="container">

        <div class="row mb-5">
          <div class="col-md-9 order-2">

            <div class="row">
              <div class="col-md-12 mb-5">
                <div class="float-md-left mb-4"><h2 class="text-black h5">Todos los productos</h2></div>
                <div class="d-flex">
                  <div class="dropdown mr-1 ml-md-auto">  
                    </div>
                      <div class="btn-group">
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuReference">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            
            
            <div class="row mb-5">

    <?php 
    
    include("../Conexion_BD/conexion.php");

    $query = "SELECT * FROM productos";

      $result_datos = mysqli_query($con, $query);
											while ($row = mysqli_fetch_array($result_datos)) { ?>


    

              <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                <div class="block-4 text-center border">
                  <figure class="block-4-image">
                    <a href="shop-single.php?codigo_producto=<?php echo $row['codigo_producto']; ?>"><img src="../Conexion_BD/Admin/<?php echo $row['imagen_producto']; ?>" class="img-fluid"></a>
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="shop-single.php?codigo_producto=<?php echo $row['codigo_producto']; ?>"><?php echo $row['nombre_producto']; ?></a></h3>
                    
                    <p class="text-primary font-weight-bold">$ <?php echo $row['precio_producto']; ?></p>
                  </div>
                </div>
              </div>

       		<?php  } ?>     


            </div>
            
          </div>

          <div class="col-md-3 order-1 mb-5 mb-md-0">
            <div class="border p-4 rounded mb-4">
              <h3 class="mb-3 h6 text-uppercase text-black d-block">Categorias</h3>
              <ul class="list-unstyled mb-0">
                <li class="mb-1"><a href="categorias/tarjetas.php" class="d-flex"><span>Tarjetas</span> <span class="text-black ml-auto"></span></a></li>
                <li class="mb-1"><a href="categorias/discos_duros.php" class="d-flex"><span>Discos Duros</span> <span class="text-black ml-auto"></span></a></li>
                <li class="mb-1"><a href="categorias/procesadores.php" class="d-flex"><span>Procesador</span> <span class="text-black ml-auto"></span></a></li>
                <li class="mb-1"><a href="categorias/chasis.php" class="d-flex"><span>Chasis</span> <span class="text-black ml-auto"></span></a></li>
                <li class="mb-1"><a href="categorias/audio.php" class="d-flex"><span>Audio</span> <span class="text-black ml-auto"></span></a></li>
                <li class="mb-1"><a href="categorias/accesorios.php" class="d-flex"><span>Accesorios</span> <span class="text-black ml-auto"></span></a></li>
              </ul>
            </div>

            

              <div class="mb-4">
               

              

            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="site-section site-blocks-2">
                <div class="row justify-content-center text-center mb-5">
                  <div class="col-md-7 site-section-heading pt-4">
                    <h2>Categorias</h2>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0" data-aos="fade" data-aos-delay="">
                    <a class="block-2-item" href="categorias/tarjetas.php">
                      <figure class="image">
                        <img src="images/tarjetas.png" alt="" class="img-fluid">
                      </figure>
                      <div class="text">
                        <span class="text-uppercase">Rendimiento</span>
                        <h3>Tarjetas</h3>
                      </div>
                    </a>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
                    <a class="block-2-item" href="categorias/discos_duros.php">
                      <figure class="image">
                        <img src="images/discos_duros.jpg" alt="" class="img-fluid">
                      </figure>
                      <div class="text">
                        <span class="text-uppercase">Capacidad</span>
                        <h3>Discos Duros</h3>
                      </div>
                    </a>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
                    <a class="block-2-item" href="categorias/chasis.php">
                      <figure class="image">
                        <img src="images/chasis.jpg" alt="" class="img-fluid">
                      </figure>
                      <div class="text">
                        <span class="text-uppercase">Personalizacion</span>
                        <h3>Chasis</h3>
                      </div>
                    </a>
                  </div>
                </div>
                 <div class="row">
                  <div class="col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0" data-aos="fade" data-aos-delay="">
                    <a class="block-2-item" href="categorias/audio.php">
                      <figure class="image">
                        <img src="images/audio.jpg" alt="" class="img-fluid">
                      </figure>
                      <div class="text">
                        <span class="text-uppercase">Sonido</span>
                        <h3>Audio</h3>
                      </div>
                    </a>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
                    <a class="block-2-item" href="categorias/procesadores.php">
                      <figure class="image">
                        <img src="images/procesador.jpg" alt="" class="img-fluid">
                      </figure>
                      <div class="text">
                        <span class="text-uppercase">Rendimiento</span>
                        <h3>Procesador</h3>
                      </div>
                    </a>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
                    <a class="block-2-item" href="categorias/accesorios.php">
                      <figure class="image">
                        <img src="images/accesorios.jpg" alt="" class="img-fluid">
                      </figure>
                      <div class="text">
                        <span class="text-uppercase">Personalizacion</span>
                        <h3>Accesorios</h3>
                      </div>
                    </a>
                  </div>
                </div>
              
            </div>
          </div>
        </div>
        
      </div>
    </div>
    <?php include("./layouts/header.php"); ?> 
    <?php include("./layouts/footer.php"); ?> 

    
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>


<?php } ?>
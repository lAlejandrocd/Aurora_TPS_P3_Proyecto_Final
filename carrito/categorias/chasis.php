    <?php 

session_start();

include("../../Conexion_BD/conexion.php");

if (empty($_SESSION['id'])) {
    echo "Se produjo un Error";
    header("location: ../../Registrarse/Registro.php");
}else{
  ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Aurora</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="../fonts/icomoon/style.css">

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">
    <link rel="stylesheet" href="../css/jquery-ui.css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">


    <link rel="stylesheet" href="../css/aos.css">

    <link rel="stylesheet" href="../css/style.css">
    
  </head>
  <body>
  
  <div class="site-wrap">
    <?php include("layouts/header.php"); ?>  

    <div class="site-section">
      <div class="container">

        <div class="row mb-5">
          <div class="col-md-9 order-2">

            <div class="row">
              <div class="col-md-12 mb-5">
                <div class="float-md-left mb-4"><h2 class="text-black h5">Categorias</h2></div>
                <div class="d-flex">
                  <div class="dropdown mr-1 ml-md-auto">
                    
                  </div>
                  <div class="btn-group">
                   
                  </div>
                </div>
              </div>
            </div>
            <div class="row mb-5">
              <?php 
               
                $resultado = $con ->query("SELECT * FROM productos WHERE 
                    codigo_codigo_categoria = '1103'               
                    order by codigo_producto DESC limit 10")or die($con -> error);
                    if(mysqli_num_rows($resultado) > 0){ 

                   
                while($fila = mysqli_fetch_array($resultado)){
              ?>
                  <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                    <div class="block-4 text-center border">
                      <figure class="block-4-image">
                        <a href="../shop-single.php?codigo_producto=<?php echo $fila['codigo_producto'];?>">
                        <img src="../../Conexion_BD/Admin/<?php echo $fila['imagen_producto']; ?>" alt="<?php echo $fila['nombre_producto'];?>" class="img-fluid"></a>
                      </figure>
                      <div class="block-4-text p-4">
                        <h3><a href="../shop-single.php?codigo_producto=<?php echo $fila['codigo_producto'];?>"><?php echo $fila['nombre_producto'];?></a></h3>
                        
                        <p class="text-primary font-weight-bold">$<?php echo $fila['precio_producto'];?></p>
                      </div>
                     
                    </div>
                  </div>
                <?php } }else{
                    echo  '<h2>Sin resultados</h2>';
                } ?>


            </div>
            
          </div>

                       <div class="col-md-3 order-1 mb-5 mb-md-0">
            <div class="border p-4 rounded mb-4">
              <h3 class="mb-3 h6 text-uppercase text-black d-block">Categorias</h3>
              <ul class="list-unstyled mb-0">
                <li class="mb-1"><a href="tarjetas.php" class="d-flex"><span>Tarjetas</span> <span class="text-black ml-auto"></span></a></li>
                <li class="mb-1"><a href="discos_duros.php" class="d-flex"><span>Discos Duros</span> <span class="text-black ml-auto"></span></a></li>
                <li class="mb-1"><a href="procesadores.php" class="d-flex"><span>Procesador</span> <span class="text-black ml-auto"></span></a></li>
                <li class="mb-1"><a href="chasis.php" class="d-flex"><span>Chasis</span> <span class="text-black ml-auto"></span></a></li>
                <li class="mb-1"><a href="audio.php" class="d-flex"><span>Audio</span> <span class="text-black ml-auto"></span></a></li>
                <li class="mb-1"><a href="accesorios.php" class="d-flex"><span>Accesorios</span> <span class="text-black ml-auto"></span></a></li>
              </ul>
            </div>

            

              

              

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
                    <a class="block-2-item" href="tarjetas.php">
                      <figure class="image">
                        <img src="../images/tarjetas.png" alt="" class="img-fluid">
                      </figure>
                      <div class="text">
                        <span class="text-uppercase">Rendimiento</span>
                        <h3>Tarjetas</h3>
                      </div>
                    </a>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
                    <a class="block-2-item" href="discos_duros.php">
                      <figure class="image">
                        <img src="../images/discos_duros.jpg" alt="" class="img-fluid">
                      </figure>
                      <div class="text">
                        <span class="text-uppercase">Capacidad</span>
                        <h3>Discos Duros</h3>
                      </div>
                    </a>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
                    <a class="block-2-item" href="chasis.php">
                      <figure class="image">
                        <img src="../images/chasis.jpg" alt="" class="img-fluid">
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
                    <a class="block-2-item" href="audio.php">
                      <figure class="image">
                        <img src="../images/audio.jpg" alt="" class="img-fluid">
                      </figure>
                      <div class="text">
                        <span class="text-uppercase">Sonido</span>
                        <h3>Audio</h3>
                      </div>
                    </a>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
                    <a class="block-2-item" href="procesadores.php">
                      <figure class="image">
                        <img src="../images/procesador.jpg" alt="" class="img-fluid">
                      </figure>
                      <div class="text">
                        <span class="text-uppercase">Rendimiento</span>
                        <h3>Procesador</h3>
                      </div>
                    </a>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
                    <a class="block-2-item" href="accesorios.php">
                      <figure class="image">
                        <img src="../images/accesorios.jpg" alt="" class="img-fluid">
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
    <?php include("./../layouts/header.php"); ?> 

    
  </div>

  <script src="../js/jquery-3.3.1.min.js"></script>
  <script src="../js/jquery-ui.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/owl.carousel.min.js"></script>
  <script src="../js/jquery.magnific-popup.min.js"></script>
  <script src="../js/aos.js"></script>

  <script src="../js/main.js"></script>
    
  </body>
</html>

 <?php } ?>
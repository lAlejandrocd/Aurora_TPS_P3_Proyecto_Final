<?php 



session_start();

include("../Conexion_BD/conexion.php");

if (empty($_SESSION['id'])) {
    echo "Se produjo un Error";
    header("location: ../Registrarse/Registro.php");
}else{
  ?>


<?php 

 include("../Conexion_BD/conexion.php");

  if (isset($_GET['codigo_producto'])) {
    
    $resultado = $con->query("SELECT * FROM productos where codigo_producto=".$_GET['codigo_producto']);
    
    
      if (mysqli_num_rows($resultado) > 0 ) {
      $row = mysqli_fetch_array($resultado);
      }else{
          
        header("location : index.php");

      }


  }else{

    header("location : index.php");

  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Tienda</title>
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
        <div class="row">
          <div class="col-md-6">
            <img src="../Conexion_BD/Admin/<?php echo $row['imagen_producto']; ?>" alt="Image" class="img-fluid">
          </div>
          <div class="col-md-6">
            <h2 class="text-black"><?php echo $row['nombre_producto']; ?></h2>
            <p><?php echo $row['descripcion_producto']; ?></p>
            
            <p><strong class="text-primary h4"><?php echo $row['precio_producto']; ?></strong></p>
            <div class="mb-1 d-flex">
              
            </div>
            <div class="mb-5">
              <div class="input-group mb-3" style="max-width: 120px;">
              <div class="input-group-prepend">
              
              </div>
              
              <div class="input-group-append">
                
              </div>
            </div>

            </div>
            <p><a href="cart.php?codigo_producto=<?php echo $row['codigo_producto']; ?>" class="buy-now btn btn-sm btn-primary">Añadir al carrito</a></p>

          </div>
        </div>
      </div>
    </div>

   
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
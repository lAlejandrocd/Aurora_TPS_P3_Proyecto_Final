<?php 
session_start();
include("../Conexion_BD/conexion.php");
if (empty($_SESSION['id'])) {
    echo "Se produjo un Error";
    header("location: ../Registrarse/Registro.php");
}else{
  ?>



<?php
if(!isset($_GET['codigo_factura'])){
    header("Location: ./");
}
$datos = $con->query("select 
        factura.*,  
        usuarios.nombre_completo,usuarios.email,usuarios.telefono,usuarios.documento_identidad,usuarios.direccion
        from factura 
        inner join usuarios on factura.id_usuario = usuarios.documento_identidad
        where factura.codigo_factura=".$_GET['codigo_factura'])or die($con->error);
$datosUsuario = mysqli_fetch_row($datos);
$datos2 = $con->query("select * from envio where codigo_factura=".$_GET['codigo_factura'])or die($con->error);
$datosEnvio= mysqli_fetch_row($datos2);

$datos3= $con->query("select detalle_factura.*,    
                productos.nombre_producto as nombre_producto, productos.imagen_producto  
                from detalle_factura inner join productos on detalle_factura.codigo_producto = productos.codigo_producto 
                where codigo_factura =".$_GET['codigo_factura'])or die($con->error);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Aurora &mdash; Pedido</title>
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
          <div class="col-md-12">
            <h2 class="h3 mb-3 text-black">Estado del Pedido</h2>
          </div>
          <div class="col-md-7">

            <form action="#" method="post">
              
              <div class="p-3 p-lg-5 border">
                
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_fname" class="text-black">Venta: #<?php echo $_GET['codigo_factura'];?></label>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_fname" class="text-black">Nombre: <?php echo $datosUsuario[4];?></label>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_fname" class="text-black">Correo: <?php echo $datosUsuario[5];?></label>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_fname" class="text-black">Telefono: <?php echo $datosUsuario[6];?></label>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_fname" class="text-black">Direccion <?php echo $datosUsuario[8];?></label>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_fname" class="text-black">Id Envio #<?php echo $datosEnvio[0];?></label>
                  </div>
                </div>
                
              </div>
            </form>
          </div>
          <div class="col-md-5 ml-auto">
          <?php
            while($f = mysqli_fetch_array($datos3)){

            
          ?>
            <div class="p-4 border mb-3">
                <img src="../Conexion_BD/Admin/<?php echo $f['imagen_producto'];?>" width="200px"/>
              <span class="d-block text-primary h6 text-uppercase"><?php echo $f['nombre_producto'];?></span> <br>
              <span class="d-block text-primary h6 text-uppercase">Cantidad:<?php echo $f['cantidad'];?></span>
              <span class="d-block text-primary h6 text-uppercase">Precio:$<?php echo $f['precio'];?></span>
            </div>
            <?php } ?>
            <h4>Total:  $<?php echo $datosUsuario[2];?></h4>
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
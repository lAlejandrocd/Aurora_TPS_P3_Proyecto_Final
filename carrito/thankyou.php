<?php 



session_start();

include("../Conexion_BD/conexion.php");

if (empty($_SESSION['id'])) {
    echo "Se produjo un Error";
    header("location: ../Registrarse/Registro.php");
}else{
  ?>


<?php 

if(!isset($_SESSION['carrito'])){header("Location: ./index.php");} 
$arreglo  = $_SESSION['carrito'];
$total= 0;
for($i=0; $i<count($arreglo);$i++){
  $total = $total+($arreglo[$i]['precio_producto'] * $arreglo[$i]['cantidad_producto']);
}
$con->query("SELECT documento_identidad FROM usuarios WHERE documento_identidad =  = '".$_SESSION['id']."'");

$id = $con ->insert_id;
$id_usuario = $_SESSION['id'];
$fecha = date('Y-m-d h:m:s');
$con -> query("INSERT INTO factura(codigo_factura,id_usuario,total,fecha) values(NULL,'$id_usuario','$total','$fecha')")or die($con->error);
$codigo_venta = $con ->insert_id;

//   $con -> query("INSERT INTO factura (codigo_factura,fecha,total) 
//     values(
//       $codigo_venta,
//       '$fecha',
//      ".$arreglo[$i]['cantidad_producto']*$arreglo[$i]['precio_producto']."
//       ) ")or die($con->error);
      
$res= $con->query("SELECT MAX(codigo_factura) codec FROM factura");
$fila = mysqli_fetch_row($res);
$cod_factura=  $fila[0];

for($i=0; $i<count($arreglo);$i++){
  $con -> query("INSERT INTO detalle_factura (id_detalle, codigo_factura,codigo_producto,cantidad,precio) 
    values(
      NULL,
      $cod_factura,
      ".$arreglo[$i]['codigo_producto'].",
      ".$arreglo[$i]['cantidad_producto'].",
      ".$arreglo[$i]['precio_producto']."
      ) ")or die($con->error);
    $con->query("UPDATE productos SET cantidad_producto = cantidad_producto -".$arreglo[$i]['cantidad_producto']." WHERE codigo_producto=".$arreglo[$i]['codigo_producto']  )or die($con->error);
}

$con->query(" INSERT INTO envio(documento_identidad,codigo_factura) values
      (
        
        '".$_POST['documento_identidad']."',
        $codigo_venta
      )  
      
      ")or die($con->error);
      
include "./php/mail.php";  
unset($_SESSION['carrito']);
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
          <div class="col-md-12 text-center">
            <span class="icon-check_circle display-3 text-success"></span>
            <h2 class="display-3 text-black">Gracias</h2>
            <p class="lead mb-5">Su compra ha sido realizada.</p>
            <p><a href="verpedidos.php?codigo_factura=<?php echo $codigo_venta;?>" class="btn btn-sm btn-primary">Ver Pedido</a></p>
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
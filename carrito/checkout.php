<?php 



session_start();

include("../Conexion_BD/conexion.php");

if (empty($_SESSION['id'])) {
    echo "Se produjo un Error";
    header("location: ../Registrarse/Registro.php");
}else{
  ?>


<?php 

if(!isset($_SESSION['carrito'])){
  header('Location: ./index.php');
}
$arreglo  = $_SESSION['carrito'];

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Aurora &mdash; Confirmacion</title>
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
    <form action="./thankyou.php" method="post">
      <div class="site-section">
        <div class="container">
          <div class="row mb-5">
            <div class="col-md-12">
              <div class="border p-4 rounded" role="alert">
                Deseas regresar al carrito? <a href="cart.php">Click Aquí</a>
              </div>
            </div>
          </div>
          <div class="row">
          
            <div class="col-md-6 mb-5 mb-md-0">
              <h2 class="h3 mb-3 text-black">Detalles de Compra</h2>
              <div class="p-3 p-lg-5 border">
                <div class="form-group">
                  
                </div>
                <div class="form-group row">
                 
                  <div class="col-md-6">
                    
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_companyname" class="text-black">Documento de Identidad</label>
                    <input type="text" REQUIRED class="form-control" id="c_companyname" name="documento_identidad">
                  </div>
                </div>
                 <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_companyname" class="text-black">Correo Electronico </label>
                    <input type="text" REQUIRED class="form-control" id="c_companyname" name="email">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_companyname" class="text-black">Nombre Completo</label>
                    <input type="text" REQUIRED class="form-control" id="c_companyname" name="nombre_completo">
                  </div>
                </div>

                

         


              </div>
            </div>
           
              
              <div class="row mb-5">
                <div class="col-md-12">
                  <h2 class="h3 mb-3 text-black">ORDEN</h2>
                  <div class="p-3 p-lg-5 border">
                    <table class="table site-block-order-table mb-5">
                      <thead>
                        <th>Producto</th>
                        <th>Total</th>
                      </thead>
                      <tbody>
                      <?php
                        $total = 0; 
                        for($i=0;$i<count($arreglo);$i++){
                          $total =$total+ ($arreglo[$i]['precio_producto']*$arreglo[$i]['cantidad_producto']);
                        
                      ?>
                        <tr>
                          <td><?php echo $arreglo[$i]['nombre_producto'];?> </td>
                          <td>$<?php echo  number_format($arreglo[$i]['precio_producto'], 2, '.', '');?></td>
                        </tr>
                    
                        <?php 
                          }
                        ?>
                        <tr>
                          <td>Total a Pagar</td>
                          <td>$<?php echo number_format($total, 2, '.', '');?></td>
                        </tr>
                      </tbody>
                    </table>

                    <div class="border p-3 mb-3">
                      <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsebank" role="button" aria-expanded="false" aria-controls="collapsebank">Pago en Efectivo</a></h3>

                      <div class="collapse" id="collapsebank">
                        <div class="py-2">
                          <p class="mb-0">Puedes pagar por cualquiera de los puntos efecty de Cali.</p>
                        </div>
                      </div>
                    </div>

                    

                    <div class="form-group">
                      <button class="btn btn-primary btn-lg py-3 btn-block" type="submit">Comprar</button>
                    </div>

                  </div>
                </div>
              </div>

            </div>
          </div>
          <!-- </form> -->
        </div>
      </div>
    </form>           
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
  <?php 
  session_start();
  //unset($_SESSION['carrito']);
  include("../Conexion_BD/conexion.php");
  if(isset($_SESSION['carrito'])){
    //si existe buscamos si ya estaba agregado ese producto
    if(isset($_GET['codigo_producto'])){
      $arreglo =$_SESSION['carrito'];
      $encontro=false;
      $numero = 0;
      for($i=0;$i<count($arreglo);$i++){
        if($arreglo[$i]['codigo_producto'] == $_GET['codigo_producto']){
          $encontro=true;
          $numero=$i;
        }
      }
      if($encontro == true){
        $arreglo[$numero]['cantidad_producto']=$arreglo[$numero]['cantidad_producto']+1;
        $_SESSION['carrito']=$arreglo;
        header("location: cart.php"); 
      }else{
        /// no estaba el registro
        $nombre_producto ="";
        $precio_producto = "";
        $imagen_producto ="";
        $res= $con->query("SELECT  * FROM productos WHERE codigo_producto=".$_GET['codigo_producto'])or die($con->error);
        $fila = mysqli_fetch_row($res);

        $nombre_producto=  $fila[1];
        $precio_producto = $fila[3];
        $imagen_producto = $fila[6];
        $arregloNuevo= array(
                    'codigo_producto'=> $_GET['codigo_producto'],
                    'nombre_producto'=> $nombre_producto,
                    'precio_producto'=>$precio_producto,
                    'imagen_producto'=> $imagen_producto,
                    'cantidad_producto' => 1
        );
        array_push($arreglo, $arregloNuevo);
        $_SESSION['carrito']=$arreglo;
        header("location: cart.php"); 
      }
    }
  }else{
    //creamos la variable de sesion
    if(isset($_GET['codigo_producto'])){
      $nombre_producto ="";
      $precio_producto= "";
      $imagen_producto="";
      $res= $con->query("SELECT  * FROM productos WHERE codigo_producto=".$_GET['codigo_producto'])or die($con->error);
      $fila = mysqli_fetch_row($res);

      $nombre_producto =$fila[1];
      $precio_producto = $fila[3];
      $imagen_producto = $fila[6];
      $arreglo[] = array(
                  'codigo_producto'=> $_GET['codigo_producto'],
                  'nombre_producto'=> $nombre_producto,
                  'precio_producto'=> $precio_producto,
                  'imagen_producto'=> $imagen_producto,
                  'cantidad_producto' => 1
      );
      $_SESSION['carrito']=$arreglo;
      header("location: cart.php"); 
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Tienda </title>
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
          <form class="col-md-12" method="post">
            <div class="site-blocks-table">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th class="product-thumbnail">Imagen</th>
                    <th class="product-name">Producto</th>
                    <th class="product-price">Precio</th>
                    <th class="product-quantity">Cantidad</th>
                    <th class="product-total">Total</th>
                    <th class="product-remove">Remover</th>
                  </tr>
                </thead>
                <tbody>

                  <?php 
                      $total = 0;
                      if (isset($_SESSION['carrito'])) {
                        $arregloCarrito= $_SESSION['carrito'];
                        for ($i=0; $i <count($arregloCarrito) ; $i++) { 
                            $total = ($arregloCarrito[$i]['precio_producto'] * $arregloCarrito[$i]['cantidad_producto']); 
                          
                  ?>

                  <tr>
                    <td class="product-thumbnail">
                      <img src="../Conexion_BD/Admin/<?php echo $arregloCarrito[$i]['imagen_producto']; ?>" alt="Image" class="img-fluid">
                    </td>
                    <td class="product-name">
                      <h2 class="h5 text-black"><?php echo $arregloCarrito[$i]['nombre_producto']; ?></h2>
                    </td>
                    <td><?php echo $arregloCarrito[$i]['precio_producto']; ?></td>
                    <td>
                      <div class="input-group mb-3" style="max-width: 120px;">
                        <div class="input-group-prepend">
                          <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
                        </div>
                        <input type="text" class="form-control text-center txtCantidad" 
                            data-precio="<?php echo $arregloCarrito[$i]['precio_producto']; ?>"
                            data-id="<?php echo $arregloCarrito[$i]['codigo_producto']; ?>"
                            value="<?php echo $arregloCarrito[$i]['cantidad_producto']; ?>" 
                            placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                        <div class="input-group-append">
                          <button class="btn btn-outline-primary js-btn-plus btnIncrementar" type="button" ">&plus;</button>
                        </div>
                      </div>

                    </td>
                      <td class="cant<?php echo $arregloCarrito[$i]['codigo_producto']; ?>">
                      $<?php echo $arregloCarrito[$i]['precio_producto'] * $arregloCarrito[$i]['cantidad_producto']; ?></td>
                    <td><a href="php/eliminarCarrito.php" class="btn btn-primary btn-sm btnEliminar" data-id="<?php echo $arregloCarrito[$i]['codigo_producto'];?>">X</a></td>
                  </tr>
                  
                  <?php } } ?>
                 
                </tbody>
              </table>
            </div>
          </form>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="row mb-5">
              <div class="col-md-6 mb-3 mb-md-0">
                <button class="btn btn-primary btn-sm btn-block">Actualizar Carrito</button>
              </div>
              <div class="col-md-6">
                <a href="index.php"><button class="btn btn-outline-primary btn-sm btn-block">Continuar Comprando</button></a>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
               
              </div>
            </div>
          </div>
          <div class="col-md-6 pl-5">
            <div class="row justify-content-end">
              <div class="col-md-7">
                <div class="row">
                  <div class="col-md-12 text-right border-bottom mb-5">
                    <h3 class="text-black h4 text-uppercase">Valor Total</h3>
                  </div>
                </div>
                <div class="row mb-3">
                  
                </div>
                <div class="row mb-5">
                  <div class="col-md-6">
                    <span class="text-black">Total</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong class="text-black">$<?php echo $total;?></strong>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <button class="btn btn-primary btn-lg py-3 btn-block" onclick="window.location='checkout.php'">Comprar</button>
                  </div>
                </div>
              </div>
            </div>
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
  <script>
    $(document).ready(function(){
      $(".btnEliminar").click(function(event){
        event.preventDefault();
        var id = $(this).data('id');
        var boton = $(this);
        $.ajax({
          method:'POST',
          url:'./php/eliminarCarrito.php',
          data:{
            id:id
          }
        }).done(function(respuesta){
         boton.parent('td').parent('tr').remove();
        });
      });
      $(".txtCantidad").keyup(function(){
        var cantidad = $(this).val();
        var precio = $(this).data('precio');
        var id =  $(this).data('id');
        incrementar(cantidad,precio,id);
       
      });
      $(".btnIncrementar").click(function(){
        var precio = $(this).parent('div').parent('div').find('input').data('precio');
        var id = $(this).parent('div').parent('div').find('input').data('id');
        var cantidad = $(this).parent('div').parent('div').find('input').val();
        incrementar(cantidad,precio,id);
      });
      function incrementar(cantidad, precio, id){
        var mult = parseFloat(cantidad)* parseFloat(precio);
        $(".cant"+id).text("$"+mult);
        $.ajax({
          method:'POST',
          url:'./php/actualizar.php',
          data:{
            id:id,
            cantidad:cantidad
          }
        }).done(function(respuesta){
        
        });
      }
    });
  </script>
    
  </body>
</html>
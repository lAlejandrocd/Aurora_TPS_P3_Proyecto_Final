<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Registrarse</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="../css/linearicons.css">
    <link rel="stylesheet" href="../css/owl.carousel.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/nice-select.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/flexslider.css">
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
<!-- partial:index.partial.html -->
<section class="banner-area relative" style="background: url(../img/inin.jpg) no-repeat center center/cover;">

<div class="form">
      <div id="Layer1" style="width:530px; height:560px; overflow-y: scroll;">

      <ul>
          <h1><li class="text-white">Registrarse</li></h1>
        </ul>
      
      <div class="">
        <div id="signup">   
          
          
          <form action="../Conexion_BD/Usuario/register.php" method="post">
                      <div class="form-group">                      
                          <input type="number" REQUIRED name="documento_identidad" placeholder="Documento Identidad" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Documento Identidad'" required class="form-control">
                      </div>
                      <div class="form-group">
                          <input type="text" REQUIRED name="nombre_completo" placeholder="Nombre Completo" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nombre Completo'" required class="form-control">
                      </div>
                       <div class="form-group">                      
                          <input type="email" REQUIRED name="email" placeholder="Correo Electronico" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Correo Electronico'" required class="form-control">
                      </div>
                      <div class="form-group">                      
                          <input type="password" REQUIRED name="clave" placeholder="Contraseña" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Contraseña'" required class="form-control">
                      </div>
                      <div class="form-group">                      
                          <input type="number" REQUIRED name="telefono" placeholder="Telefono" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Telefono'" required class="form-control">
                      </div>
                      <div class="form-group">                      
                          <input type="text" REQUIRED name="direccion" placeholder="Direccion" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Direccion'" required class="form-control">
                      </div>
                      
         
          <button type="submit" class="btn btn-success" name="btn-register"/>Registrarse</button>
         
          </form>
           <br>
           
        </div>
        <br>

        <ul>
          <h1><li class="text-white">Iniciar Sesion</li></h1>
        </ul>
        <div id="login">   
          
          
          <form action="../Conexion_BD/Usuario/validar.php" method="post">
          
            <div class="form-group">
            <input type="number" class="form-control" placeholder="Documento Identidad" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Documento Identidad'" required autocomplete="off" name="documento_identidad" />
          </div>
          
          <div class="form-group">
            <input type="password" class="form-control"placeholder="Contraseña" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Contraseña'" required autocomplete="off" name="clave" />
          </div>
          
          
          
          <button class="btn btn-danger" name="btn-ini" />Iniciar Sesión</button>
          
          </form>
          <br>
          <a href="R_admin.php"><button type="submit" class="btn btn-danger" name="btn-admin"/>Usuario Especial</button></a>
          <a href="../index.php"><button type="submit" class="btn btn-danger" name="btn-admin"/>Regresar</button></a>
        </div>
        
      </div><!-- tab-content -->
      
</div>

</section> <!-- /form -->
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="script2.js"></script>

</body>
</html>
 




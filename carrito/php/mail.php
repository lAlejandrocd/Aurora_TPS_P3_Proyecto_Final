<?php
    require 'src/Exception.php';
    require 'src/PHPMailer.php';
    require 'src/SMTP.php';

    $correo = $_POST["email"];
    $message='<html>

    <body>
        <h1 style="color:#1d1d1d">Gracias por tu compra '.$_POST['nombre_completo'].'</h1>
       
        <h3>Detalles de la compra </h3>
        <table>
            <thead>
                <tr>
                    <td>Nombre  del producto</td>
                    <td>Precio</td>
                    <td>Cantidad</td>
                    <td>Total</td>
                    <td>Cuenta
                    
                </tr>
            </thead>
            <tbody>';
    $total = 0;
            
    $arregloCarrito =$_SESSION['carrito'];
    for($i=0;$i<count($arregloCarrito);$i++){
        $total= $total + ( $arregloCarrito[$i]['precio_producto'] * $arregloCarrito[$i]['cantidad_producto'] );
        $message.='<tr><td>'. $arregloCarrito[$i]['nombre_producto'].'</td>';
        $message.='<td>'. $arregloCarrito[$i]['precio_producto'].'</td>';
        $message.='<td>'. $arregloCarrito[$i]['cantidad_producto'].'</td>';
        $message.='<td>'. ($arregloCarrito[$i]['precio_producto']*$arregloCarrito[$i]['cantidad_producto']);
        
    }
    $message.='<td>'.'El dinero debe depositarse a este numero de cuenta 4214187890'.'</td></tr>';
    $message.='</tbody></table>';
    $message.='<h2>Total de la compra: '.$total.'</h2>';
    $message.='<a href="http://localhost/Aurora/carrito/verpedidos.php?codigo_factura='.$codigo_venta.'" style="background-color: brown;color:white;padding: 10px;text-decoration: none;">
        Ver Status del pedido
    </a> <br> </body></html>';
    $mail = new PHPMailer\PHPMailer\PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = 0;                                       // Enable verbose debug output
        $mail->isSMTP();                                            // Set mailer to use SMTP
        $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
        $mail->Port       = 587;                                    // TCP port to connect to
    
        
        //https://support.google.com/mail/answer/185833?hl=es-419 POR ACA INGRESAN PARA CREAR LA CLAVE DE LA APP
        $mail->Username   = 'marlonwtf919@gmail.com';                     // SMTP username
        $mail->Password   = 'wowzxqbrouaslioy';                               // SMTP password
  
        //Recipients
        $mail->setFrom('marlonwtf919@gmail.com', 'Marlon Estiben Reina Dinas'); 
        
        //La siguiente linea, se repite N cantidad de veces como destinarios tenga
        $mail->addAddress($correo, $correo);     // Add a recipient
 
        
        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject ='Gracias por tu compra en Aurora.com';
        $mail->Body    = $message." Esto es un mensaje automatico por favor no responder";
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        $mail->send();

        

        

    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
    
?>
<?php  
session_start();
$arregloCarrito = $_SESSION['carrito'];
for($i=0;$i<count($arregloCarrito);$i++){
    if($arregloCarrito[$i]['codigo_producto'] != $_POST['codigo_producto']){
        $arregloNuevo[]= array(
            'codigo_producto'=>$arregloCarrito[$i]['codigo_producto'],
            'nombre_producto'=>$arregloCarrito[$i]['nombre_producto'],
            'precio_producto'=>$arregloCarrito[$i]['precio_producto'],
            'imagen_producto'=>$arregloCarrito[$i]['imagen_producto'],
            'cantidad_producto'=>$arregloCarrito[$i]['cantidad_producto']
        );
    }
}
if(isset($arregloNuevo)){
    
    $_SESSION['carrito']=$arregloNuevo;
    unset($_SESSION['carrito']);
}else{
    //quiere decir que el registro a eliminar es el unico que habia
    unset($_SESSION['carrito']);
}
echo "listo";
?>
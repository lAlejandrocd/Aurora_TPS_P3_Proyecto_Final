<?php 
session_start();
$arreglo = $_SESSION['carrito'];
for($i=0; $i< count($arreglo); $i++){
    if($arreglo[$i]['codigo_producto'] == $_POST['codigo_producto']){
        $arreglo[$i]['cantidad_producto']=$_POST['cantidad_producto'];
        $_SESSION['carrito']= $arreglo;
        break;
    }
}
?>
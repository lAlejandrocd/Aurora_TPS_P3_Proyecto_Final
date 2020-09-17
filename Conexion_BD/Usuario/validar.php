<?php
include ("../conexion.php");
session_start();
if (isset($_POST['btn-ini'])){
$documento_identidad = $_POST['documento_identidad'];
$clave = $_POST['clave'];

}
$consulta = mysqli_query($con, "SELECT * FROM usuarios WHERE documento_identidad = '$documento_identidad' AND clave = '$clave'");  

if($fila = mysqli_fetch_assoc($consulta)){ 
	$_SESSION["id"]=$fila["documento_identidad"];
	header("location: ../../index2.php"); 
} 
else{ 
 echo "<script> alert('Usuario no existe');
 		window.location.href='../../Registrarse/Registro.php';</script>";
  // header("location: index.php");
} 

?>

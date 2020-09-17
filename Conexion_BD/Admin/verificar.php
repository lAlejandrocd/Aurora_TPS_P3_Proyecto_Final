<?php
include ("../conexion.php");
session_start();
if (isset($_POST['btn-admin'])){
$key_admin = $_POST['key_admin'];


}
$consulta = mysqli_query($con, "SELECT * FROM administrador WHERE key_admin = '$key_admin'");  

if($fila = mysqli_fetch_assoc($consulta)){ 
	$_SESSION["admin"]=$fila["key_admin"];
	header("location: ../../index_admin.php"); 
} 
else{ 
 echo "<script> alert('Usuario no existe');
 		window.location.href='../../Registrarse/R_admin.php';</script>";
  // header("location: index.php");
} 

?>






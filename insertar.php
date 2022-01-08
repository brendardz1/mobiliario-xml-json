<?php
include("conexion.php");
$con=conectar();

$nombre=$_POST['nombre'];
$tipo=$_POST['tipo'];
$color=$_POST['color'];
$precio=$_POST['precio'];

$sql="INSERT INTO articulos VALUES(default,'$nombre','$tipo','$color','$precio')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: articulo.php");
    
}else {
}
?>
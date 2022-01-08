<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id_articulo'];
$nombre=$_POST['nombre'];
$tipo=$_POST['tipo'];
$color=$_POST['color'];
$precio=$_POST['precio'];

$sql="UPDATE articulos SET  nombre='$nombre',tipo='$tipo',color='$color',precio='$precio' WHERE id_articulo='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: articulo.php");
    }
?>
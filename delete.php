<?php

include("conexion.php");
$con=conectar();

$id_articulo=$_GET['id'];

$sql="DELETE FROM articulos WHERE id_articulo='$id_articulo'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: articulo.php");
    }
?>

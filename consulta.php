<?php
$server = "localhost";
$user = "root";
$pass = "";
$bd = "mobiliario";
// Creamos la conexion
$conexion = mysqli_connect ($server, $user, $pass, $bd) 
or die ("Ha sucedido un error inexperado en la conexion de la base de datos");

// generamos la consulta
$sql = "SELECT * FROM articulos";
mysqli_set_charset ($conexion, "utf8"); // formato de datos utf8

if (!$result = mysqli_query ($conexion, $sql)) die ();

$usuarios = array (); // creamos un array
while ($row = mysqli_fetch_array ($result)) 
{ 	
	$id = $row ['id_articulo'];
	$nombre = $row ['nombre'];
	$tipo = $row ['tipo'];
	$color = $row ['color'];
	$precio = $row ['precio'];
	
	$articulos [] = array ('id_articulo' => $id_articulo, 'nombre' => $nombre, 'tipo' => $tipo,
	'color' => $color, 'precio' => $precio);

}
	
// desconectamos la base de datos
$close = mysqli_close ($conexion) 
or die ("Ha sucedido un error inexperado en la desconexion de la base de datos");
  

// Creamos el JSON
$json_string = json_encode ($articulos);
echo $json_string;
?>
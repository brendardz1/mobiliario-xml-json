<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM articulos";
  
    

    $articulo = array(); //creamos un array
    if($query=mysqli_query($con,$sql)){
while($row = mysqli_fetch_array($query)) 
{ 	

    $idC=$row['id_articulo'];
    $dato1=$row['nombre'];
    $dato2= $row['tipo'];
    $dato3= $row['color'];
    $dato4=$row['precio'];
	
	$articulo[] = array('idarticulos'=> $idC, 'nombre'=> $dato1, 'tipo'=> $dato2,
						'color'=> $dato3, 'precio'=> $dato4);


}
    }
$json_string = json_encode($articulo);
echo $json_string;
?>
<br>
<?php 

    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM articulos";

  $query=mysqli_query($con,$sql);

  header("Content-type: text/xml");
  //con esto se lee como XML
  $contenido = "<information>";

  while($row = mysqli_fetch_array($query))
  {
      $contenido .= "<Datos>";
      $contenido .= "<Nombre>".$row["nombre"]."</Nombre>";
      $contenido .= "<Tipo>".$row["tipo"]."</Tipo>";
      $contenido .= "<Color>".$row["color"]."</Color>";
      $contenido .= "<Precio>".$row["precio"]."</Precio>";
      $contenido .= "</Datos>";
  }

  $contenido .= "</information>";

  echo $contenido;
  
?>
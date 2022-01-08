<?php 
session_start();

if (isset($_SESSION['id_usuario']) && isset($_SESSION['usuario'])) {

 ?>
<?php 
include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM articulos";
    $query=mysqli_query($con,$sql);

    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> MOBILIARIO</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body class="body_arti">
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h2 class="titulo"> Registrar Mobiliario</h2>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre">
                                    <input type="text" class="form-control mb-3" name="tipo" placeholder="Tipo">
                                    <input type="text" class="form-control mb-3" name="color" placeholder="Color">
                                    <input type="text" class="form-control mb-3" name="precio" placeholder="Precio">
                                    
                                    <input type="submit" class="btn btn-primary"  value="Registrar"> 
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Codigo</th>
                                        <th>Nombre</th>
                                        <th>Tipo</th>
                                        <th>Color</th>
                                        <th>Precio</th>
                                        <th>Operaciones</th>
                                        <th><a href="logout.php" class="btn btn-danger">Salir</a></th>
                                       
    
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['id_articulo']?></th>
                                                <th><?php  echo $row['nombre']?></th>
                                                <th><?php  echo $row['tipo']?></th>
                                                <th><?php  echo $row['color']?></th> 
                                                <th><?php  echo $row['precio']?></th>   
                                                <th><a href="actualizar.php?id=<?php echo $row['id_articulo'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['id_articulo'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                            <a class="btn btn-primary btn-lg btn-block" href="json.php" role="button">json</a>
                                    <a class="btn btn-primary btn-lg btn-block" href="xml.php" role="button">xml</a>
                        </div>
                    </div>  
            </div>
    </body>
</html>
<?php
}else{
     header("Location: index.php");
     exit();
}
 ?>
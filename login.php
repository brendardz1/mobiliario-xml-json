<?php 
session_start(); 
include "conexion.php";
    $con=conectar();

if (isset($_POST['usuario']) && isset($_POST['clave'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['usuario']);
	$pass = validate($_POST['clave']);

	if (empty($uname)) {
		header("Location: index.php?error=Nombre de Usuario vacio");
	    exit();
	}else if(empty($pass)){
        header("Location: index.php?error=Contraseña vacia");
	    exit();
	}else{
		$sql = "SELECT * FROM usuario WHERE usuario='$uname' AND clave='$pass'";

		$result = mysqli_query($con, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['usuario'] === $uname && $row['clave'] === $pass) {
            	$_SESSION['usuario'] = $row['usuario'];
            	$_SESSION['id_usuario'] = $row['id_usuario'];
            	header("Location:articulo.php");
				
		        exit();
            }else{
				header("Location: index.php?error=Usuario o Contraseña Incorrecta");
		        exit();
			}
		}else{
			header("Location: index.php?error=Usuario o Contraseña Incorrecta");
	        exit();
		}
	}
	
}else{
	header("Location: index.php");
	exit();
}
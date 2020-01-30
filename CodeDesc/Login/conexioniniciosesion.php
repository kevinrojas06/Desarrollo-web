<?php

session_start();



if(isset($_POST['iniciarsesion'])){
	if($_POST['usuario']!="" && $_POST['pass']!=""){
		$usuario=$_POST['usuario'];
		$password=$_POST['pass'];
		
		$consultalog="select *from usuarios where correo='$usuario' and password='$password'";
		
		$resultadocon=mysqli_query($conexion,$consultalog);
		
		$contadorlog=mysqli_num_rows($resultadocon);
		
		if($contadorlog==1){
			$_SESSION['usuario']=$usuario;
			header('location:index.php');
		}else{
		    echo('Contraseña o usuario incorrecto');
		}
		
	}else{
		echo('Todos los espacios son requeridos');
	}
}


?>
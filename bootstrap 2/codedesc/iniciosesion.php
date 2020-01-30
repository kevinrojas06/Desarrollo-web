<?php
session_start();
require("conexionbd.php");
if(isset($_POST['iniciarsesion'])){
	if($_POST['usuario']!="" && $_POST['password']!=""){
		$usuario=$_POST['usuario'];
		$contrasena=$_POST['password'];

		$consulta="select *from usuarios where Correo_electronico='$usuario' and Password='$contrasena'";
		$resultado=mysqli_query($conexion,$consulta);
		$contador=mysqli_num_rows($resultado);

		if($contador==1){
			$_SESSION['usuario']=$usuario;
			header('location:index2.php');
		}else{
			echo('Contraseña o Usuario incorrecto.');
		}
	}else{
		echo('Todos los usuarios son requeridos.');
	}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>

<?php
require('BD.class.php');


if(isset($_POST['registrar'])){

	$consulta=BD::conn()->prepare('insert into usuario(Id, Nombre, Correo,
	 Password, Rol, Status)values(:id, :nombre, :email, :password, :rol, :status)');

	 $consulta->execute();

}

?>
	
</body>
</html>
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
$n1=1;
$contador=2;
$cantidad=10; 
$suma=0;

for ($i=0; $i<=$cantidad; $i++) { 
	$suma=$n1+$contador;
	$contador2=$suma;
	$suma2=$contador2+4;
	$contador3=$suma2;
	$suma3=$contador3;
	$prom=$suma3/3;
}
echo'El promedio es: ', $prom;

?>
	
</body>
</html>
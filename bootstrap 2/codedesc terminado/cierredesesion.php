<?php
session_start();
if(isset($_POST['cerrarsesion'])){
	session_destroy();
	header('location:index.php');
}
?>
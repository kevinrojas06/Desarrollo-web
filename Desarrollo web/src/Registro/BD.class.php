<?php
class BD{
	private function __construct(){}

		public static function conn(){
			//is_null - comprueba si una variable es NULL
			if (is_null(self::$conn)) {
				//PDO - Representa una conexión entre PHP y un servidor de bases de datos.
				//self parent y static son utilizados para acceder a propiedades y métodos desde el
				//interior de la definición de la clase.
				try {
					self::$conn=new PDO('mysql:host='.HOST.';dbname='.DB.'', ''.USER.'', ''.PASSWORD.'');
				} catch (PDOException $e) {
					print "¡Error!:".$e->getMessage()."<br/>";
					die();
				}
			}//Cierra el if
			return self::$conn;
		}//Cierra la función $conn
}//Cierra la clase

?>
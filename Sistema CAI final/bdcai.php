<?php 

$contraseña = "godomega";
$usuario = "root";
$nombre_base_de_datos = "cai_db";
try{
	$base_de_datos = new PDO('mysql:host=localhost;dbname=cai_db;charset=utf8', 'root', '');
}catch(Exception $e){
	echo "Ocurrio algo con la base de datos" . $e->getMessage();
}
 ?>

<?php 
	include_once 'bdcai.php';
	$id = $_GET['id'];
	$sentencia = $base_de_datos -> prepare("DELETE FROM maestros WHERE id = ?");
	$resultado = $sentencia -> execute([$id]);
	if ($resultado) {
		# si se elimino correctamente
		header('Location: lista_maestros.php');
	}
 ?>
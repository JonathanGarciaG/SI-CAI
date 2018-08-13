<?php 
	include_once 'bdalumnos.php';
	$id = $_GET['id'];
	$nombre = $_POST['nombre'];
	$nombre2 = $_POST['nombre2'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];

	$sentencia = $base_de_datos -> prepare("UPDATE maestros SET Nombre = ?,Apellidos = ?,Telefono = ? ,Email = ? WHERE id = ?");
	$resultado = $sentencia -> execute([$nombre,$nombre2,$phone,$email,$id]);

	if ($resultado) {
		# Condiciona el resultado:
		# Si el resultado me devolvio un TRUE quiere decir que la insercion de datos fue hecha correctamente
		header('Location: lista_maestros.php');
	}else {
		# Si resultado fue FALSE la insercion de datos no fue hecha correctamente
		echo "<p>Error</p>";
	}

 ?>
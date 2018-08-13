<?php 
	include_once 'bdalumnos.php';
	$id = $_GET['id'];
	$nombre = $_POST['nombre'];
	$apellidos = $_POST['apellidos'];
	$matricula = $_POST['matricula'];
	$email = $_POST['email'];
	$grupo = $_POST['grupo'];
	$carrera = $_POST['carrera'];
	$telefono = $_POST['telefono'];

	$sentencia = $base_de_datos -> prepare("UPDATE alumnos SET nombre = ?,apellidos = ?,matricula = ? ,email = ?,grupo = ? ,carrera = ? ,telefono = ? WHERE id = ?");
	$resultado = $sentencia -> execute([$nombre,$apellidos,$matricula,$email,$grupo,$carrera,$telefono,$id]);

	if ($resultado) {
		# Condiciona el resultado:
		# Si el resultado me devolvio un TRUE quiere decir que la insercion de datos fue hecha correctamente
		header('Location: listaAlumnos.php');
	}else {
		# Si resultado fue FALSE la insercion de datos no fue hecha correctamente
		echo "<p>Error</p>";
	}

 ?>
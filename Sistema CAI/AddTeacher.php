<?php 

if (!isset($_POST["nombre"]) || !isset($_POST["nombre2"]) || !isset($_POST["email"])) exit();
 
	include_once "bdcai.php";
   $nombre = $_POST["nombre"];
   $apellidos = $_POST["nombre2"];
   $telefono = $_POST["phone"];
   $email = $_POST["email"];
   $nombre2 = $nombre;
   $apellidos2 = $apellidos;
   $teacher = 'Teacher';

   $sentencia = $base_de_datos->prepare("INSERT INTO `Maestros`(`Nombre`, `Apellido`, `Telefono`, `Email`) VALUES (?, ?, ?, ?);");
   $resultado = $sentencia->execute([$nombre, $apellidos, $telefono, $email]);



   $sentencia2 = $base_de_datos->prepare("INSERT INTO `usuarios`(`Usuario`, `contrasena`, `tipo`) VALUES (?, ?, ?);");
   $resultado2 = $sentencia2->execute([$nombre, $apellidos, $teacher]);



   if ($resultado == TRUE) {
   	echo "<b>Se han añadido nuevos registros a Maestros </b>";
   }else{
   	echo "Algo esta mal.";
   }

   if ($resultado2 == TRUE) {
      echo "<b>Se han añadido nuevos registros a Usuarios</b>";
   }else{
      echo "Algo esta mal.";
   }
   ?>

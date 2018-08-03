<?php 

if (!isset($_POST["matricula"]) || !isset($_POST["nombre"]) || !isset($_POST["apellidos"]) || !isset($_POST["nivel"]) || !isset($_POST["carrera"]) || !isset($_POST["grupo"]) || !isset($_POST["maestro"])) exit();
 
	include_once "bdcai.php";    
   $matricula = $_POST["matricula"];
   $nombre = $_POST["nombre"];
   $apellidos = $_POST["apellidos"];
   $nivel = $_POST["nivel"];
   $carrera = $_POST["carrera"];
   $grupo = $_POST["grupo"];
   $maestro = $_POST["maestro"];

   $sentencia = $base_de_datos->prepare("INSERT INTO `alumnos`(`Matricula`, `Nombre`, `Apellidos`, `Nivel`, `Carrera`, `Grupo`, `Maestro`) VALUES (?, ?, ?, ?, ?, ?, ?);");
   $resultado = $sentencia->execute([$matricula, $nombre, $apellidos, $nivel, $carrera, $grupo, $maestro]);


   if ($resultado == TRUE) {
   	echo "<b>Se han añadido nuevos registros</b>";
      header("Location: lista_alumnos.php");
   }else{
   	echo "Algo esta mal.";
   }
   ?>
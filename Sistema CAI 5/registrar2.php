<?php 

if (!isset($_POST["activity"]) || !isset($_POST["date"]) || !isset($_POST["time"]) || !isset($_POST["hours"])) exit();
 
	include_once "bdcai.php";
   $mat = $_POST["matricula"];
   $actividad = $_POST["activity"];
   $horas = $_POST["hours"];
   $fecha = $_POST["date"];
   $hora = $_POST["time"];

   $consulta = "SELECT * FROM alumnos WHERE Matricula = '$mat'"; 
   foreach ($base_de_datos ->query($consulta) as $row ) {
      $matric = $row['Matricula'];
      $nombre = $row['Nombre'];
      $apellidos = $row['Apellidos'];
      $nivel = $row['Nivel'];
      $maestro = $row['Maestro'];
      }

   $sentencia = $base_de_datos->prepare("INSERT INTO `registros`(`Matricula`, `Alumno`, `Maestro`, `Actividad`, `Nivel`, `Horas`)  VALUES ( ?, ?, ?, ?, ?, ?);");
   $resultado = $sentencia->execute([$mat, $nombre, $maestro, $actividad, $nivel, $horas]);


   if ($resultado == TRUE) {
   	echo "<b>Se han añadido nuevos registros</b>";
   }else{
   	echo "Algo esta mal.";
   }
   ?>
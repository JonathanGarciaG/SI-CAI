<?php 

# con una condicion se verifica si se encuentran los valores tomados con el metodo post
if (!isset($_POST["matricula"])) exit();
 
   # importamos el archivo bdcai.php que hace la conexion a la base de datos
	include_once "bdcai.php";
   $matricula = $_POST["matricula"];
   $consulta = "SELECT * FROM alumnos WHERE Matricula = '$matricula'"; 
   foreach ($base_de_datos ->query($consulta) as $row ) {
      $matric = $row['Matricula'];
      $nombre = $row['Nombre'];
      $apellidos = $row['Apellidos'];
      }

try{
   if ( ( $matricula == $matric ) ) {
      echo "<p>Correcto</p>";
      header("Location: Registro.php?nmatricula=$matric");
   }else {
      echo "<p>Error: Matricula no encontrada</p>";
   }
}catch(Exception $e){
   echo "Error: alumno no encontrado" . $e->getMessage();
}
   

   ?>
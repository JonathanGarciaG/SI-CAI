<?php 

# con una condicion se verifica si se encuentran los valores tomados con el metodo post
if (!isset($_POST["user"]) || !isset($_POST["password"])) exit();
 
   # importamos el archivo bdalumnos.php que hace la conexion a la base de datos
	include_once "bdcai.php";
   $user = $_POST["user"];
   $contra = $_POST["password"];
   $consulta = "SELECT * FROM usuarios WHERE Usuario = '$user' AND contrasena = '$contra'"; 
   foreach ($base_de_datos ->query($consulta) as $row ) {
      $nusuario = $row['Usuario'];
      $ncontrasena = $row['contrasena'];
      $tipo = $row['tipo'];
      }

try{
   if ( ( $user == $nusuario ) && ( $contra == $ncontrasena ) ) {
      if ( $tipo == "Administrador" ){
      echo "<p>Correcto</p>";
      header('Location: menu_admin.php');
   }else{
      header("Location: menu_maestro.php?nombre=$user");
   }
   }else {
      echo "<p>Error Usuario no encontrado</p>";
   }
}catch(Exception $e){
   echo "Error usuario no encontrado" . $e->getMessage();
}
   

   ?>
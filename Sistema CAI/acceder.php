<?php 

# con una condicion se verifica si se encuentran los valores tomados con el metodo post
if (!isset($_POST["user"]) || !isset($_POST["password"])) exit();
 
   # importamos el archivo bdalumnos.php que hace la conexion a la base de datos
	include_once "bdcai.php";
   $user = $_POST["user"];
   $contra = $_POST["password"];
   $consulta = "SELECT * FROM usuarios WHERE Nombre_usuario = '$user' AND contraseña = '$contra'"; 
   foreach ($base_de_datos ->query($consulta) as $row ) {
      $nusuario = $row['Nombre_usuario'];
      $ncontraseña = $row['contraseña'];
      $tipo = $row['tipo_usuario'];
      }

try{
   if ( ( $user == $nusuario ) && ( $contra == $ncontraseña ) ) {
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
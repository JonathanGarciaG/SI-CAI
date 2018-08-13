<!DOCTYPE html>
<html>
<head>
	<title>Student Info</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, intial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

<div class="container">
<h1>Sistema CAI</h1>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Menu</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="menu.html">Home <span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>

<?php 
include_once "bdcai.php";

$matricula = $_GET['matricula'];



$sentencia = "SELECT * FROM alumnos WHERE Matricula = ".$matricula;

   foreach ($base_de_datos ->query($sentencia) as $row ) {
    $nombre = $row['Nombre']." ".$row['Apellidos'];
    $teacher = $row['Maestro'];
    $grupo = $row['Grupo'];
    $carrera = $row['Carrera'];
    $nivel = $row['Nivel'];
   }

   $sentencia = "SELECT * FROM maestros WHERE Nombre = ".$teacher;

   foreach ($base_de_datos ->query($sentencia) as $row ) {
    $nteacher = $row['Nombre']." ".$row['Apellidos'];
   }

   $sentencia = "SELECT count(*) FROM registros WHERE Matricula = ".$matricula;
   
   foreach ($base_de_datos ->query($sentencia) as $row ) {
    $total = $row['count(*)'];
   }

   $sentencia = "SELECT count(*) FROM registros WHERE Matricula = ".$matricula." AND Actividad = 'Reading'";
   
   foreach ($base_de_datos ->query($sentencia) as $row ) {
    $read = $row['count(*)'];
   }

   $sentencia = "SELECT count(*) FROM registros WHERE Matricula = ".$matricula." AND Actividad = 'Writing'";
   
   foreach ($base_de_datos ->query($sentencia) as $row ) {
    $write = $row['count(*)'];
   }

   $sentencia = "SELECT count(*) FROM registros WHERE Matricula = ".$matricula." AND Actividad = 'Listening'";
   
   foreach ($base_de_datos ->query($sentencia) as $row ) {
    $listen = $row['count(*)'];
   }

   $sentencia = "SELECT count(*) FROM registros WHERE Matricula = ".$matricula." AND Actividad = 'PC'";
   
   foreach ($base_de_datos ->query($sentencia) as $row ) {
    $pc = $row['count(*)'];
   }
?>

<br>
<h1>Student</h1>
<br>

<h4>Name</h4>
<label><?php echo $nombre; ?></label>
<hr>
<h4>Group</h4>
<label><?php echo $grupo; ?></label>
<hr>
<h4>Level</h4>
<label><?php echo $nivel; ?></label>
<hr>
<h4>Career</h4>
<label><?php echo $carrera; ?></label>
<hr>
<h4>Teacher</h4>
<label><?php echo $teacher; ?></label>
<hr>
<h4>Activity Hours</h4>
<label>Reading: <?php echo $read; ?></label><br>
<label>Writing: <?php echo $write; ?></label><br>
<label>Listening: <?php echo $listen; ?></label><br>
<label>Other: <?php echo $pc; ?></label><br>
<label>Total: <?php echo $total; ?></label><br>
<hr>

<hr>

</div>

</body>
</html>
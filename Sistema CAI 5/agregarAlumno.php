<!DOCTYPE html>
<html>
<head>
	<title>Agregar Alumno</title>
	<meta charset="UTF-8" name="viewport" content="width=device-width, user-scalable=no, intial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!--se usa el css de bootstrap-->
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


<br>
<br>
<div class="container"><!--se utiliza la clase container para centrar el formulario-->
<form method="post" action="AddAlumno.php"><!--declaramos la llamada del metodo post para guardar los valores insertados en los input-->
    <!--se definen los label e input de el formulario-->
<h1> Agregar Nuevo Alumno </h1>
    <hr>
<div class="col-md-3">
    <label for="mat">Matricula:</label>
    <input name="matricula" type="matricula" class="form-control" requiered type="text" id="matricula" placeholder="Matricula"><br>
    <label for="nombre">Nombre:</label>
    <input name="nombre" type="nombre" class="form-control" requiered type="text" id="nombre" placeholder="Nombre Alumno"><br>
    <label for="apellidos">Apellidos:</label>
    <input name="apellidos" type="apellidos" class="form-control" requiered type="text" id="apellidos" placeholder="Apellido"><br>
    <label for="exampleInputEmail1">Nivel:</label>
    <input name="nivel" type="nivel" class="form-control" id="nivel" requiered type="text" placeholder="Enter Level"><br>
    <label for="carrera">Carrera:</label>
    <input name="carrera" type="carrera" class="form-control" id="carrera" requiered type="text" placeholder="Carrera"><br>
    <label for="grupo">Grupo:</label>
    <input name="grupo" type="grupo" class="form-control" id="grupo" requiered type="text"  placeholder="Grupo"><br>
    <label for="grupo">Maestro:</label>
    <select name="maestro">
        <!-- <option name="myoption1" value="myoption1">myoption1</option>-->
        <?php 
        include_once 'bdcai.php';
        $sentencia = "SELECT * FROM maestros ORDER BY id ASC";
        foreach ($base_de_datos->query($sentencia) as $row) {
          echo "<option name=".$row['Nombre']." value=".$row['Nombre'].">".$row['Nombre']." ".$row['Apellidos']."</option>";
        }
       ?>    
    </select>
    <br><br>
    </div>
<input type="submit" value="Registrar" class="btn btn-primary"><!--boton submit para registrar y ejecutar la accion de nuevoAlumno.php-->
</form>
</div>

</body>
</html>
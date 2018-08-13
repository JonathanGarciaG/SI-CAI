<!DOCTYPE html>
<html>
<head>
    <!--formularios para el registro de nuevos alumnos (8 campos)-->
	<title>Registro de Alumnos</title>
    <!--hojas de estilos bootstrap-->
	<meta charset="UTF-8" name="viewport" content="width=device-width, user-scalable=no, intial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<!--contenedor en donde se almacenan los formularios o inputs-->
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
  <h1>Register student&nbsp;&nbsp;&nbsp;&nbsp;<span class="badge badge-secondary"></span></h1>
<?php 
      include_once "bdcai.php";
      $matricula = $_GET["nmatricula"];
      $consulta = "SELECT * FROM alumnos WHERE Matricula = '$matricula'"; 
        foreach ($base_de_datos ->query($consulta) as $row ) {
      $matric = $row['Matricula'];
      $nombre = $row['Nombre'];
      $apellidos = $row['Apellidos'];
    }
       ?>

<br>
<br>
<!--metodo con accion archivo agregarAlumno.php, este se ejecuta al presionar el boton de Registrar-->
<form method="post" action="registrar2.php">
    <input name="matricula" id="matricula" type="text" readonly="readonly" value="<?php echo $matricula; ?>"> <h3><?php echo $nombre; ?>&nbsp;<?php echo $apellidos; ?></h3>
    <label for="actividad">Activity:</label>
    <br>
    <select id="activity" name="activity">
      <OPTION name="Listening" value="Listening">
        Listening
      </OPTION>
      <OPTION name="PC" value="PC">
        PC
      </OPTION>
      <OPTION name="Writing" value="Writting">
        Writting
      </OPTION>
      <OPTION name="Reading" value="Reading">
        Reading
      </OPTION>
    </select>
    <br>
    <!--<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Listening
  </button> 
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Writting</a>
    <a class="dropdown-item" href="#">PC</a>
    <a class="dropdown-item" href="#">Reading</a>
  </div>
</div>-->
<br><div class="col-md-2"> <input name="hours" type="number" class="form-control" requiered type="number" id="hours" placeholder="Hours"></div>

    <label for="fecha">Date:</label>
    <input name="date" type="date" class="form-control" id="date" requiered type="date" placeholder="date">
    <label for="hora">Time:</label>
    <input name="time" type="time" class="form-control" id="time" requiered type="time" placeholder="time">
    <br><br>
    <center>
       <!--boton para registrar al alumno-->
<input type="submit" value="Register" class="btn btn-primary">
</form>
</div></center>



</body>
</html>
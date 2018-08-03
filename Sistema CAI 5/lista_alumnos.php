<!DOCTYPE html>
<html>
<head>
	<title>Lista Alumnos</title>
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
</nav

<br>
<h1>Alumnos</h1>
<br>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Matricula</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Level</th>
      <th scope="col">Carrera</th>
      <th scope="col">Grupo</th>
      <th scope="col">Consult</th>
    </tr>
  </thead>
  <tbody>
    <?php 
        include_once 'bdcai.php';
        $sentencia = "SELECT * FROM alumnos ORDER BY id ASC";
        foreach ($base_de_datos->query($sentencia) as $row) {
          # Este ciclo barrera toda la tabla de la bd para mostrar los datos
          # Mostrara los datos registrados en la bd que se registraron
          echo "<tr><td>".$row['Matricula']."</td>";
          echo "<td>".$row['Nombre']."</td>";
          echo "<td>".$row['Apellidos']."</td>";
          echo "<td>".$row['Nivel']."</td>";
          echo "<td>".$row['Carrera']."</td>";
          echo "<td>".$row['Grupo']."</td>";
          echo "<td><a class='btn btn-primary' href='studentInfo.php?matricula=".$row['Matricula']."'>Consultar</a></td>";
        }
       ?>
  </tbody>
</table>

</div>

</body>
</html>
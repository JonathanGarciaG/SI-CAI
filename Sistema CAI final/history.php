<!DOCTYPE html>
<html>
<head>
	<title>History</title>
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

<br>
<h1>Registers History</h1>
<br>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">Matricula</th>
      <th scope="col">Teacher</th>
      <th scope="col">Activity</th>
      <th scope="col">Hours</th>
      <th scope="col">Level</th>
    </tr>
  </thead>
  <tbody>
    <?php 
        include_once 'bdcai.php';
        $sentencia = "SELECT * FROM registros ORDER BY id ASC";
        foreach ($base_de_datos->query($sentencia) as $row) {
          echo "<tr><td>".$row['id']."</td>";
          echo "<td>".$row['Alumno']."</td>";
          echo "<td>".$row['Maestro']."</td>";
          echo "<td>".$row['Actividad']." ".$row['Apellidos']."</td>";
          echo "<td>".$row['Nivel']."</td>";
          echo "<td>".$row['Horas']."</td>";
        }
       ?>
  </tbody>
</table>

</div>

</body>
</html>
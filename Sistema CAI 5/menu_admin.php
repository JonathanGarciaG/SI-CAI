<!DOCTYPE html>
<html>
<head>
	<title>Menu Admin</title>
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
<h1>Admin</h1>
<br>

<h4>Name</h4>
<label>Admin</label>
<hr>
<h4>Registers</h4>
<label><?php 
include_once "bdcai.php";
$consulta = "SELECT count(*) from registros";
foreach ($base_de_datos ->query($consulta) as $row ) {
      $cuenta = $row['count(*)'];
      }
echo $cuenta ?></label>
<hr>
<row>
<a class="btn btn-primary" href="#">Consult History</a>
<a class="btn btn-primary" href="agregarAlumno.php">Add Students</a>
<a class="btn btn-primary" href="agregarMaestro.html">Add Teacher</a>
</row>

</div>

</body>
</html>
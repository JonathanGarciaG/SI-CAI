<!DOCTYPE html>
<html>
<head>
	<title>Agregar Maestro</title>
	<meta charset="UTF-8" name="viewport" content="width=device-width, user-scalable=no, intial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!--se usa el css de bootstrap-->
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
 <?php 
        include_once 'bdcai.php';
        $id = $_POST["id"];
        $sentencia = "SELECT * FROM maestros WHERE id =".$id;?>

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
<form method="post" action="<?php echo 'actualizarDatosTeacher.php?id='.$id;?>"><!--declaramos la llamada del metodo post para guardar los valores insertados en los input-->
    <!--se definen los label e input de el formulario-->
<h1> Actualizar Teacher </h1>
    <hr>

  <?php
    foreach ($base_de_datos ->query($sentencia) as $row ) {?>
    <label for="nombre">Nombre:</label>
    <input name="nombre" class="form-control" requiered type="text" placeholder="Teacher name" value="<?php echo $row['Nombre'];?>"><br>
    <label for="apellido">Apellido:</label>
    <input name="nombre2" type="nombre2" class="form-control" requiered type="text" id="nombre2" placeholder="Last Name" value="<?php echo $row['Apellidos'];?>"><br>
    <label for="Phone">Telefono:</label>
    <input name="phone" type="phone" class="form-control" requiered type="text" id="phone" placeholder="Phone" value="<?php echo $row['Telefono'];?>"><br>
    <label for="Email">Email:</label>
    <input name="email" type="email" class="form-control" requiered type="text" id="email" placeholder="Email" value="<?php echo $row['Email'];?>"><br>
    <br>
    </form>
  <?php    
    }
  ?>
</form>

</body>
</html>
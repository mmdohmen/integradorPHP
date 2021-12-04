<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Codo a Codo - C2164</title>
  <!-- BOOTSTRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- archivo de estilos -->
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="container">
    
    <!-- barra de navegacion -------------------------------------------------------------------------------->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: rgb(70,70,70);">
      <div class="container-fluid">
        <a class="navbar-brand" href="" style="color:white"><img src="imagenes/codoacodo.png" alt="" height="50">Conf
          BsAs</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse flex-row-reverse" id="navbarSupportedContent">
          <div class="navbar-nav">
            <a class="nav-link" href="index.html" style="color:silver">La conferencia</a>
            <a class="nav-link" href="#" style="color:silver">Los oradores</a>
            <a class="nav-link" href="#" style="color:silver">El lugar y la fecha</a>
            <a class="nav-link" href="#" style="color:silver">Conviertete en orador</a>
            <a class="nav-link" href="#" style="color:white">Registrarse</a>
            <a class="nav-link" href="tickets.html" style="color:darkseagreen">Comprar tickets</a>
          </div>
        </div>
      </div>
    </nav>

    <!-- FORMULARIO de INGRESO de DATOS ------------------------------------------------------------- -->

    <form class="container" action="insertar.php" method="post">
      <br>

      <div class="row">
        <div class="col-6">
          <input type="text" class="form-control" placeholder="Nombre" name="nombre">
        </div>
        <div class="col-6">
          <input type="text" class="form-control" placeholder="Apellido" name="apellido">
        </div>
      </div>
      <br>

      <div class="row">
        <div class="col-6">
          <input type="text" class="form-control" placeholder="DNI" name="dni">
        </div>
        <div class="col-6">
          <input type="text" class="form-control" placeholder="telefono" name="telefono">
        </div>
      </div>
      <br>

      <div class="row">
        <div class="col-12">
          <input type="email" class="form-control" placeholder="Correo" name="correo">
        </div>
      </div>
      <br>

      <div class="row">
        <div class="col-12">
          <input type="text" class="form-control" placeholder="password" name="password">
        </div>
      </div>
      <br>

      <div class="row gap-2">
        <button type="reset" class="btn btn-success col">Borrar</button>
        <button type="submit" id="botonCalcular" class="btn btn-success col">Registrarse</button>
      </div>
      <br>

    </form>


    <!-- footer -------------------------------------------------------------------------------------------->
    <footer>
      <nav class="row justify-content-md-center" style="background-color:rgb(25, 16, 70);">
        <div class="col"></div>
        <div class="col">
          <a class="nav-link" href="#" style="color:white">Preguntas frecuentes</a>
        </div>
        <div class="col">
          <a class="nav-link" href="#" style="color:white">Contactanos</a>
        </div>
        <div class="col">
          <a class="nav-link" href="#" style="color:white">Prensa</a>
        </div>
        <div class="col">
          <a class="nav-link" href="#" style="color:white">Conferencias</a>
        </div>
        <div class="col">
          <a class="nav-link" href="#" style="color:white">Terminos y condiciones</a>
        </div>
        <div class="col">
          <a class="nav-link" href="#" style="color:white">Privacidad</a>
        </div>
        <div class="col">
          <a class="nav-link" href="#" style="color:white">Estudiantes</a>
        </div>
        <div class="col"></div>
      </nav>
    </footer>


    <!-- BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </div>
</body>

</html>
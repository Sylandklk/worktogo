<!doctype html>
<html lang="en">

<head>
  <title>Creador de servicios</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../css/csslogin.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <?php
  session_start(); // Inicia la sesión
  $mi_variable = $_SESSION['mi_variable']; // Obtiene el valor de la variable almacenada en la sesión
  ?>

  <nav class="navbar navbar-expand navbar-light bg-light">
      <div class="nav navbar-nav">
          <a class="btn btn-primary" href="../usuario/index.php">Volver <span class="sr-only">(current)</span></a> <br>
      </div>
  </nav>
  
  <div class="container-md">
    <section class="vh-100">
      <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-md-9 col-lg-6 col-xl-5">
            <img src="../imgs/aea.png" class="img-fluid" alt="Sample image">
          </div>
          <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">

            <? ?>
            <form name="iniciocrear" method="POST">


              <!-- Email input -->
              <div class="form-outline mb-4">
                <input type="text" id="form3Example3" class="form-control form-control-lg" name="vusuario"
                placeholder="Usuario administrador">
                <label class="form-label" for="form3Example3">Usuario administrador</label>
              </div>

              <!-- Password input -->
              <div class="form-outline mb-3">
                <input type="password" id="form3Example4" class="form-control form-control-lg" name="vcontra"
                  placeholder="Contraseña de administracion" required />
                <label class="form-label" for="form3Example4">contraseña</label>
              </div>

              <div class="d-flex justify-content-between align-items-center">
                <!-- Checkbox que no funciona -->
                <div class="form-check mb-0">
                 


                  <div class="text-center text-lg-start mt-4 pt-2">
                    <input type="submit" class="btn btn-primary btn-lg"
                      style="padding-left: 2.5rem; padding-right: 2.5rem;" name="btniniciar"></button>

                      <?php

        if (!empty($_POST["btniniciar"])) {
    $usuario = $_POST["vusuario"];
    $contraseña = $_POST["vcontra"];

                 if ($usuario == "admin123" && $contraseña == "root123") {
              // Redireccionar a otra página
                header("Location: interfaces/admin.php");
            exit;
             } else {
                    echo '<div class="bad">Los campos de administrador no son válidos</div>';
             }
}


?>


                  </div>

            </form>
          </div>
        </div>
      </div>

    </section>
  </div>

</body>

</html>
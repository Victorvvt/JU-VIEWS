<?php
session_start();
if (empty($_SESSION['id'])) {
  header("Location: http://localhost/proyectoPHP/app/inicio.php");
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="main.css">
  <title>Index</title>
</head>

<body id="principal" class="">
  <div id="carruseles" class="container-fluid ">
    <div class="row">
      <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <h1 id="title" class="navbar-brand"><i class="bi bi-play-circle-fill"></i> JuViews</h1>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Nav -->
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">

          <div class="navbar-nav ms-auto">
            <div class="dropdown-center">
              <button class="btn btn-success dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <?php echo "ADMINISTRADOR"; ?>
              </button>
              <a id="cerradosesion" href="inicio.php" class="dropdown-menu btn btn-primary text-center rounded-3 w-25">Cerrar sesion</a>
            </div>
            <a class="nav-link active" href="./peliculas/index.php">Películas</a>
            <a class="nav-link active" href="./series/index.php">Series</a>
          </div>

      </nav>
    </div>
  </div>
  <div class="container-fluid" style="height:100vh">
    <div class="row">
      <div id="cerrar-sesion" class="position-absolute col-11 d-flex justify-content-end">
        <a id="cerradosesion" href="inicio.php" class="d-none btn btn-success mx-3">Cerrar sesión</a>
      </div>
      <div class="col-lg-6 col-md-12">
        <div id="carouselPeliculas" class="mt-3 carousel slide ">
          <h3 class="text-white text-center">Películas</h3>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="imagenes/as_bestas.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="imagenes/creed.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="imagenes/megan.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="imagenes/el_peor_vecino_del_mundo.jpg" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselPeliculas" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselPeliculas" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
        </div>
      </div>
      <div class="col-lg-6 col-md-12">
        <div id="carouselSeries" class="mt-3 carousel slide ">
          <h3 class="text-white text-center">Series</h3>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="imagenes/chernobyl.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="imagenes/entrevias.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="imagenes/TheLastOfUs.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="imagenes/your_honor.jpg" class="d-block w-100" alt="...">
            </div>

          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselSeries" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselSeries" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>

    </div>
  </div>
  <hr class="bg-secondary mt-5">
  <div class="col-lg-12">
    <div id="icons" class="col-12 icons d-flex justify-content-around bg-secondary">
      <p style="font-size: 2rem;">Síguenos en redes sociales</p>
      <a href="https://www.instagram.com/"><i class="bi bi-instagram" style="font-size: 2rem;"></i></a>
      <a href="https://twitter.com/?lang=es"><i class="bi bi-twitter" style="font-size: 2rem;"></i></a>
      <a href="https://www.facebook.com/"><i class="bi bi-facebook" style="font-size: 2rem;"></i></a>
      <a href="https://www.google.com/intl/es/gmail/about/"><i class="bi bi-envelope-at" style="font-size: 2rem;"></i></a>

    </div>

    <p class="text-center bg-secondary border mt-4"><i class="bi bi-c-circle"></i> 2023 Derechos <a href="#" class="text-white">legales</a> </p>
  </div>



  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="./js/cerrar-sesion.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>
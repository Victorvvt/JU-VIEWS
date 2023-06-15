<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="stylesheet" href="main.css">
  <title>Index</title>
</head>

<body class="bg-dark">
  <div class="container-fluid">
    <div class="row g-4">
      <nav class="bg-dark navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container-fluid">
          <h1 id="title" class="navbar-brand"><i class="bi bi-play-circle-fill"></i> JuViews</h1>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <!-- Nav -->
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">

              <a href="../app/inicio_sesion/login.php" class="nav-link  btn btn-primary m-2 p-2">LogIn</a>
              <a href="../app/inicio_sesion/signin.php" class="nav-link active btn btn-primary m-2 p-2">Sign In</a>

            </div>
          </div>
        </div>
      </nav>
    </div>
  </div>


  <!-- Header -->
  <div class="container-fluid ">
    <div class="row ">
      <div id="header" class="mb-2 col-lg-12 d-grid ">
        <div id="header-suscribete" class="text-center">
          <div id="header-suscribete-title" class="p-2">
            <h2 style="margin-bottom: 10px;" class="text-white">AS BESTAS </h3>
              <h3 class="text-white">Pelicula del mes </h3>
          </div>
          <div id="header-suscribete-description">
            <h3>Entra y encuentra el contenido que mas te guste </h3>
          </div>
          <a id="entrar" href="../app/inicio_sesion/login.php" class=" btn btn-primary mt-2 p-2">ENTRAR</a>

        </div>
      </div>
    </div>
  </div>


  <div class="container-fluid mt-2">
    <div id="icons" class="col-12 icons d-flex justify-content-around bg-secondary">
      <p style="font-size: 2rem;">Siguenos en redes sociales</p>
      <a href="https://www.instagram.com/"><i class="bi bi-instagram" style="font-size: 2rem;"></i></a>
      <a href="https://twitter.com/?lang=es"><i class="bi bi-twitter" style="font-size: 2rem;"></i></a>
      <a href="https://www.facebook.com/"><i class="bi bi-facebook" style="font-size: 2rem;"></i></a>
      <a href="https://www.google.com/intl/es/gmail/about/"><i class="bi bi-envelope-at" style="font-size: 2rem;"></i></a>
    </div>
  </div>


  <p class="text-center bg-secondary border mt-4 "><i class="bi bi-c-circle"></i> 2023 Derechos <a href="#" class="text-white">legales</a> </p>

  <script src="../app_peliculas.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>
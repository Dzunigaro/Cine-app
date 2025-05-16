<?php
//inspeccionar variables
//var_dump($_SERVER["PHP_SELF"])
$url = basename($_SERVER["PHP_SELF"]);
//var_dump($url);
$url = explode(".", $url);
//var_dump($url[0]);
?>
<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title>CineApp | Bienvenidos</title>
  <meta name="description" content="Página principal de cineapp">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta property="og:title" content="CineApp">
  <meta property="og:type" content="Pagina Principal de CineApp">
  <meta property="og:url" content="http:www.patito.com">
  <meta property="og:image" content="https://www.crhoy.com/wp-content/uploads/2023/01/IMG_5920.jpg">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">

  <!--Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/<?php echo $url[0] . ".css" ?>">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

  <meta name="theme-color" content="#fafafa">
</head>

<body>
  <header>
    <!-- Menu -->
    <nav class="navbar navbar-expand-lg bg-secundario">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
          <img src="icon.png" alt="Logo de cineapp" width="50">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="peliculas.php">Peliculas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="cartelera.php">Cartelera</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="acerca.php">Acerca</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contactenos.php">Contactenos</a>
            </li>

          </ul>
          <form action="cartelera.php" class="d-flex" role="search">
            <input name="p" class="form-control me-2" type="search" placeholder="Buscar Película" aria-label="Search">
            <button class="btn btn-negro" type="submit">Buscar</button>
          </form>

        </div>
      </div>
    </nav>
  </header>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bootstrap 4 Website Example</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="style.css" />
  <style>

  </style>
</head>

<body>
  <!-- <div class="jumbotron text-center" style="margin-bottom:0">
  <img src="img/logo.webp" alt="" width="180px">
  <p>El Arte de vestir Bien</p> 
</div> -->
  <nav class="navbar navbar-expand-sm bg-primary navbar-primary">
    <a class="navbar-brand" href="#">Inicio</a>
    <button
      class="navbar-toggler"
      type="button"
      data-toggle="collapse"
      data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">Nosotros</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Productos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contactos.php">Contactos</a>
        </li>
      </ul>
    </div>
  </nav>
  <?php
  include('carrucel.php');
  ?>
  <main class="container mt-3">
    <h2>Nuestros Productos</h2>
    <div class="d-flex justify-content-center bg-light mb-3 flex-wrap p-3">

      <div class="rounded-circle p-3">
        <img class="rounded-circle"src="img/prod1.jpg" alt="Cinque Terre" width="304">
        <p>Ver Articulo</p>
      </div>
      <div class="rounded-circle p-3">
        <img class="rounded-circle"src="img/prod1.jpg" alt="Cinque Terre" width="304">
        <p>Ver Articulo</p>
      </div>
      <div class="rounded-circle p-3">
        <img class="rounded-circle"src="img/prod1.jpg" alt="Cinque Terre" width="304">
        <p>Ver Articulo</p>
      </div>
      <div class="rounded-circle p-3">
        <img class="rounded-circle"src="img/prod1.jpg" alt="Cinque Terre" width="304">
        <p>Ver Articulo</p>
      </div>
      <div class="rounded-circle p-3">
        <img class="rounded-circle"src="img/prod1.jpg" alt="Cinque Terre" width="304">
        <p>Ver Articulo</p>
      </div>
      <div class="p-3">
        <img class="rounded-circle" src="img/prod1.jpg" alt="Cinque Terre" width="304">
        <p>Ver Articulo</p>
      </div>
    </div>
  </main>
  <div class="jumbotron text-center bg-primary" style="margin-bottom: 0">
    <p>Derechos Reservado de Autor - 2024</p>
  </div>
</body>

</html>
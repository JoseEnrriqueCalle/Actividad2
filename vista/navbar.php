<style>
        /* Estilos adicionales */
        body {
            background-color: #f8f7fa; /* Fondo gris claro */
            color: #343a40; /* Texto oscuro */
        }
        .navbar-top {
            background-color: #343a40; /* Fondo gris oscuro */
            border-bottom: 1px solid #2b2e31; /* Borde inferior oscuro */
        }
        .navbar-top .navbar-brand,
        .navbar-top .navbar-nav .nav-link {
            color: white; /* Texto blanco */
        }
        .navbar-bottom {
            background-color: white; /* Fondo blanco */
            border-top: 1px solid #ddd; /* Borde superior gris claro */
        }
        .navbar-bottom .navbar-brand,
        .navbar-bottom .navbar-nav .nav-link {
            color: #dc3545; /* Texto rojo */
            font-weight: 400; /* Letras más delgadas */
        }
        .navbar-bottom .nav-item {
            padding: 0 15px; /* Espaciado entre elementos */
        }
        .jumbotron {
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            padding: 4rem 2rem;
            border-radius: 0.5rem;
            margin-top: 20px;
        }
        .jumbotron h1 {
            font-size: 3.5rem;
        }
        .jumbotron p {
            font-size: 1.5rem;
        }
        .btn-primary {
            background-color: #dc3545;
            border-color: #dc3545;
        }
        .btn-primary:hover {
            background-color: #c82333;
            border-color: #c82333;
        }
        .carousel-item img {
            height: 400px;
            object-fit: cover;
        }
        .carousel-caption {
            background-color: rgba(0, 0, 0, 0.5);
            padding: 2rem;
            border-radius: 0.5rem;
        }
        .carousel-caption h3 {
            font-size: 2.5rem;
        }
        .carousel-caption p {
            font-size: 1.25rem;
        }
    </style>




<nav class="navbar navbar-expand-lg navbar-top">
  <div class="container">
    <a class="navbar-brand" href="Actividad2/index.php">CRUD PELICULAS</a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="Actividad2/index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="peliculas_listar.php">listar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pelicula_vista_actualizar.php">agregar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="buscar_peliculas.php">buscar peliculas</a>
        </li>
        <li class="nav-item">
          <a class="btn btn-outline-light me-2" href="#">Iniciar Sesión</a>
        </li>
        <li class="nav-item">
          <a class="btn btn-danger" href="#">Registrarse</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<nav class="navbar navbar-expand-lg navbar-bottom">
  <div class="container">
    <a class="navbar-brand" href="#">contacto</a>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link" href="#">Películas</a>
        <a class="nav-link" href="#">aaaa</a>
        <a class="nav-link" href="#">Promociones</a>
        <a class="nav-link" href="#">Confitería</a>
      </div>
    </div>
  </div>
</nav>


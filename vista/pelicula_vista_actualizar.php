<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video tienda - Películas</title>
    <link rel="stylesheet" href="../recursos/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
</head>
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
    <a class="navbar-brand" href="../index.php">CRUD PELICULAS</a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="peliculas_listar.php">listar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pelicula_vista_actualizar.php">agregar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="buscar_peliculas.php">buscar</a>
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
    <a class="navbar-brand" href="#">Cinemark</a>
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


<body>
    <div class="container py-4">
        <div class="card">
            <div class="card-header">
                <h3>Nueva película</h3>
            </div>

            <div class="card-body">
                <div class="card-title"></div>
                <form method="post" action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>">

                    <div class="form-group">
                        <label for="titulo">Título</label>
                        <input type="text" name="titulo" id="titulo" class="form-control" 
                            value="<?= (isset($titulo) && !$frm_enviado) ? $titulo : '' ?>">
                    </div>

                    <div class="form-group">
                        <label>Género</label>
                        <div class="form-group">
                            <div class="form-check form-check-inline">
                                <input type="checkbox" name="genero[]" id="genAccion" class="form-check-input" value="Acción"
                                    <?= (isset($genero) && !$frm_enviado && strpos($genero, 'Acción') !== false) ? 'checked' : '' ?> >
                                <label for="genAccion" class="form-check-label">Acción</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="checkbox" name="genero[]" id="genFiccion" class="form-check-input" value="Ciencia ficción"
                                    <?= (isset($genero) && !$frm_enviado && strpos($genero, 'Ciencia ficción') !== false) ? 'checked' : '' ?> >
                                <label for="genFiccion" class="form-check-label">Ciencia ficción</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="checkbox" name="genero[]" id="genTerror" class="form-check-input" value="Terror"
                                    <?= (isset($genero) && !$frm_enviado && strpos($genero, 'Terror') !== false) ? 'checked' : '' ?> >
                                <label for="genTerror" class="form-check-label">Terror</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="checkbox" name="genero[]" id="genAnimacion" class="form-check-input" value="Animación"
                                    <?= (isset($genero) && !$frm_enviado && strpos($genero, 'Animación') !== false) ? 'checked' : '' ?> >
                                <label for="genAnimacion" class="form-check-label">Animación</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="checkbox" name="genero[]" id="genComedia" class="form-check-input" value="Comedia"
                                    <?= (isset($genero) && !$frm_enviado && strpos($genero, 'Comedia') !== false) ? 'checked' : '' ?> >
                                <label for="genComedia" class="form-check-label">Comedia</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="checkbox" name="genero[]" id="genDrama" class="form-check-input" value="Drama"
                                    <?= (isset($genero) && !$frm_enviado && strpos($genero, 'Drama') !== false) ? 'checked' : '' ?> >
                                <label for="genDrama" class="form-check-label">Drama</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="checkbox" name="genero[]" id="genMusical" class="form-check-input" value="Musical"
                                <?= (isset($genero) && !$frm_enviado && strpos($genero, 'Musical') !== false) ? 'checked' : '' ?> >
                                <label for="genMusical" class="form-check-label">Musical</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="año">Año</label>
                        <input type="number" name="año" id="año" class="form-control" 
                            value="<?= (isset($año) && !$frm_enviado) ? $año : '' ?>">
                    </div>

                    <div class="form-group">
                        <div class="form-check">
                            <input type="checkbox" name="disponible" id="disponible" class="form-check-input"
                                <?= (isset($disponible) && !$frm_enviado && $disponible == true) ? 'checked' : '' ?> >
                            <label for="disponible" class="form-check-label">Disponible</label>
                        </div>
                    </div>

                    <input type="hidden" name="id" id="id" value="<?= (isset($id) && !$frm_enviado) ? $id : '' ?>">

                    <?php if (!empty($errores)) : ?>
                        <div class="alert alert-danger border border-danger">
                            <?= $errores ?>
                        </div>
                    <?php endif; ?>

                    <div class="form-group">
                        <input type="submit" value="Enviar" name="btn_enviar" class="btn btn-info">
                    </div>

                </form>
            </div>
        </div>
    </div>
</body>

</html>
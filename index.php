<?php
include 'vista/header.php';
?>


<div class="container my-5">
    <div class="jumbotron">
        <h1 class="display-2">¡Bienvenido al Gestor de Películas!</h1>
        <p class="lead">Descubre y gestiona tus películas favoritas de una manera fácil y elegante.</p>
        <a class="btn btn-primary btn-lg" href="#" role="button">Explorar</a>
    </div>
</div>

<div class="container">
    <h2 class="mb-4">Películas Destacadas</h2>
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="https://i.imgur.com/7ci8nXn.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h3>Película 1</h3>
            <p>Descripción de la película 1.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="https://i.imgur.com/1OsmFZP.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h3>Película 2</h3>
            <p>Descripción de la película 2.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="https://i.imgur.com/rn64f9W.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h3>Película 3</h3>
            <p>Descripción de la película 3.</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Siguiente</span>
      </button>
    </div>
</div>

<?php 

include 'vista/footer.php';
?>
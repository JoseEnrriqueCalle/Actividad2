<?php
require_once '../control/PeliculaControl.php';
$peliculaControl = new PeliculaControl();

// Obtener los parámetros de búsqueda del formulario
$titulo = isset($_GET['titulo']) ? $_GET['titulo'] : '';
$genero = isset($_GET['genero']) ? $_GET['genero'] : '';
$año = isset($_GET['año']) ? $_GET['año'] : '';

// Realizar la búsqueda de películas con los criterios proporcionados
$peliculas = $peliculaControl->buscarPorCriterios($titulo, $genero, $año);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados de búsqueda</title>
    <link rel="stylesheet" href="../recursos/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <?php include 'header.php'; ?>
</head>
<body>
    <style>
        .container {
            margin-top: 0px;
        }
        .form-row {
            justify-content: center;
            margin-bottom: 30px;
        }
    </style>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <form id="formBuscarPeliculas" action="buscar_peliculas.php" method="GET">
                    <div class="form-row">
                        <div class="col">
                            <input type="text" class="form-control" name="titulo" id="titulo" placeholder="Buscar por título" value="<?= $titulo ?>">
                        </div>
                        <div class="col">
                            <button type="submit" class="btn btn-primary">Buscar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        
        <div class="container py-4">
            <h3>Resultados de búsqueda</h3>
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Título</th>
                                <th>Género</th>
                                <th>Año</th>
                                <!-- Agrega más columnas según tus necesidades -->
                            </tr>
                        </thead>
                        <tbody id="resultadosTabla">
                            <?php foreach ($peliculas as $pelicula) : ?>
                                <tr>
                                    <td><?= $pelicula->titulo ?></td>
                                    <td><?= $pelicula->genero ?></td>
                                    <td><?= $pelicula->año ?></td>
                                    <td>
                                    <a onclick="return confirm('Está seguro de eliminar la película ?')"
                                    class="btn btn-danger btn-sm"
                                    href="pelicula_eliminar.php?id=<?= $peli->id ?>">eliminar</a>
                <a href="pelicula_actualizar.php?id=<?= $pelicula->id ?>" class="btn btn-primary">Modificar</a>
            </td>
                                    <!-- Agrega más columnas según tus necesidades -->
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var formBuscarPeliculas = document.getElementById('formBuscarPeliculas');
            var inputTitulo = document.getElementById('titulo');

            inputTitulo.addEventListener('input', function() {
                var titulo = inputTitulo.value.trim().toLowerCase();
                var resultadosTabla = document.getElementById('resultadosTabla');
                resultadosTabla.innerHTML = '';

                <?php foreach ($peliculas as $pelicula) : ?>
                    if ("<?= strtolower($pelicula->titulo) ?>".includes(titulo)) {
                        var tr = document.createElement('tr');
                        tr.innerHTML = `
                            <td><?= $pelicula->titulo ?></td>
                            <td><?= $pelicula->genero ?></td>
                            <td><?= $pelicula->año ?></td>
                        `;
                        resultadosTabla.appendChild(tr);
                    }
                <?php endforeach; ?>
            });
        });
    </script>
</body>
</html>

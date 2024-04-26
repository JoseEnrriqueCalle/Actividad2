<?php include 'navbar.php';?>



<?php
$errores = '';
$frm_enviado = false;

if (isset($_POST['btn_enviar'])) {
    // Recoger los valores enviados
    $id = $_POST['id'];
    $titulo = $_POST['titulo'];
    $genero = (isset($_POST['genero'])) ? implode(', ', $_POST['genero']) : '';
    $año = $_POST['año'];
    $disponible = (isset($_POST['disponible'])) ? true : false;

    // Validar el título
    if (!empty($titulo)) {
        $titulo = trim($titulo);
        $titulo = filter_var($titulo, FILTER_SANITIZE_STRING);
    } else {
        $errores .= 'Ingresar un título de la película<br/>';
    }

    // Validar género, por lo menos elegir uno
    if ($genero == '') {
        $errores .= 'Elegir por lo menos un género<br/>';
    }

    // Validar año
    if (!empty($año)) {
        $año = trim($año);
        $año = filter_var($año, FILTER_SANITIZE_NUMBER_INT);
        $actual = date('Y');
        if ($año < 1901 || $año > $actual) {
            $errores .= 'El año no es válido<br/>';
        }
    } else {
        $errores .= 'Debe digitar el año de creación de película<br/>';
    }

    // Enviar/guardar si no hay errores
    if (!$errores) {
        require_once '../modelo/Pelicula.php';
        require_once '../control/PeliculaControl.php';

        $pelicula = new Pelicula($id, $titulo, $genero, $año, $disponible);

        $peliculaControl = new PeliculaControl();

        if (trim($id) == '') {
            $peliculaControl->agregar($pelicula);
        } else {
            // Antes de modificar, verifica si se encontró la película
            if ($peliculaControl->buscarPorId($id)) {
                // Si la película existe, intenta modificarla
                if ($peliculaControl->modificar($pelicula)) {
                    // Redirige solo si se modificó correctamente
                    header('location: peliculas_listar.php');
                    exit(); // Asegura que el script se detenga después de la redirección
                } else {
                    $errores .= 'Error al modificar la película<br/>';
                }
            } else {
                $errores .= 'No se encontró la película para modificar<br/>';
            }
        }
    }
} else if (isset($_GET['id']) && !isset($_POST['btn_enviar'])) {
    // Si se está intentando modificar una película, obtén los datos de la película
    $id = $_GET['id'];

    require_once '../control/PeliculaControl.php';
    $peliculaControl = new PeliculaControl();

    $pelicula = $peliculaControl->buscarPorId($id);

    // Verifica si se encontró la película antes de asignar los valores
    if ($pelicula) {
        $id = $pelicula->id;
        $titulo = $pelicula->titulo;
        $genero = $pelicula->genero;
        $año = $pelicula->año;
        $disponible = $pelicula->disponible;
    } else {
        $errores .= 'No se encontró la película para modificar<br/>';
    }
}

// Si hay errores, muéstralos en la vista
if (!empty($errores)) {
    echo '<div class="alert alert-danger">' . $errores . '</div>';
}

// Incluir la vista para mostrar el formulario de modificación
require_once 'pelicula_vista_actualizar.php';
?>
    <?php 

include 'footer.php';
?>
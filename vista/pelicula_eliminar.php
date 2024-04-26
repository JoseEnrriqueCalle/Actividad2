<?php

$id = $_GET['id'];

require_once '../control/PeliculaControl.php';
$peliculaControl = new PeliculaControl();

$peliculaControl->eliminar($id);

// Redirige de vuelta a la página desde la que se realizó la acción
if(isset($_SERVER['HTTP_REFERER'])) {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
} else {
    // Si no hay una página de referencia, redirige a una página predeterminada
    header('Location: peliculas_listar.php');
}

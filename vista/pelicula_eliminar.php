<?php

$id = $_GET['id'];

require_once '../control/PeliculaControl.php';
$peliculaControl = new PeliculaControl();

$peliculaControl->eliminar($id);

header('location: peliculas_listar.php');
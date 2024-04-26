<?php include 'header.php'?>

<?php

$id = $_GET['id'];

require_once '../control/PeliculaControl.php';
$peliculaControl = new PeliculaControl();

$pelicula = $peliculaControl->buscarPorId($id);

require_once 'pelicula_vista_consultar.php';
?>
<?php 
include 'footer.php'?>
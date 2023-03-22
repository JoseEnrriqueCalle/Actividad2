<?php

class Pelicula {
    private $id;
    private $titulo;
    private $genero;
    private $año;
    private $disponible;

    public function __construct($id, $titulo, $genero, $año, $disponible) {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->genero = $genero;
        $this->año = $año;
        $this->disponible = $disponible;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function getGenero() {
        return $this->genero;
    }

    public function getAño() {
        return $this->año;
    }

    public function getDisponible() {
        return $this->disponible;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function setGenero($genero) {
        $this->genero = $genero;
    }

    public function setAño($año) {
        $this->año = $año;
    }

    public function setDisponible($disponible) {
        $this->disponible = $disponible;
    }

    public function __toString() {
        return 'Película: ' . $this->titulo . ', ' . $this->genero . ', ' . $this->año;
    }

}
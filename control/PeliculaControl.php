<?php

require_once '../modelo/Pelicula.php';

class PeliculaControl {

    public function __construct() {
        require_once '../conexion/Db.php';
        try {
            $this->cnx = Db::conectar();
        }
        catch (PDOException $ex) {
            die($ex->getMessage());
        }
    }

    // buscar/obtener TODOS los registros/pelicula de la base de datos
    public function buscarTodos() {
        try {
            $sql = "select * from pelicula";
            $conexion = $this->cnx;
            $prep = $conexion->prepare($sql); // $prep = $this->cnx->prepare($sql);
            $prep->execute();
            $peliculas = $prep->fetchAll(PDO::FETCH_OBJ);
            // var_dump($peliculas);
            // die('Parando un momento...');
        }
        catch (PDOException $ex) {
            die($ex->getMessage());
        }
        return $peliculas;      
    } // fin del método buscarTodos()

    // insertrar en la tabla pelicula un nuevo registro
    public function agregar($pelicula) {
        try {
            $sql = 'insert into pelicula (titulo, genero, año, disponible) values (?, ?, ?, ?)';
            $conexion = $this->cnx;
            $prep = $conexion->prepare($sql);
            $prep->execute(array(
                $pelicula->getTitulo(),
                $pelicula->getGenero(),
                $pelicula->getAño(),
                $pelicula->getDisponible()
            ));
        }
        catch (PDOException $ex) {
            die($ex->getMessage());
        }        
    } // fin del método agregar

    // obtener un película por su ID
    public function buscarPorId($id) {
        try {
            $sql = 'select * from pelicula where id = ?';
            $conexion = $this->cnx;
            $prep = $conexion->prepare($sql);
            $prep->execute(array($id));
            $pelicula = $prep->fetch(PDO::FETCH_OBJ);
        }
        catch (PDOException $ex) {
            die($ex->getMessage());
        }
        return $pelicula;       
    } // fin del método buscarPorId

    // eliminar un registro de la tabla pelicula por su ID
    public function eliminar($id) {
        try {
            $sql = "delete from pelicula where id = ?";
            $prep = $this->cnx->prepare($sql);
            $prep->execute([$id]);
        }
        catch (PDOException $ex) {
            die($ex->getMessage());
        }        
    } // fin del método eliminar

    // modificar/cambiar los datos de una película
    public function modificar($pelicula) {
        try {
            $sql = "update pelicula set titulo = ?, genero = ?, año = ?, disponible = ? where id = ?";
            $prep = $this->cnx->prepare($sql);
            $prep->execute(array(
                $pelicula->getTitulo(),
                $pelicula->getGenero(),
                $pelicula->getAño(),
                $pelicula->getDisponible(),
                $pelicula->getId()              
            ));
            return true;
        }
        catch (PDOException $ex) {
            // die($ex->getMessage());
            return false;
        }         
    } // fin del método modificar

    public function buscarPorCriterios($titulo, $genero, $año) {
        $sql = "SELECT * FROM pelicula WHERE 1";
    
        // Aplicar filtros según los criterios proporcionados
        if (!empty($titulo)) {
            $sql .= " AND titulo LIKE '%$titulo%'";
        }
        if (!empty($genero)) {
            $sql .= " AND genero = '$genero'";
        }
        if (!empty($año)) {
            $sql .= " AND año = $año";
        }
    
        // Ejecutar la consulta
        try {
            $prep = $this->cnx->prepare($sql);
            $prep->execute();
            $peliculas = $prep->fetchAll(PDO::FETCH_OBJ);
            return $peliculas;
        } catch (PDOException $ex) {
            die($ex->getMessage());
        }
    }
    






}
<?php

class Db {
    public static function conectar() {
        $pdo = new PDO('mysql:host=mysql;dbname=videotienda;charset=utf8','root','root');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }
}
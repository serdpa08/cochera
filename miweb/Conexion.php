<?php


class Conexion
{
    private $conexion = null;
    public function __construct(){}

    public function conectar(){
        try{
            $this->conexion = new PDO('mysql:dbname=cochera;host=miservicio_mysql', 'miusuario', 'mipassword');
            $this->conexion->exec("set names utf8");
            echo "Conexion realizada";
        }catch (PDOException $e){
            echo "Error".$e->getMessage();
        }

        return $this->conexion;
    }


}

$conectar= new Conexion();
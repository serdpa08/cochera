<?php

require_once ("Conexion.php");
require_once ("Cliente.php");
class CrudClientes
{
    public function __construct()
    {
    }

    public function registro(){
        $conexion= (new Conexion())->conectar();
        $parametros = array("codigo"=> null);

        if (isset($_POST['nombre']) && !empty($_POST['nombre'])){
            $parametros['nombre']= $_POST['nombre'];
        }
        else{
            echo "El nombre viene vacío";
        }
        if (isset($_POST['sexo']) && !empty($_POST['sexo']) && ($_POST['sexo'] == 'M' || $_POST['sexo'] == 'H')){
            $parametros['sexo']= $_POST['sexo'];
        }
        else{
            echo "El sexo viene vacío";
        }
        if (isset($_POST['edad']) && !empty($_POST['edad'])){

            $parametros['edad']= intval($_POST['edad']);
        }
        else{
            echo "La edad viene vacía";
        }
        if (isset($_POST['deuda']) && !empty($_POST['deuda'])){
            $parametros['deuda']= intval($_POST['deuda']);
        }
        else{
            echo "La deuda viene vacía";
        }
        echo $parametros['nombre'].$parametros['sexo'].$parametros['edad'].$parametros['deuda']."<br>";

        $pdo = $conexion->prepare("INSERT INTO clientes VALUES (:codigo,:nombre, :sexo, :edad, :deuda)");
        $pdo->execute($parametros);
        echo $pdo->rowCount();


    }
}

$registrar = new CrudClientes();
$registrar->registro();

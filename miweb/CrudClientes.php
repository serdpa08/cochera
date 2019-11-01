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

    public function buscar($codigo){

        $conexion = (new Conexion())->conectar();
        $parametros = array(':codigo'=> $codigo);

        $pdo= $conexion->prepare("SELECT * FROM clientes WHERE codigo=:codigo");
        $pdo->execute($parametros);

        if ($pdo->rowCount() == 0){
            return null;
        }
        $row = $pdo->fetch(PDO::FETCH_ASSOC);
        $cliente = new Cliente($row['codigo'], $row['nombre'], $row['sexo'], $row['edad'], $row['deuda'] );

        return $cliente;
    }

}
$accion = new CrudClientes();
if (isset($_POST['agregar'])){

    $accion->registro();
}

if (isset($_POST['buscar'])){
    $accion->buscar($_POST['codigo']);
}


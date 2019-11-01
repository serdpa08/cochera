<?
    require_once ("constantes.php");
?>

<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<form method="post" action= "CrudClientes.php?">
    <input type="hidden" name="operacion" value="<? echo OPERACIONES['AGREGAR']; ?>">
    <label>Nombre</label>
    <input type="text" name="nombre"><br>
    <label>Sexo</label>
    <input type="text" name="sexo"><br>
    <label>Edad</label>
    <input type="text" name="edad"><br>
    <label>Deuda</label>
    <input type="text" name="deuda"><br>
    <input type="submit" value="Grabar">
</form>
</body>
</html>

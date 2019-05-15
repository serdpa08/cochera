
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/style.css">
	<title>warhammer 40000</title>
</head>
<body>

<div id="page_wrapper">
	
<header>
    <img  src="imagenes/warhammer-40k-logo.png">
</header>



    <?php

$pdo = null;
try {
    $pdo = new PDO('mysql:dbname=nombre;host=miservicio_mysql', 'miusuario', 'mipassword');
} catch (PDOException $e) {
    echo 'Falló la conexión: ' . $e->getMessage();
}
$stmt = $pdo->query('SELECT * FROM `usuarios`');
while ($row = $stmt->fetch()) {
    printf("%s, %s<br />", $row['apellidos'], $row['nombre']);
}

?>

<form id="formulario" method="get">
    <div id="ejercitos">
    <label>EJERCITOS </label><br>
    <select class="ejercitos">
        <option>Elfos</option>
        <option>Humanos</option>
        <option>Robots</option>
    </select>
    </div>

    <div id="facciones">
    <label>FACCIONES</label><br>
    <select class="facciones">
        <option>Elfos</option>
        <option>Humanos</option>
        <option>Robots</option>
    </select>
    </div>

    <div id="bandos">
    <label >BANDOS </label><br>
    <select class="bandos">
        <option>Elfos</option>
        <option>Humanos</option>
        <option>Robots</option>
    </select>
    </div>
    <div class="enviar_wrapper">
    <div class="enviar">
        
        <input type="submit" name="ENVIAR">
    </div>
</div>

	
</form>
</div>
 <footer class="footer">
     <p>@copyright Buitre & CO.</p>
 </footer>   

</body>
</html>

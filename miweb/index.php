
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
    <nav>
    	<ul>
    		<li><a href="index.php" style="text-decoration: none; float: left; padding: 0px;"><img src="imagenes/icono-home.png" style="width: 20px; height: 20px; "></a></li>
    		<li><a href="caos.php">CHAOS</a></li>
    		<li><a href="imperium.php">IMPERIUM</a></li>
    		<li><a href="xeros.php">XENOS</a></li>

            <span>
            <li><input type="text" name="nombre" placeholder="usuario"></li>
            <li><input type="password" name="password" placeholder="contraseña"></li>
            <li><button type="submit" id="usuario">log in</button></li>
            <li><a href="registroUsuarios.php">Registrarse</a></li>

            </span>
    	</ul>
    </nav>
</header>



    <?php
    /*

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
*/
?>
	
	<div class="image_wrapper">
	<a href="caos.php">
    <div class="ejercitos" id="ejercitos">
    <h2 style="color: black; opacity: 0.7; background: white; ">CHAOS </h2><br>
    
    
    </div>
    </a>
    <a href="imperium.php">
    <div class="facciones" id="facciones">
    <h2 style="color: black; opacity: 0.7; background: white; ">IMPERIUM</h2><br>

    
    </div>
    </a>
    <a href="xeros.php">
    <div class="bandos" id="bandos">
    <h2 style="color: black; opacity: 0.7; background: white; ">XENOS </h2><br>
    
    </div>
    </a>
</div>


	

</div>
 <footer class="footer">
     <p>@copyright Buitre & CO.</p>
 </footer>   

</body>
</html>

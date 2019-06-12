<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<



	<header>
    
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

            </span>
    	</ul>
    </nav>
</header>
<br><br><br>



<form onsubmit="hola()">
	<fieldset>
	
	<h3>Selecciona el ROL:</h3>

	<select name="Rol">
		<option value="Cuartel">Cuartel General</option>
		<option value="tropas">Tropas</option>
		<option value="Elite">Elite</option>
		<option value="apoyo">Apoyo Pesado</option>
		<option value="ataque">Ataque rápido</option>
	</select>
	<br><br>

	<h3>Slecciona Nombre:</h3>
	<select>
		<option>Gran inmundicia</option>
		<option>Guardian de los secretos</option>
		<option>Deborador de almas</option>
		<option>Señor de la transformación</option>
		<option>Demonio mayor del Caos</option>
		<option>Heraldo del Caos</option>
	</select>
	<br><br>

	<input type="submit" name="Enviar" onmouseleave="mostrar()">
</fieldset>
</form>

<script type="text/javascript">
	function mostrar(){
document.getElementById('datos').style.display = 'block';
}
</script>

<div  id="datos">
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
</div>




<footer class="footer">
     <p>@copyright Buitre & CO.</p>
 </footer> 

</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

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

            </span>
    	</ul>
    </nav>
</header>

<form style="width: 30%; margin: 0 auto;">
    <fieldset>
    <label style="font-size: 2em;">Formulario de registro:</label>  <br><br>
      
    <label>Nombre:&nbsp;&nbsp;&nbsp;&nbsp;</label>
    <input type="text" name="Nombre">
    <br><br>
    <label>Apellidos:&nbsp;&nbsp;&nbsp;&nbsp;</label>
    <input type="text" name="apellidos">
    <br><br>
    <label>Email:&nbsp;&nbsp;&nbsp;&nbsp;</label>
    <input type="email" name="email">
    <br><br>
    <label>Password:&nbsp;&nbsp;&nbsp;&nbsp;</label>
    <input type="password" name="password">
    <br><br>
    <input type="submit" name="Enviar" style="float: right;">
	</fieldset>
	


</form>

</body>
</html>
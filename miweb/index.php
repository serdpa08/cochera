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
<!DOCTYPE html>
<html>
<head>
	<title>fechas</title>
</head>
<body>

	<p>Warhammer 40000</p>

	<script type="text/javascript">
		function validarFechaMenorActual(date){
      var x=new Date();
      var fecha = date.split("/");
      x.setFullYear(fecha[2],fecha[1]-1,fecha[0]);
      var today = new Date();

      if (x >= today) {
      	alert("fech");
        return false;
      }
      else {
        return true;
      }
}

	</script>

	<label>¿Para cuándo necesita su pedido?</label><br>
	&nbsp;&nbsp;&nbsp;&nbsp;<input type="date" name="fecha" id="fecha_estimada">
	<input type="submit" name="submit" src="imagenes/check-verde.png">

</body>
</html>

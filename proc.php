<?php
	$nombre_persona = $_POST['nombre'];
	$pais = $_POST['pais'];
?>
<!doctype html>
<html lang-"es">
<head>
	<meta charset = "utf-8" />
	<title> Resultados formularios</title>
	<meta name = "description" content = "" />
</head>
<body>
	<h1> Resultados formularios</h1>
	<p> 
		Este es el nombre de la persona: <?= $nombre_persona ?><br>
		Este es el pais: <?= $pais ?><br>		
	</p>
</body>
</html>

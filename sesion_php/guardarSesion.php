<?php
session_start();
?><!Doctype html>
<html lang="es">
	<head>
		<meta charset = "utf-8"/>
		<title>Guardar en sesion </title>
		<meta name="description" content="" />
	</head>
	<body>
		<h1>Guardando</h1>
		<p>Dos valores seran guardados </p>
		<?php 
			$_SESSION["email"]="tineofanny@gmail.com";
			$_SESSION["deporte_favorito"]="beisbol";
		?>
	</body>
</html>

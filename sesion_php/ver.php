<?php
session_start();
$email = $_SESSION["email"];
$deporte = $_SESSION["deporte_favorito"];
?>
<!Doctype html>
<html lang="es">
	<head>
		<meta charset = "utf-8"/>
		<title>ver dos valores de sesion </title>
		<meta name="description" content="" />
	</head>
	<body>
		<h1>ver sesion</h1>
		<p> <?= $email?></p>
		<p> <?= $deporte?></p>
	</body>
</html>

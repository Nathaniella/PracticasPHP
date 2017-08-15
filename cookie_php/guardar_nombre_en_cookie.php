<?php
setcookie("clave",$_POST["nombre"],time()+3600);
?><!Doctype html>
<html lang="es">
	<head>
		<meta charset = "utf-8"/>
		<title> Aqui guarda el nombre</title>
		<meta name="description" content="" />
	</head>
	<body>
		<h1>Tu nombre fue guardado</h1>
		<p>Tu nombre fue guardado en un cookie </p>
		<p><a href="ve_el_valor_de_la_cookie.php">Ver el valor de la cookie</a></p>
	</body>
</html>

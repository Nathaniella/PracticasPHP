<?php
session_start();
$user = $_SESSION["usuario"];
$cla = $_SESSION["clave"];
?>
<!Doctype html>
<html lang="es">
	<head>
		<meta charset = "utf-8"/>
		<title></title>
		<meta name="description" content="" />
	</head>
	<body>
		<?php
		if(isset($_COOKIE["usuario"])){
			$nombre_usuario = $_COOKIE["usuario"];
	?>
		<h1>El usuario es:</h1>
		<p>Nombre: <?= $nombre_usuario?> </p>
	<?php 
		}else{	
	?>
		<h1>No hay usuario registrado</h1>
	<?php 
		}
	?>
		<h1>Datos de la sesion</h1>
		<p> User: <?= $user?></p>
		<p> Clave: <?= $cla?></p>
	<p><a href="archivo1.html">Volver</a></p>
	</body>
</html>

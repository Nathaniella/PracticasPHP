<!Doctype html>
<html lang="es">
	<head>
		<meta charset = "utf-8"/>
		<title> Ver el valor guardado en cookie</title>
		<meta name="description" content="" />
	</head>
	<body>
	<?php
		if(isset($_COOKIE["clave"])){
			$nombre_guardado = $_COOKIE["clave"];
	?>
		<h1>El valor en cookie es:</h1>
		<p>Nombre: <?= $nombre_guardado?> </p>
	<?php 
		}else{	
	?>
		<h1>No hay nombre en el cookie</h1>
	<?php 
		}
	?>
		<p><a href="Index.html">Volver</a></p>
		<p>
			<?php 
				print_r();
			?>
		</p>
</body>
</html>

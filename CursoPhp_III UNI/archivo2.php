<?php
setcookie("usuario",$_POST["nombre"],time()+3600);
?>
<?php
session_start();
?>

<!Doctype html>
<html lang="es">
	<head>
		<meta charset = "utf-8"/>
		<title>Guardar la sesion </title>
		<meta name="description" content="" />
	</head>
	<body>
		<h1>Guardando</h1>
		<p>Dos valores seran guardados </p>
		<?php 
			$_SESSION["usuario"]=$_POST["nombre"];
			$_SESSION["clave"]="Ft#18401499";
		?>
	</body>
<p><a href="archivo1.html">Volver</a></p>
<p><a href="archivo3.php">Siguiente</a></p>
</html>

<?php
	// Ejemplo de Funciones en  PHP - https://www.dinapyme.com
	// Ejemplo sencillo de una función para mostra un texto de bienvenida
		
	function bienvenida() {
		echo "<h1 style='text-align: center;'>Bienvenido/a a DINAPYME - Formación en Desarrollo Web y WordPress</h1>";
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Ejemplo de funciones en PHP - Bienvenida</title>
	<meta charset="utf-8">
</head>

<body>
	<h1>Ejemplo de funciones en PHP</h1>
	<?php
		echo "<p>Texto de ejemplo para esta página web escrito con un echo de php</p>";
		echo "<p>A continuación llamaremos a una función que hemos definido anteriormente</p>";
		bienvenida();	
	?>
</body>
</html>


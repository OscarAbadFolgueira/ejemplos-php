<?php
	// Ejemplo de variables PHP - htts://www.dinapyme.com
	// Comprobación de el tipo de variables
	// En este ejemplo relizamos la comprobación del tipo de una variable para saber si es null, entero, string, flotante o booleano.
	// Utilizamos las funciones de la familia is_*** como: is_null(), is_int(), is_string(), is_double(), is_bool()
		
	$variable1;  // declaración de una variable sin asignale ningún valor
	
	// Comprobación de que le variable tiene asignado algún valor y si no lo tiene, mostrar que es null
	if (!isset($variable1)) {
		echo "La variable \$variable1 es NULL";
	}
	echo "<br />";
	
	$variable1 = 5;  // Asignar un número entero a $variable1
	if (is_int($variable1)) {  // Comprobar si es un número entero
		echo "La variable \$variable1 es de tipo entero";
	}
	echo "<br />";
	
	
?>
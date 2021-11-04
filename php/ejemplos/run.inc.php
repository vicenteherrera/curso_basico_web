<?php

// Este fichero requiere ini.inc.php y form.inc.php

echo "Hola ejemplo 3<br>";
/*
echo "GET<br>";
echo "<pre>";
var_dump($_GET);
echo "</pre>POST<br><pre>";
var_dump($_POST);
*/



/*
Esta función devuelve una cadena donde el primer parámetro se
repite tantas veces como indique el segundo parámetro.
Devuelve una cadena.
*/
function repetir($caracter, $repeticiones) {
	if ($caracter=='' || $repeticiones=='' ) {
		return 'Faltan parámetros';
	}

	$result = '';
	/*
	for( $i=1 ; $i <= $repeticiones ; $i++ ) {
		$result = $result . $caracter;
	}
	*/
	
	$i = 0;
	while( $i <= $repeticiones && $i < 1000 ) {
		$i++;
		$result = $result ."(".$i.")".$caracter.", ";
	}

	$result = substr($result,0,-2);


	return $result;
}
function buscar($busqueda) {
	$base = array(
		'color1'=>'rojo',
		'color2'=>'azul',
		'color3'=>'amarillo'
	);
	foreach($base as $key => $value) {
		if ($value==$busqueda) {
			return "[".$key."]==".$value;
		}
	}
	return 'no encontrado';
}

if (isset($_POST['campo1'])) {
	$result = 0;

	switch( $_POST['operacion'] ) {
		case 'sumar':
			$result = $campo1 + $campo2;
		break;
		case 'restar':
			$result = $campo1 - $campo2;
		break;
		case 'multiplicar':
			$result = $campo1 * $campo2;
		break;
		case 'repetir':
			$result = repetir($campo1, $campo2);
		break;
		case 'buscar':
			$result = buscar($campo1);
		break;
		default:
		$result = "error";
	}


	echo "Resultado: ".$result."<br>";
}

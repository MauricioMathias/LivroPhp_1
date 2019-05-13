<?php

/* Adicionando dados em um array
$carros = array('Palio' => array(	'cor'=>'azul',
									'potencia'=>'1.0',
									'opcionais'=>'Ar condicionado'
								),
				'Corsa' => array(	'cor'=>'cinza',
									'potencia'=>'1.4',
									'opcionais'=>'MP3'
								),
				'Gol'	=> array(	'cor'=>'vermelho',
									'potencia'=>'2.0',
									'opcionais'=>'Metalica'
								)
			);

echo $carros['Palio']['opcionais']
*/

// OU

$carros['Palio']['cor'] = 'azul';
$carros['Palio']['potencia'] = '1.0';
$carros['Palio']['opcionais'] = 'Ar condicionado';

$carros['Corsa']['cor'] = 'cinza';
$carros['Corsa']['potencia'] = '1.4';
$carros['Corsa']['opcionais'] = 'MP3';

$carros['Gol']['cor'] = 'vermelho';
$carros['Gol']['potencia'] = '2.0';
$carros['Gol']['opcionais'] = 'Metalico';

// echo $carros['Palio']['opcionais'];

foreach ($carros as $modelo => $caracteristicas) {
	echo "=> modelo $modelo <br/>";
	foreach ($caracteristicas as $caracteristica => $valor) {
		echo "característica $caracteristica => $valor<br/>";
	}
}

?>

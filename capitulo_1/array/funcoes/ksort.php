<?php
// Ordena um array pelo seu índice. Para a ordem reversa usar krsort()
$carro['potência'] = '1.0';
$carro['cor'] = 'branco';
$carro['modelo'] = 'celta';
$carro['opcionais'] = 'ar quente';

ksort($carro);

print_r($carro);

if($ksort = 1){

	echo "<br/> deu boa!";
}

?>
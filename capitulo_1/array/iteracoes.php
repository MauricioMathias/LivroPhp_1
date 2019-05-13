<?php

$frutas['cor'] = 'vermelha';
$frutas['sabor'] = 'doce';
$frutas['formato'] = 'redonda';
$frutas['nome'] = 'maçã';

foreach ($frutas as $chave => $fruta) {
	
	echo "$chave => $fruta <br/>";
}

?>
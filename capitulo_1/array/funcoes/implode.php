<?php
// Converte um array em uma string, separando os elementos do array por meio de um separador.
$padrao = array('Mauricio', 'Tamara', 'Estalo');
$resultado = implode(' + ', $padrao);

var_dump($resultado);



?>
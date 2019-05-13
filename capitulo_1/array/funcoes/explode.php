<?php
// Converte uma string em um array, separando os elementos por um separador
$string = "Olá, me chamo Mauricio, e tu?";

$frase = explode(",", $string);
echo $frase[1];

/*$pizza  = "piece1 piece2 piece3 piece4 piece5 piece6";
$pieces = explode(" ", $pizza);
echo $pieces[0]; // piece1
echo $pieces[1];
*/
?>
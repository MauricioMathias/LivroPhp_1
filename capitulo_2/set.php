<?php  
// inclui classe cavalo
include_once 'classes/cavalo.class.php';

$cavalinho = new Cavalo('Spirit');
$cavalinho->Nascimento = '7 de novembro'; //Atribuição inválida
$cavalinho->Nascimento = '07/11/2001'; //Atribuição correta

?>
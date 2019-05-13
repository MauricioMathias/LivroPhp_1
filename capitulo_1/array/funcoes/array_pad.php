<?php
// Preenche um array com um valor e a quantidade de posições
$a = array("verde", "azul", "vermelho");

$a = array_pad($a, 6, "branco");

var_dump($a);


?>
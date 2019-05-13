<?php
//Ordena um array pelo valor, mantendo a associação com o índice. Forma reversa é arsort()
$a[0] = 'green';
$a[1] = 'yellow';
$a[2] = 'red';
$a[3] = 'blue';
$a[4] = 'gray';
$a[5] = 'white';

asort($a);

print_r($a);


?>
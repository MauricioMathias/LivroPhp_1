<?php
include_once 'classes/pessoa.class.php';
include_once 'classes/conta.class.php';
include_once 'classes/contaPoupanca.class.php';

$mauricio = new Pessoa(10, "Mauricio Neis Mathias", 1.87, 23, 72, "Ensino superior incompleto", 1.000);
$conta = new ContaPoupanca('0048', "1004201", "01/01/2001", $mauricio, 54321, 300.00, '15/09');


?>
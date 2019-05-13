<?php
// carrega as classes
include 'classes/funcionario.class.php';
include 'classes/estagiario.class.php';

$pedrinho = new Estagiario;
$pedrinho->SetSalario(248);

echo 'O salário do Pedrinho é R$: ' . $pedrinho->GetSalario() . '<br/>';


?>
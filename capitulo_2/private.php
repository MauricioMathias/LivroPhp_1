<?php
// carrega a classe
include_once 'classes/funcionario.class.php';

// instancia novo Funcionario
$pedro = new Funcionario;

// atribui novo Salário
$pedro->SetSalario(876);

// obtém o Salário
echo 'Salário: R$ ' . $pedro->GetSalario();


?>
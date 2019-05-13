<?php
// carrega as classes
include 'classes/funcionario.class.php';
include 'classes/estagiario.class.php';

// cria objeto Funcionario
$pedrinho = new Funcionario;
$pedrinho->nome = 'Pedrinho';

// cria objeto Estagiario
$mariana = new Estagiario;
$mariana->nome = 'Mariana';

// imprime propriedade nome
echo $pedrinho->nome . "<br/>";
echo $mariana->nome;


?>
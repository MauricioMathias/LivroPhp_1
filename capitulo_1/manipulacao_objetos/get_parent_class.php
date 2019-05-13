<?php
// Retorna o nome de uma classe pai.
class Funcionario
{
	var $Codigo;
	var $Nome;
}

class Estagiario extends Funcionario
{
	var $Salario;
	var $Bolsa;
}

$jose = new Estagiario;

echo get_parent_class($jose) . "<br/>";
echo get_parent_class('estagiario');

?>
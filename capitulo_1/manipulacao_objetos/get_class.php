<?php
// Retorna o nome da classe que um objeto pertence
class Funcionario
{
	var $Codigo;
	var $Nome;

	function setSalario()
	{

	}
	function getSalario()
	{

	}
}

$mauricio = new Funcionario;
echo get_class($mauricio);

?>
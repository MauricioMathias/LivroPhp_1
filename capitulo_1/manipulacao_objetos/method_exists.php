<?php
// Verifica se um determinado objeto possui o metodo descrito
class Funcionario
{
	var $Codigo;
	var $Nome;

	function getSalario()
	{

	}
	function setSalario()
	{

	}
}
$mauricio = new Funcionario;

if(method_exists($mauricio, 'setNome'))
{
	echo 'Objeto Mauricio possuí o método setNome()';
}
else
{
	echo 'Objeto Mauricio não possuí o método setNome() <br/>';
}
if(method_exists($mauricio, 'setSalario'))
{
	echo 'Objeto Mauricio possui o método setSalario()';
}

?>
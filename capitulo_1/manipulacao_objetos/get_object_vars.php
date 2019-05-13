<?php
// Retorna um vetor com os nomes e conteudos das propriedades do objeto. São valores que vão sendo alterados com o ciclo do objeto
class Funcionario
{
	var $Codigo;
	var $Nome;
	var $Salario = 5000;
	var $Departamento = 'Sistemas';
	function setSalario()
	{

	}
	function getSalario()
	{

	}
}
$mauricio = new Funcionario;
$mauricio->Codigo = 44;
$mauricio->Nome = 'Mauricio Neis Mathias';
$mauricio->Salario += 569;
$mauricio->Departamento = 'T.I.';

print_r(get_object_vars($mauricio));


?>
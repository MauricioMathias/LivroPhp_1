<?php
// Retorna um vetor com os nomes das propriedades e conteúdos de uma determinada classe
class Funcionario{

	var $Nodigo;
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

print_r(get_class_vars('Funcionario'));

?>
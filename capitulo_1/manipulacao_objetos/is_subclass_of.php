<?php
// Indica se um determinado objeto ou classe é derivado de uma determinada classe.
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

$mauricio = new Estagiario;

if(is_subclass_of($mauricio, 'Funcionario'))
{
	echo "Classe do objeto Mauricio é derivada de Funcionario";
}
echo "<br/>";
if(is_subclass_of('Estagiario', 'Funcionario'))
{
	echo "Classe Estagiario é derivada de Funcionario";
}
?>
<?php
// Executa uma função ou método de uma classe passada como parametro
function minhaFuncao()
{
	echo "Minha função! <br/>";
}

call_user_func('minhaFuncao');


class minhaClasse
{
	function meuMetodo()
	{
		echo "Meu método! <br/>";
	}
}

call_user_func(array('minhaClasse', 'meuMetodo'));

$obj = new minhaClasse();
call_user_func(array($obj, 'meuMetodo'));
?>
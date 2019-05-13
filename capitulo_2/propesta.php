<?php
class Aplicacao
{
	static $Quantidade;

	// método construtor: incrementa a $Quantidade de aplicações
	function __construct($Nome)
	{
		// incrementa propriedade estática
		self::$Quantidade ++;
		$i = self::$Quantidade;
		echo "Nova Aplicação nr. $i: $Nome <br/>";
	}
}

// cria novos objetos
new Aplicacao('Dia');
new Aplicacao('Gimp');
new Aplicacao('Gnumeric');
new Aplicacao('Abiword');
new Aplicacao('Evolution');

echo 'Quantidade de aplicações = ' . Aplicacao::$Quantidade . "<br/>";

?>
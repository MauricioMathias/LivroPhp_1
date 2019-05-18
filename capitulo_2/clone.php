<?php

class Cavalo
{
	// método construtor
	function __construct($coleira, $nome, $idade, $raca)
	{
		$this->coleira = $coleira;
		$this->nome = $nome;
		$this->idade = $idade;
		$this->raca = $raca;
	}

	function __clone()
	{
		$this->coleira = $this->coleira +1;
		$this->nome .= ' Juninho extreme';
		$this->idade = 3;
	}
}

$relinchito = new Cavalo (69, 'Relinchito', 23, 'Cavalomem');
$relinchoso = clone $relinchito;

echo 'Código: ' . $relinchito->coleira . '<br/>';
echo 'Nome: ' . $relinchito->nome . '<br/>';
echo 'Idade: ' . $relinchito->idade . ' anos<br/>';
echo "<br/>";

echo 'Código: ' . $relinchoso->coleira . '<br/>';
echo 'Nome: '. $relinchoso->nome . '<br/>';
echo 'Idade: '. $relinchoso->idade . ' anos<br/>';

?>
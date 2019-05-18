<?php
// inclue classe XMLBase
include_once 'classes/xmlBase.class.php';

class Cavalo extends XMLBase
{
	// método construtor
	function __construct($nome, $idade, $raca)
	{
		$this->nome = $nome;
		$this->idade = $idade;
		$this->raca = $raca;
	}
}

$relinchito = new Cavalo('Relinchito', 16, 'Cavalomem');
$relinchoso = new Cavalo('Relinchoso', 34, 'Homem-Cavalo');
echo $relinchito->toXml();
echo "<br/>";
echo $relinchoso->toXml();

?>
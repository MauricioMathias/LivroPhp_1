<?php
class Cavalo
{
	private $Nascimento;

	// método construtor
	function __construct($nome)
	{
		$this->nome = $nome;
	}

	// tostring, executado sempre que o objeto for impresso
	function __toString()
	{
		return $this->nome;
	}
}

$relinchoso = new Cavalo('Relinchoso');
$relinchito = new Cavalo('Relinchito');
echo $relinchoso;
echo "<br/>";
echo $relinchito;
echo "<br/>";
?>
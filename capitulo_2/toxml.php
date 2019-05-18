<?php
class Cavalo
{
	// método construtor
	function __construct($nome, $idade, $raca)
	{
		$this->nome = $nome;
		$this->idade = $idade;
		$this->raca = $raca;
	}

	// toXml, retorna o objeto no formato XML
	function toXml()
	{
	return
<<<XML
<cavalo>
	<nome> {$this->nome} </nome>
	<idade> {$this->idade} </idade>
	<raca> {$this->raca} </raca>
</cavalo>

XML;
	}
}

$relinchito = new Cavalo('Relinchito', 12, 'Cavalomem');
$relinchoso = new Cavalo('Relinchoso', 35, 'Homem-Cavalo');
echo $relinchito->toXml();
echo "<br/>";
echo $relinchoso->toXml();
?>
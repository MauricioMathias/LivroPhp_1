<?php

final class ContaPoupanca extends Conta
{
	var $Aniversario;

	//Método construtor (sobrescrito) agora também inicializa a variavel $Aniversario;
	function __construct($Agencia, $Codigo, $DataDeCriacao, $Titular, $Senha, $Saldo, $Aniversario)
	{
		// Chama o método construtor da classe-pai.
		parent::__construct($Agencia, $Codigo, $DataDeCriacao, $Titular, $Senha, $Saldo);
		$this->Aniversario = $Aniversario;
	}
	// Método Retirar (sobrescrito) verifica se há saldo para retirar tal $quantia.
	function Retirar($quantia)
	{
		if($this->Saldo >= $quantia)
		{
			// Executa método da classe-pai
			parent::Retirar($quantia);
		}
		else
		{
			echo "Retirada não permitida... <br/>";
			return false;
		}
		// retirada permitida
		return true;

	function Transferir($Conta, $Valor)
	{
		if($this->Retirar($Valor))
		{
			$Conta->Depositar($Valor);
		}
	}
}
}

?>
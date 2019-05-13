<?php

class ContaCorrente extends Conta
{
	var $TaxaTransferencia = 2.5;
	var $Limite;

	// Método construtor (sobrescrito) agora também inicializa a variável $Limite
	function __construct($Agencia, $Codigo, $DataDeCriacao, $Titular, $Senha, $Saldo, $Limite)
	{
		// Chamada do método construtor da classe-pai
		parent::__construct($Agencia, $Codigo, $DataDeCriacao, $Titular, $Senha, $Saldo);
		$this->Limite = $Limite;
	}
	// Método Retirar (sobrescrito) verifica se a $quantia retirada está dentro do limite
	function Retirar($quantia)
	{
		// Imposto sobre movimentação financeira
		$cpmf = 0.05;

		if(($this->Saldo + $this->Limite) >= $quantia)
		{
			// Executa o método da classe-pai
			parent::Retirar($quantia);

			// Debita o Imposto
			parent::Retirar($quantia * $cpmf);
		}
		else
		{
			echo "Retirada não permitida...<br/>";
			return false;
		}
		// Retirada permitida
		return true;
	}

	final function Transferir($Conta, $Valor)
	{
		if ($this->Retirar($Valor))
		{
			$Conta->Depositar($Valor);
		}

		if($this->Titular != $Conta->Titular)
		{
			$this->Retirar($this->TaxaTransferencia);
		}
	}
}

?>
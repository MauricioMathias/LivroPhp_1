<?php
// Carrega as classes
include_once 'classes/conta.class.php';
include_once 'classes/contaCorrente.class.php';

class ContaCorrenteEspecial extends ContaCorrente
{
	function Depositar($Valor)
	{
		echo "sobrescrevendo método Depositar. <br/>";
		parent::Depositar($Valor);
	}

	function Transferir($Conta, $Valor)
	{
		echo "sobrescrevendo método Transferir";
		parent::Transferir($Conta, $Valor);
	}
}


?>

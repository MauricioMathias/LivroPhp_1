<?php
// Carrega as classes
include_once 'classes/pessoa.class.php';
include_once 'classes/conta.class.php';
include_once 'classes/contaPoupanca.class.php';
include_once 'classes/contaCorrente.class.php';

// Criação do objeto $mauricio
$mauricio = new Pessoa(10, "Mauricio Neis Mathias", 1.87, 23, "29/05/1995", "Ensino superior incompleto", 3.000);

echo "Manipulando o objeto ". $mauricio->Nome. ": <br/>";

// Criação do objeto $conta_mauricio
$contas[1] = new ContaCorrente('0048', "1004201", "01/01/2001", $mauricio, 54321, 500.00, 200.00);
$contas[2] = new contaPoupanca('0049', "1004102", "01/01/2001", $mauricio, 54321, 500.00, '15/09');

// Percorremos as contas
foreach ($contas as $key => $conta)
{
	echo "Manipulando a conta $key de: ".$conta->Titular->Nome."<br/>";
	echo "O saldo atual da conta $key é R$ ".$conta->ObterSaldo()." <br/>";
	$conta->Depositar(200);
	echo "O saldo atual da conta $key é R$ ".$conta->ObterSaldo()." <br/>";
	$conta->Retirar(100);
	echo "O saldo atual da conta $key é R$ ".$conta->ObterSaldo()." <br/>";
}


?>
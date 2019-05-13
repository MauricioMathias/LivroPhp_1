<?php
/*
// Carrega as classes
include_once 'classes/pessoa.class.php';
include_once 'classes/conta.class.php';

// Criação do objeto $mauricio
$mauricio = new Pessoa;
$mauricio->Codigo = 10;
$mauricio->Nome = "Mauricio Neis Mathias";
$mauricio->Altura = 1.86;
$mauricio->Idade = 23;
$mauricio->Nascimento = '29/05/1995';
$mauricio->Escolaridade = "Superior incompleto";

echo "Manipulando o objeto $mauricio->Nome: <br/><br/>";
echo "*************************************";

echo "<br/>Formação: <br/><br/>";
echo $mauricio->Nome . " sua formação é: ". $mauricio->Escolaridade . "<br/>";

$mauricio->Formar('Sistemas de Informação');

echo $mauricio->Nome . " está se formando em: " . $mauricio->Escolaridade . "<br/>";
echo "*************************************";

echo "<br/>Idade: <br/><br/>";
echo $mauricio->Nome . " tem " . $mauricio->Idade . " anos <br/>";

$mauricio->Envelhecer(1);
echo "~Um ano depois~ <br/>";
// Pode concatenar, ou usar chaves({}). Pode só declarar o objeto também, como em Manipulando o objeto
echo "{$mauricio->Nome} tem {$mauricio->Idade} anos <br/>";

// Criação do objeto $conta_mauricio
$conta_mauricio = new Conta;
$conta_mauricio->Agencia = '0048';
$conta_mauricio->Codigo = 1004201;
$conta_mauricio->DataDeCriacao = "01/01/2001";
$conta_mauricio->Titular = $mauricio;
$conta_mauricio->Senha = 12345;
$conta_mauricio->Saldo = 563.97;
$conta_mauricio->Cancelada = false;

echo "*************************************";
echo "<br/>Conta: <br/>";
echo "<br/> Manipulando a conta de: " . $conta_mauricio->Titular->Nome;
echo "<br/>O saldo atual é R$". $conta_mauricio->obterSaldo();

$conta_mauricio->Depositar(20);
echo "<br/>Entrou 20 pila:";
echo "<br/>O saldo atual é R$". $conta_mauricio->obterSaldo();

$conta_mauricio->Retirar(10);
echo "<br/>Saiu 10 pila:";
echo "<br/>O saldo atual é R$". $conta_mauricio->obterSaldo();

*/


?>

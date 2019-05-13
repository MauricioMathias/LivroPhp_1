<?php
// Carrega as classes
include_once 'classes/pessoa.class.php';
include_once 'classes/conta.class.php';


// Criação do objeto $mauricio
$mauricio = new Pessoa(10, "Mauricio Neis Mathias", 1.85, 23, "29/05/1995", "Superior Incompleto", 1.100);

echo "Manipulando o objeto ". $mauricio->Nome. "<br/>";

echo $mauricio->Nome. " é formado em: ". $mauricio->Escolaridade. "<br/>";
$mauricio->Formar('Sistemas de Informação');
echo $mauricio->Nome. " é formado em: ". $mauricio->Escolaridade. "<br/>";

echo $mauricio->Nome. " tem ". $mauricio->Idade. " anos <br/>";
$mauricio->Envelhecer(1);
echo $mauricio->Nome. " tem ". $mauricio->Idade. " anos <br/>";

echo "<br/>******************************<br/>";
// Criação do objeto $conta_mauricio
$conta_mauricio = new Conta('0048', 1004201, "01/01/2001", $mauricio, 12345, 578.75);


echo "Manipulando a conta de: ". $conta_mauricio->Titular->Nome."<br/>";

echo "O saldo atual é R$". $conta_mauricio->obterSaldo(). "<br/>";
$conta_mauricio->Depositar(20);
echo "O saldo atual é R$". $conta_mauricio->obterSaldo(). "<br/>";
$conta_mauricio->Retirar(10);
echo "O saldo atual é R$". $conta_mauricio->obterSaldo(). "<br/>";
?>

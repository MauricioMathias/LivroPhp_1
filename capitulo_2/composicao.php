<?php
include_once 'classes/fornecedor.class.php';
include_once 'classes/contato.class.php';

// instancia novo fornecedor
$fornecedor = new Fornecedor;
$fornecedor->RazaoSocial = 'Brinquedos adultos Avengers S.A';

// atribui informações de contato
$fornecedor->SetContato('Mauricio', '41 99819-4846', 'mauricioneis15@gmail.com');

// imprime as informações
echo $fornecedor->RazaoSocial . "<br/>";
echo "Informações de contato <br/>";
echo $fornecedor->GetContato();


?>
<?php
include_once 'classes/fornecedor.class.php';
include_once 'classes/produto.class.php';

// instancia Fornecedor
$fornecedor = new Fornecedor;
$fornecedor->Codigo = 848;
$fornecedor->RazaoSocial = 'Bilinha luz vermelha';
$fornecedor->Endereco = 'Rua dos Ladrilhos';
$fornecedor->Cidade = 'Varginha';

// instancia Produto
$produto = new Produto;
$produto->Codigo = 462;
$produto->Descricao = 'Doce de coco';
$produto->Preco = 0.75;
$produto->Fornecedor = $fornecedor;

// imprime atributos
echo 'Código: ' . $produto->Codigo. '<br/>';
echo 'Descrição: ' . $produto->Descricao. '<br/>';
echo 'Código do fornecedor: '. $produto->Fornecedor->Codigo. '<br/>';
echo 'Razão social: '. $produto->Fornecedor->RazaoSocial. '<br/>';


?>
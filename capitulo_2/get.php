<?php  
// inclui a classe produto
include_once 'classes/produto.class.php';

// cria novo produto com o preço R$ 435.23
$produto = new Produto(1, 'Penesdriver 16Gb', 1, 435.23);

// imprime o preço
echo $produto->Preco;



?>
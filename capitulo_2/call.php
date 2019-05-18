<?php

// inclui classe Produto
include_once 'classes/produto.class.php';

// criando novo produto com o preço R$ 345.67
$mercadoria = new Produto(1, 'Fruta do conde', 1, 345.67);

// executando método Vender, passando 10 unidades
echo $mercadoria->Vender(10);


?>
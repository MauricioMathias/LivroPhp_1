<?php
include_once 'classes/cesta.class.php';
include_once 'classes/fornecedor.class.php';
include_once 'classes/produto.class.php';

$fornecedor = new Fornecedor;
$fornecedor->RazaoSocial = "Brinquedos Avengers para adultos S.A";

$cesta = new Cesta;
$cesta->AdicionaItem($fornecedor);

$cesta->CalculaTotal();


?>

<?php
// funcao de carga automática
function __autoload($classe)
{
	// busca classe no diretório de classes 
	include_once "classes/{$classe}.class.php";
}

// instanciando novo Produto
$salgado = new Produto(500, "Kibe", 4, 4.12);

echo 'Código: '. $salgado->Codigo . '<br/>';
echo 'Nome: ' . $salgado->Descricao . '<br/>';


?>
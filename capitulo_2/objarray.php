<?php 
// cria array dados_mauricio
$dados_mauricio['nome'] = 'Mauricio Neis Mathias';
$dados_mauricio['idade'] = 23;
$dados_mauricio['profissao'] = 'Instrutor';

// cria array dados_tamara
$dados_tamara['nome'] = 'Tamara Martins Lemos';
$dados_tamara['idade'] = 19;
$dados_tamara['profissao'] = 'Estudante';

// cria objeto mauricio
foreach ($dados_mauricio as $chave => $valor) 
{
	// utiliza variáveis variantes
	$mauricio->$chave = $valor; 
}

// cria objeto tamara
foreach ($dados_tamara as $chave => $valor) 
{
	// utiliza variáveis variantes
	$tamara->$chave = $valor; 
}

echo "{$mauricio->nome} é {$mauricio->profissao}<br/>";
echo "{$tamara->nome} é {$tamara->profissao}<br/>";


?>
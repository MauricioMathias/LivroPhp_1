<?php
// interface Aluno
interface IEstudante
{
	function getNome();
	function setNome($nome);
	function setPais(Pessoa $responsavel);
}

// classe Estudante
class Estudante implements IEstudante
{
	// atribui o nome do aluno
	function setNome($nome)
	{
		$this->nome = $nome;
	}

	// retorna o nome do aluno
	function getNome()
	{
		return $this->nome;
	}
}

// instancia novo Estudante
$clarencio = new Estudante;

// chama métodos quaisquer
$clarencio->setNome('Clarencio Clarinho');
echo $clarencio->getNome();

?>
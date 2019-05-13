<?php
class Fornecedor
{
	var $Codigo;
	var $RazaoSocial;
	var $Endereço;
	var $Cidade;
	var $Contato;

	// Método construtor
	function __construct()
	{
		// instancia novo Contato
		$this->Contato = new Contato;
	}

	// grava contato
	function SetContato($Nome, $Telefone, $Email)
	{
		// delega chamada de método
		$this->Contato->SetContato($Nome, $Telefone, $Email);
	}

	// retorna contato 
	function GetContato()
	{
		// Delega chamada de método
		return $this->Contato->GetContato();
	}
}

?>
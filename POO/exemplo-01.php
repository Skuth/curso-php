<?php

class Pessoa {

	public $nome;//Atributo

	public function falar(){//Metodo
		return "O meu nome é ".$this->nome;
	}

}

$pessoa = new Pessoa();
$pessoa->nome = "Flávio";
echo $pessoa->falar();

?>
<?php

class Documento {

	private $numero;

	public function getNumero() {
		return $this->numero;
	}

	public function setNumero($numero) {
		$this->numero = $numero;
	}

}

class CPF extends Documento {

	public function validar():bool {

		//Validação do CPF

		$numeroCPF = $this->getNumero();

		return true;
	}

}

$doc = new CPF();
$doc->setNumero("12345678910");
var_dump($doc->validar());
echo "<br>";
echo $doc->getNumero();
	
?>
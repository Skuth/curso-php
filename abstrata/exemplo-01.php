<?php

interface Veiculo {

	public function acelerar($velocidade);
	public function frear($velocidade);
	public function trocarMarcha($marcha);

}

abstract class Automovel implements Veiculo {

	public function acelerar($velocidade) {
		echo "O veículo acelerou até " . $velocidade . " KM/H <br>";
	}

	public function frear($velocidade) {
		echo "O veículo freou até " . $velocidade . " KM/H <br>";
	}

	public function trocarMarcha($marcha) {
		echo "O veículo engatou a marcha " . $marcha . " <br>";
	}

}

class DelRey extends Automovel {

	public function empurrar() {

	}

}

$carro = new DelRey();
$carro->acelerar(160);

?>
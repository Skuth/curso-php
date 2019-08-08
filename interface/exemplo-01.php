<?php

interface Veiculo {

	public function acelerar($velocidade);
	public function frear($velocidade);
	public function trocarMarcha($marcha);

}

class Civic implements Veiculo {

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

$carro = new Civic();
$carro->acelerar(100);
$carro->frenar(40);
$carro->trocarMarcha(1);

?>
<?php

class Carro {

	private $modelo;
	private $motor;
	private $ano;

	public function getModelo() {
		return $this->modelo;
	}//getModelo

	public function setModelo($modelo) {
		$this->modelo =$modelo;
	}//setModelo

	public function getMotor():float {
		return $this->motor;
	}//getMotor

	public function setMotor($motor) {
		$this->motor =$motor;
	}//setMotor

	public function getAno():int {
		return $this->ano;
	}//getAno

	public function setAno($ano) {
		$this->ano =$ano;
	}//setAno

	public function exibir() {
		return array(
			'Modelo'=>$this->getModelo(),
			'Motor'=>$this->getMotor(),
			'Ano'=>$this->getAno()
		);//Array
	}//Exibir

}//Class

$gol = new Carro();
$gol->setModelo("Gol GT");
$gol->setMotor("1.6");
$gol->setAno("2013");
var_dump($gol->exibir());

$bmw = new Carro();
$bmw->setModelo("BMW X6");
$bmw->setMotor("2.0");
$bmw->setAno("2017");
var_dump($bmw->exibir());

?>
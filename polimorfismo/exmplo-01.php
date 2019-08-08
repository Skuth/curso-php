<?php

abstract class Animal {

	public function falar() {
		return "Som";
	}//Falar

	public function mover() {
		return "Anda";
	}//Mover

}//Animal

class Cachorro extends Animal {

	public function falar() {
		return "Late";
	}//Falar

}//Cachorro

class Gato extends Animal {

	public function falar() {
		return "Mia";
	}//Falar

}//Gato

class Passaro extends Animal {

	public function falar() {
		return "Canta";
	}//Falar

	public function mover(){
		return "Voa e " . parent::mover();
	}//Mover

}//Passaro

//Cachorro
echo "<h1>Cachorro</h1>";//Titulo com nome do animal
$pluto = new Cachorro();
echo $pluto->falar() . "<br>";
echo $pluto->mover() . "<br>";
//Cachorro

echo "<hr>";//Linha dividindo

//Gato
echo "<h1>Gato</h1>";//Titulo com nome do animal
$tom = new Gato();
echo $tom->falar() . "<br>";
echo $tom->mover() . "<br>";
//Gato

echo "<hr>";//Linha dividindo

//Passaro
echo "<h1>Passaro</h1>";//Titulo com nome do animal
$Aguia = new Passaro();
echo $Aguia->falar() . "<br>";
echo $Aguia->mover() . "<br>";
//Passaro

?>
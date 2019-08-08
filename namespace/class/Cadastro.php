<?php

class Cadastro {

	private $nome;
	private $email;
	private $senha;

	public function getNome() {
		return $this->nome;
	}//getNome

	public function getEmail() {
		return $this->email;
	}//getEmail

	public function getSenha() {
		return $this->senha;
	}//getSenha

	public function setNome($nome) {
		$this->nome = $nome;
	}//setNome

	public function setEmail($email) {
		$this->email = $email;
	}//setEmail

	public function setSenha($senha) {
		$this->senha = $senha;
	}//setSenha

	public function __toString(){

		return json_encode(array(
			'nome'=>$this->getNome(),
			'Email'=>$this->getEmail(),
			'Senha'=>$this->getSenha()
		));

	}

}

?>
<?php

class Usuario {

	private $idusuario;
	private $deslogin;
	private $dessenha;
	private $dtcadastro;

	public function getIdusuario() {
		return $this->idusuario;
	}

	public function getDeslogin() {
		return $this->deslogin;
	}//desLogin

	public function getDessenha() {
		return $this->dessenha;
	}//desSenha

	public function getDtcadastro() {
		return $this->dtcadastro;
	}//dtCadastro

	public function setIdusuario($idusuario) {
		$this->idusuario = $idusuario;
	}

	public function setDeslogin($deslogin) {
		$this->deslogin = $deslogin;
	}//desLogin

	public function setDessenha($dessenha) {
		$this->dessenha = $dessenha;
	}//desSenha

	public function setDtcadastro($dtcadastro) {
		$this->dtcadastro = $dtcadastro;
	}//dtCadastro

	public function loadById($id) {

		$sql = new Sql();

		$results = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID", array(
			":ID"=>$id
		));//results

		if (count($results) > 0) {
			
			$this->setData($results[0]);

		}//if

	}//loadById

	public static function getList() {

		$sql = new Sql();

		return $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin");

	}//getList

	public static function search($login) {

		$sql = new Sql();

		return $sql->select("SELECT * FROM tb_usuarios WHERE deslogin LIKE :SEARCH ORDER BY deslogin", array(
			':SEARCH'=>"%".$login."%"
		));//return

	}//search

	public function login($login, $password) {

		$sql = new Sql();

		$results = $sql->select("SELECT * FROM tb_usuarios WHERE deslogin = :LOGIN AND dessenha = :PASSWORD", array(
			":LOGIN"=>$login,
			":PASSWORD"=>$password
		));//results

		if (count($results) > 0) {

			$this->setData($results[0]);

		}else {

			throw new Exception("Login ou senha invalidos.");
			

		}//if / else

	}//login

	public function setData($data) {

		$this->setIdusuario($data['idusuario']);
		$this->setDeslogin($data['deslogin']);
		$this->setDessenha($data['dessenha']);
		$this->setDtcadastro(new DateTime($data['dtcadastro']));

	}//setData

	public function insert() {

		$sql = new Sql();
		$results = $sql->select("CALL sp_usuarios_insert(:LOGIN, :PASSWORD)", array(
			':LOGIN'=>$this->getDeslogin(),
			':PASSWORD'=>$this->getDessenha()
		));//results

		if (count($results) > 0) {
			$this->setData($results[0]);
		}//if

	}//insert

	public function update($login, $password) {

		$this->setDeslogin($login);
		$this->setDessenha($password);

		$sql = new Sql();

		$sql->query("UPDATE tb_usuarios SET deslogin = :LOGIN, desenha = :PASSWORD WHERE idusuario = :ID", array(
			':LOGIN'=>$this->getDeslogin(),
			':PASSWORD'=>$this->getDessenha(),
			':ID'=>$this->getIdusuario()
		));//sql

	}//update

	public function delete() {

		$sql = new Sql();

		$sql->query("DELETE FROM tb_usuarios WHERE idusuario = :ID", array(
			':ID'=>$this->getIdusuario()
		));//sql

		$this->setIdusuario(0);
		$this->setDeslogin("");
		$this->setDessenha("");
		$this->setDtcadastro(new DateTime());

	}//delete

	public function __construct($login = "", $password = "") {

		$this->setDeslogin($login);
		$this->setDessenha($password);

	}//construct

	public function __toString() {

		return json_encode(array(
			"idusuario"=>$this->getIdusuario(),
			"deslogin"=>$this->getDeslogin(),
			"dessenha"=>$this->getDessenha(),
			"dtcadastro"=>$this->getDtcadastro()->format("d/m/Y H:i:s")
		));//return

	}//toString

}//class

?>
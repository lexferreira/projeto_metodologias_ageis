<?php

class Usuario_model extends CI_Model{
	private $id;
	private $nome;
	private $cpf;
	private $endereco;
	private $funcao;
	private $matricula;
	private $senha;

	public function _construct(){

	}

	public funciton get_id(){
		return $this->id;
	}
	public function set_id($id){
		$this->nome = $nome;
	}
	public function get_nome(){
		return $this->nome;
	}
	public function set_nome($nome){
		$this->nome = $nome;
	}
	public function get_cpf(){
		return $this->cpf;
	}
	public function set_cpf($cpf){
		$this->cpf = cpf;
	}

	public function get_endereco(){
		return $this->endereco;
	}
	public function set_endereco($endereco){
		$this->endereco = $endereco;
	}

	public function get_funcao(){
		return $this->funcao;
	}

	public function set_funcao($funcao){
		$this->funcao = $funcao;
	}
	public function get_matricula(){
		return $this->matricula;
	}
	public function set_matricula($matricula){
		$this->matricula = $matricula;
	}
	public function get_senha(){
		return $this->senha;
	}
	public function set_senha($senha){
		$this->senha = $senha;
	}

	public function salvar(){
		$this->db->insert()
	}

	public function atualizar(){

	}
	public function pesquisar_usuarios(){
		return $this->db->get('usuario')
	}
}
?>
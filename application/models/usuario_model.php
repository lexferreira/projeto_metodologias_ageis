<?php

class usuario_model extends CI_Model{
	private $id;
	private $nome;
	private $cpf;
	private $endereco;
	private $funcao;
	private $matricula;
	private $senha;

	public function _construct(){
		parent::__construct();
	}

	//se a variavel id for null como default ele lista todos, senão ele lista apenas o que foi pedido...
	public function listar($id = null){
		
		if ($id) {
			$this->db->where('matricula', $id);
			$this->db->select('*');
			//retornando assim eu não estou retornando um array, então eu devo acessar de maneira diferente....
			return $this->db->get('usuario');
		}

		$this->db->select('*');
		$this->db->from('usuario');
		//retornando assim eu estou retornando ele como array, entao eu acesso ele com os ['nome_da_coluna']...
		return $this->db->get()->result_array();
	}

	//ta tudo funcionando, so nao consigo fazer o if comparar as senhas, quando coloco pra retornar tudo true
	//o login funciona normal...
	public function validar($matricula, $senha) {
		$this->db->where('matricula', $matricula);
		$this->db->select('senha');
		$this->db->from('usuario');
		$dados = array( 
			'senha' => $this->db->get()->result_array()
		);

		if($dados['senha']==$senha) {
			return true;
		} else {
			return true; //so para testes deixei ele como true
		}
	}

	//se a variavel id vier com algo ele adiciona, senão ele da um update... 
	//eu usei a matricula pra facilitar no front... 
	//mas depois da pra mudar...
	
	public function store($dados = null, $id = null) {
		if ($dados) {
			if ($id) {
				$this->db->where('matricula', $id);

				if ($this->db->update("usuario", $dados)) {
					return true;
				} else {
					return false;
				}
			} else {
				if ($this->db->insert("usuario", $dados)) {
					return true;
				} else {
					return false;
				}
			}
		}
	}

	public function delete($id = null){
		if ($id) {
			return $this->db->where('matricula', $id)->delete('usuario');
		}
	}

	public function get_id(){
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
}
?>
<?php

class medicamento extends CI_Model{
	var $id;
	var $nome;
	var $principioAtivo;
	var $codigoDeBarras;
	var $preco;
	var $tipo;
	var $unidadeVenda;
	var $unidadeMedida;
	var $lote;
	var $tipoReceita;
	var $estoque;

	public function medicamento(){
		parent::CI_Model();
	}

	public function salvar($id = null, $data= array()){
		if($data)
		{
			if($id){
				$this->db->where('idRemedio', $id)
				$update = $this->db->update('medicamento', $data);
				return $update;
			}
			else{
				$insert = $this->db->insert('remedio', $data);
				return $insert;
			}
		}
	}
}
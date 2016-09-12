<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model {

	// var $matricula = '';
	// var $nome = '';
	// var $cpf = '';
	// var $endereco = '';
	function __construct() {
		parent::__construct();
	}

	function get($id = null) {
		$this->load->database();
		
		if ($id) {
			$this->db->where('idUsuario', $id);
		}
			$this->db->order_by("idUsuario", 'desc');
			return $this->db->get('usuario');
	}	
}

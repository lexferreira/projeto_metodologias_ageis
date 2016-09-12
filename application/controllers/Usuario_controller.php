<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_controller extends CI_Controller {

	public function index()
	{
		$data = array();
        $data['title'] = 'Vendrafarma - Usuario';
		$this->load->helper('url');
		$this->load->view('pages/cadastro_usuario');
	}

	public function pesquisar_usuarios(){
		$this->load->model('usuario_model');
		$usuarios = $this->Usuario_model->pesquisar_usuarios();
		$data['usuarios'] = $this->Usuario_model->pesquisar_usuarios();
		$this->load->view('cadastro_usuario', $data);
	}
}

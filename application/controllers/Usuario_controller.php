<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_controller extends CI_Controller {

	public function index()
	{
		$this->load->model('Usuario_model');
		$data = array();
        $data['title'] = 'Vendrafarma - Usuario';
        $data['usuarios'] = $this->Usuario_model->get();
        
		$this->load->helper('url');
		$this->load->view('pages/usuario',$data);
	}

	public function pesquisar_usuarios(){
		$this->load->model('usuario_model');
		$usuarios = $this->Usuario_model->pesquisar_usuarios();
		$data['usuarios'] = $this->Usuario_model->pesquisar_usuarios();
		$this->load->view('cadastro_usuario', $data);
	}
}

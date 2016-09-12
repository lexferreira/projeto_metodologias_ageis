<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
		$this->load->helper('form');
		$data = array(
			'title' => 'Vendrafarma - Login',
			'message' => 'Bem vindo! faça seu login'
		);
		$this->load->view('login', $data);
	}

	public function logar() {
		$this->load->library('form_validation');
		$this->load->helper('url');
		$this->load->model('Usuario_model');

		$regras = array(
		        array(
		                'field' => 'matricula',
		                'label' => 'matricula',
		                'rules' => 'required'
		        ),
		        array(
		                'field' => 'senha',
		                'label' => 'senha',
		                'rules' => 'required'
		        )
		);

		$this->form_validation->set_rules($regras);

		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'title' => 'Vendrafarma - Login',
				'message' => 'Confira os dados...'
			);
			$this->load->view('login', $data);

		} else {

			$login = array(
				"matricula" => $this->input->post('matricula'),
				"senha" => $this->input->post('senha')
			);

			if($this->Usuario_model->validar($dados['matricula'],$dados['senha'])) {
				$data = array();
		        $data['title'] = 'Usuarios';
		        $data['usuarios'] = $this->Usuario_model->listar();
		        $this->load->view('pages/usuario',$data);

			} else {

				$data = array();
		        $data['title'] = 'Vendrafarma - Login';
				$this->load->view('login',$data);

			}
	}
		

	}
}

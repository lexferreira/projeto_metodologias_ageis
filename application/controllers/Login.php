<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

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
		$this->load->model('usuario_model');

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
		//caso nao valide as inputs
			$this->load->helper('url');
			$data = array(
				'title' => 'VendraFarma - login',
				'message' => 'Confira os dados...'
			);
			$this->load->view('login', $data);

		} else {

			$login = array(
				"matricula" => $this->input->post('matricula'),
				"senha" => $this->input->post('senha')
			);

			if($this->usuario_model->validar($login['matricula'],$login['senha'])) { 
				// se conferir
		        $data = array(
					'title' => 'Cadastro',
					'usuarios' => $this->usuario_model->listar()
				);
				$this->load->view('pages/usuario',$data);

			} else {
				$data = array(
					'title' => 'validacao',
					'message' => 'erro no login'
				);
				$this->load->view('login',$data);

			}
		}
		
	}
}

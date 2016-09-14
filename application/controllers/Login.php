<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
		$this->load->helper('form');
		$data = array(
			'title' => 'Vendrafarma - Login',
			'message' => 'Bem vindo! faça seu login',
			'classe_menu' => '--hidden'
		);
		$this->load->view('include/header', $data);
		$this->load->view('login', $data);
		$this->load->view('include/footer', $data);
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
			$this->load->helper('url');
			$data = array(
				'title' => 'VendraFarma - login',
				'message' => 'Confira os dados...',
				'classe_menu' => '--hidden'
			);
			$this->load->view('include/header', $data);
			$this->load->view('login', $data);
			$this->load->view('include/footer', $data);

		} else {

			$matricula = $this->input->post('matricula');
			$senha = $this->input->post('senha');

			if($this->usuario_model->validar($matricula, $senha)) { 
				$this->load->helper('url');
		        $data = array(
					'title' => 'Cadastro',
					'usuarios' => $this->usuario_model->listar(),
					 'classe_menu' => ''
				);
				$this->load->view('include/header', $data);
				$this->load->view('pages/usuario', $data);
				$this->load->view('include/footer', $data);

			} else {
				$this->load->helper('url');
				$data = array(
					'title' => 'validacao',
					'message' => 'erro no login',
					'classe_menu' => '--hidden'
				);
				$this->load->view('include/header', $data);
				$this->load->view('login', $data);
				$this->load->view('include/footer', $data);

			}
		}
		
	}
}

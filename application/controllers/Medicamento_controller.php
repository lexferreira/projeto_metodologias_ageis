<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Medicamento_controller extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
		redirect('login');
	}

	public function salvar(){
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('medicamento_model');

		$regras = array(
		        array(
		                'field' => 'nome',
		                'label' => 'nome',
		                'rules' => 'required'
		        ),
		        array(
		                'field' => 'principio',
		                'label' => 'codigoBarras',
		                'rules' => 'required'
		        ),array(
		                'field' => 'preco',
		                'label' => 'preco',
		                'rules' => 'required'
		        ),
		        array(
		                'field' => 'tipo',
		                'label' => 'tipo',
		                'rules' => 'required'
		        ),array(
		                'field' => 'unidadeVenda',
		                'label' => 'unidadeVenda',
		                'rules' => 'required'
		        ),
		        array(
		                'field' => 'unidadeMedida',
		                'label' => 'unidadeMedida',
		                'rules' => 'required'
		        ),
		        array(
		                'field' => 'lote',
		                'label' => 'lote',
		                'rules' => 'required'
		        ),
		        array(
		        		'field' => 'tipoReceita',
		        		'label' => 'tipoReceta',
		        		'rules' => 'required'
		        	)
		        array(
		        		'field' => 'estoque',
		        		'label' => 'estoque',
		        		'rules' => 'required'
		        	)
		);
		$this->form_validation->set_rules($regras);
		if($this->form_validation->run()==FALSE){
			$data = array(
				'title' => 'CadastroMedicamento',
				'message' => 'Erro na inserção de dados do medicamento!' 
			);
			$this->load->view('include/header',$data);
			$this->load->view('pages/cadastro_medicamento',$data);
			$this->load->view('include/footer',$data);
		}
	}
}

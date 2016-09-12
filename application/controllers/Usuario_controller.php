<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_controller extends CI_Controller {

	public function index()
	{
		//carregando bibliotecas necessarias dentro da função, isso depois deve ser carregado num construtor.
		$this->load->model('Usuario_model');
		$this->load->helper('url');
		$this->load->helper('form');

		$data = array();//definindo um array
        $data['title'] = 'Vendrafarma - Usuario';
        $data['subTitle'] = 'teste';
        $data['usuarios'] = $this->Usuario_model->listar();//chamando a funcao listar do usuario model que foi chamado acima.
		$this->load->view('pages/usuario',$data);//passando todos esses dados para a view que foi chamada
	}

	public function form() {
		// foi a maneira que enconrei pra abrir o formulario sem fazer as verificações, acho que assim nao e bom usar nao, mas funcionou kkk
		$this->load->helper('url');
		$this->load->helper('form');
		$data = array(
			'title' => 'Cadastro',
			'message' => 'Cadastre os dados'
		);
		$this->load->view('pages/cadastro_usuario',$data);
	}

	public function adicionar() {//funcao para adicionar dados.
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('Usuario_model');
		//Isso é tudo validação...
		$regras = array(
		        array(
		                'field' => 'matricula',
		                'label' => 'matricula',
		                'rules' => 'required'
		        ),
		        array(
		                'field' => 'nome',
		                'label' => 'nome',
		                'rules' => 'required'
		        ),array(
		                'field' => 'cpf',
		                'label' => 'cpf',
		                'rules' => 'required'
		        ),
		        array(
		                'field' => 'endereco',
		                'label' => 'endereco',
		                'rules' => 'required'
		        ),array(
		                'field' => 'funcao',
		                'label' => 'funcao',
		                'rules' => 'required'
		        ),
		        array(
		                'field' => 'senha',
		                'label' => 'senha',
		                'rules' => 'required'
		        ),
		        array(
		                'field' => 'senha_',
		                'label' => 'senha_',
		                'rules' => 'required'
		        )
		);
		$this->form_validation->set_rules($regras);
		if ($this->form_validation->run() == FALSE) {//se não validar 

			$data = array(
				'title' => 'Cadastro',
				'message' => 'Erro ao inserir'
			);
			//chama a pagina novamente exibindo as mensagens de erro.
			$this->load->view('pages/cadastro_usuario',$data);

		} else {//senão ele pega os dados inseridos

			$dados = array (
				'matricula' => $this->input->post('matricula'),
				'nome' => $this->input->post('nome'),
				'cpf' => $this->input->post('cpf'),
				'endereco' => $this->input->post('endereco'),
				'funcao' => $this->input->post('funcao'),
				'senha' => $this->input->post('senha'),
			);
			//nesse caso o id nao existe, mas se fosse um alter ele existiria, caso ele seja passado assim sera feita uma adição e não alteração...
			$id = $this->input->post('id');
			if($this->Usuario_model->store($dados)) {//se tudo ocorrer bem no insert ele exibe as mensagens senão ele da erro...
				$data = array(
					'title' => 'Cadastro',
					'message' => 'Usuario adicionado',
					'usuarios' => $this->Usuario_model->listar()
				);
				$this->load->view('pages/usuario',$data);

			} else {

				$data = array(
					'title' => 'Cadastro',
					'message' => 'Erro ao inserir no banco'
				);
				$this->load->view('pages/cadastro_usuario',$data);
			}
			
		}
	}
}

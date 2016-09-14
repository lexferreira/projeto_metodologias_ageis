<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class usuario_controller extends CI_Controller {

	//essa função é a executada se voce chamar apenas o controller na sua url...
	public function index()
	{//carregando bibliotecas necessarias dentro da função, isso depois deve ser carregado num construtor.
		$this->load->model('Usuario_model');
		$this->load->helper('url');
		$this->load->helper('form');
		$data = array(
			'title' => 'Vendrafarma - Usuario',
			'usuarios' => $this->Usuario_model->listar()
		);
		$this->load->view('include/header',$data);
		$this->load->view('pages/usuario',$data);
		$this->load->view('include/footer',$data);
	}

	//essa funcao e chamada se voce colocar o nome dela depois do nome da controller na url "Usuario_controller/form"
	public function form() {
		$this->load->helper('url');
		$this->load->helper('form');
		$data = array(
			'title' => 'Cadastro',
			'message' => 'Cadastre os dados'
		);
		$this->load->view('include/header',$data);
		$this->load->view('pages/cadastro_usuario',$data);
		$this->load->view('include/footer',$data);
	}

	//essa funcao e chamada se voce colocar o nome dela depois do nome da controller na url "Usuario_controller/form_alterar/
	public function form_alterar($id = null) {
		$this->load->model('Usuario_model');
		$this->load->helper('url');
		$this->load->helper('form');
		// abre o formulario para alterar
		if ($id) {
			//listando todos os usuarios e guardando na variavel
			$usuarios = $this->Usuario_model->listar($id);
			//se houver mais que um usuario
			if ($usuarios->num_rows() > 0 ) {
				//passando os atributos referentes ao usuario listado
				$data['title'] = 'Edição de Registro';
				$data['message'] ='edite';
				$data['matricula'] = $usuarios->row()->matricula;
				$data['nome'] = $usuarios->row()->nome;
				$data['cpf'] = $usuarios->row()->CPF;
				$data['endereco'] = $usuarios->row()->endereco;
				$data['funcao'] = $usuarios->row()->funcao;
				$data['id'] = $usuarios->row()->matricula; //sim estou settando o id com a matricula
				//chamando a view e passando os atributos para ela preencher
				$this->load->view('include/header',$data);
				$this->load->view('pages/cadastro_usuario',$data);
				$this->load->view('include/footer',$data);
			}
		}
	}

	public function adicionar() {
	//funcao para adicionar dados.
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

		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'title' => 'Cadastro',
				'message' => 'Erro ao inserir'
			);
			$this->load->view('include/header',$data);
			$this->load->view('pages/cadastro_usuario',$data);
			$this->load->view('include/footer',$data);

		} else {
			//senão ele pega os dados inseridos
			$dados = array (
				'matricula' => $this->input->post('matricula'),
				'nome' => $this->input->post('nome'),
				'cpf' => $this->input->post('cpf'),
				'endereco' => $this->input->post('endereco'),
				'funcao' => $this->input->post('funcao'),
				'senha' => $this->input->post('senha'),
			);
			// caso ele seja passado assim sera feita uma adição e não alteração...
			$id = $this->input->post('id');
			if($this->Usuario_model->store($dados,$id)) {//se tudo ocorrer bem no insert ele exibe as mensagens senão exibe erro.
				$data = array(
					'title' => 'Cadastro',
					'usuarios' => $this->Usuario_model->listar()
				);
				$this->load->view('include/header',$data);
				$this->load->view('pages/usuario',$data);
				$this->load->view('include/footer',$data);

			} else {
				$data = array(
					'title' => 'Cadastro',
					'message' => 'Erro ao inserir no banco'
				);
				$this->load->view('include/header',$data);
				$this->load->view('pages/cadastro_usuario',$data);
				$this->load->view('include/footer',$data);
			}
			
		}
	}

	public function delete($id=null) {
		$this->load->model('Usuario_model');
		$this->load->helper('url');
		$this->Usuario_model->delete($id);
		$data = array(
					'title' => 'Cadastro',
					'usuarios' => $this->Usuario_model->listar()
				);
		$this->load->view('pages/usuario',$data);
	}
}

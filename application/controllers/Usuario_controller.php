<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class usuario_controller extends CI_Controller {

	//essa função é a executada se voce chamar apenas o controller na sua url...
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

	//essa funcao e chamada se voce colocar o nome dela depois do nome da controller na url "Usuario_controller/form"
	public function form() {
		// abre o formulario para inserir
		$this->load->helper('url');
		$this->load->helper('form');
		$data = array(
			'title' => 'Cadastro',
			'message' => 'Cadastre os dados'
		);
		$this->load->view('pages/cadastro_usuario',$data);
	}

	//essa funcao e chamada se voce colocar o nome dela depois do nome da controller na url "Usuario_controller/form_alterar/
	//parametro1/parametro2/... etc". não esta funcionando ainda, nao consegui passar o parametro ainda...
	public function form_alterar($id = null) {
		$this->load->model('Usuario_model');
		$this->load->helper('url');
		$this->load->helper('form');
		// abre o formulario para alterar
		$this->load->model('Usuario_model');
		if ($id) {
			//se o parametro for passado
			//listando todos os usuarios e guardando na variavel
			$usuarios = $this->Usuario_model->listar($id);
			//se houver mais que um usuario
			if ($usuarios->num_rows() > 0 ) {
				//passando os atributos referentes ao usuario listado
				$dados['title'] = 'Edição de Registro';
				$dados['message'] ='edite';
				$dados['matricula'] = $usuarios->row()->matricula;
				$dados['nome'] = $usuarios->row()->nome;
				$dados['cpf'] = $usuarios->row()->CPF;
				$dados['endereco'] = $usuarios->row()->endereco;
				$dados['funcao'] = $usuarios->row()->funcao;
				$dados['id'] = $usuarios->row()->matricula; //sim estou settando o id com a matricula
				//chamando a view e passando os atributos para ela preencher
				$this->load->view('pages/cadastro_usuario', $dados);
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

		if ($this->form_validation->run() == FALSE) {//se não validar 
			$data = array(
				'title' => 'Cadastro',
				'message' => 'Erro ao inserir'
			);
			//chama a pagina novamente exibindo as mensagens de erro.
			$this->load->view('pages/cadastro_usuario',$data);

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
			//nesse caso o id nao existe, mas se for um alter ele existiria,
			// caso ele seja passado assim sera feita uma adição e não alteração...
			$id = $this->input->post('id');
			if($this->Usuario_model->store($dados,$id)) {//se tudo ocorrer bem no insert ele exibe as mensagens senão ele da erro...
				$data = array(
					'title' => 'Cadastro',
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

	public function delete($id=null) {
		$this->load->model('Usuario_model');
		$this->Usuario_model->delete($id);
	}
}

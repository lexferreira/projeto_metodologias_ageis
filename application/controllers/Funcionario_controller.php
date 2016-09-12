<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Funcionario_controller extends CI_Controller {

	public function index()
	{
		$data = array();
        $data['title'] = 'Vendrafarma - Cliente';
		$this->load->helper('url');
		$this->load->view('pages/cadastro_cliente',$data);
	}
}

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
}

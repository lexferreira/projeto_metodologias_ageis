<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function index()
	{
		$data = array();
        $data['title'] = 'Vendrafarma - Login';
		$this->load->helper('url');
		$this->load->view('Login', $data);
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Medicamento_controller extends CI_Controller {

	public function index()
	{
        $data['title'] = 'Vendrafarma - Medicamentos';
		$this->load->helper('url');
		$this->load->view('pages/medicamento');
	}
}

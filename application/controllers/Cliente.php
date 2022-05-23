<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('clientes');
		$this->load->view('footer');
	}
}

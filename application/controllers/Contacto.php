<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contacto extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('contacto');
		$this->load->view('footer');
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reclamaciones extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('reclamaciones');
		$this->load->view('footer');
	}
}

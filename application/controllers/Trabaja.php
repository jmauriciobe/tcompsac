<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Trabaja extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('trabaja');
		$this->load->view('footer');
	}
}

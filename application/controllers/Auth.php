<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    public function index()
	{
		$this->load->view('Auth/Login');
	}

    public function register()
	{
		$this->load->view('Auth/Register');
	}
}

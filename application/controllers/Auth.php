<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}
    
	public function index()
	{
		$data['title']='Halaman Masuk Pengguna';
		$this->load->view('Templates/Auth_Header');
		$this->load->view('Auth/Login');
		$this->load->view('Templates/Auth_footer');
	}

    public function register()
	{
		$this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email'
        );
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password dont match!',
            'min_length' => 'Password too short!'
        ]);

        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

		if($this->form_validation->run() == false){
			$data['title']='Halaman Registrasi Pengguna';
			$this->load->view('Templates/Auth_Header',$data);
			$this->load->view('Auth/Register');
			$this->load->view('Templates/Auth_footer');
		} else {
            $email = $this->input->post('email', true);
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($email),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 0,
                'date_created' => time()
            ];
		}
	}
}

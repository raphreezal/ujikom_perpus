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
        $data['title'] = 'Halaman Masuk Pengguna';
        $this->load->view('Templates/Auth_Header', $data);
        $this->load->view('Auth/Login');
        $this->load->view('Templates/Auth_footer');
    }

    public function register()
    {
        $this->form_validation->set_rules('name', 'Nama Lengkap', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'Email ini sudah terdaftar!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]');
        $this->form_validation->set_rules('password2', 'Konfirmasi Password', 'required|trim|matches[password1]');

        if($this->form_validation->run() == false) {
            $data['title'] = 'Halaman Registrasi Pengguna';
            $this->load->view('Templates/Auth_Header', $data);
            $this->load->view('Auth/Register');
            $this->load->view('Templates/Auth_footer');
        } else {
            echo'ok';
        }
    }
}
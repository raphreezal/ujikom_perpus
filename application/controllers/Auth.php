<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->database();
        $this->load->library('session');
        $this->load->helper('url');
    }

    public function index() {
        $data['title'] = 'Halaman Masuk Pengguna';
        $this->load->view('Templates/Auth_Header', $data);
        $this->load->view('Auth/Login');
        $this->load->view('Templates/Auth_footer');
    }

    public function login() {
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email', [
            'required' => 'Email harus diisi!',
            'valid_email' => 'Email tidak valid!'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim', [
            'required' => 'Kata sandi harus diisi!'
        ]);
    
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Halaman Masuk Pengguna';
            $this->load->view('Templates/Auth_Header', $data);
            $this->load->view('Auth/Login');
            $this->load->view('Templates/Auth_footer');
        } else {
            $email = $this->input->post('email');
            $password = $this->input->post('password');
    
            $user = $this->db->get_where('user', ['email' => $email])->row_array();
    
            if ($user) {
                if (password_verify($password, $user['password'])) {
                    $this->session->set_userdata('user_id', $user['id']);
                    $this->session->set_userdata('username', $user['username']);
                    $this->session->set_userdata('email', $user['email']);
                    $this->session->set_userdata('role_id', $user['role_id']);
                    $this->session->set_userdata('is_active', $user['is_active']);
    
                    // Redirect berdasarkan role_id
                    if ($user['role_id'] == 1) {
                        redirect('Admin/dashmin');
                    } else {
                        redirect('Libra/index');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password salah!</div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email tidak terdaftar!</div>');
                redirect('auth');
            }
        }
    }

    public function register() {
        $this->form_validation->set_rules('username', 'Nama Lengkap', 'required|trim',[
            'required' => 'Nama harus diisi!'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'Email ini sudah terdaftar!',
            'required' => 'Email harus diisi!',
            'valid_email' => 'Email tidak valid!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[6]|max_length[20]|matches[password2]', [
            'matches' => 'Kata sandi tidak sama!',
            'required' => 'Kata sandi harus diisi!',
            'min_length' => 'Kata sandi minimal 6 karakter!',
            'max_length' => 'Kata sandi maksimal 20 karakter!'
        ]);
        $this->form_validation->set_rules('password2', 'Konfirmasi Password', 'required|trim|matches[password1]',[
            'required' => 'Konfirmasi Kata Sandi harus diisi!',
            'matches' => 'Kata sandi tidak sama!'
        ]);

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Halaman Registrasi Pengguna';
            $this->load->view('Templates/Auth_Header', $data);
            $this->load->view('Auth/Register');
            $this->load->view('Templates/Auth_footer');
        } else {
            $data = [
                'username' => htmlspecialchars($this->input->post('username', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 1,
                'date_created' => time()
            ];
            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Akun berhasil dibuat. Silakan login!</div>');
            redirect('auth');
        }
    }

    public function logout() {
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');
        $this->session->unset_userdata('is_active');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Anda telah logout!</div>');
        redirect('auth');
    }
}

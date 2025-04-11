<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->database();
        $this->load->library('session');
        $this->load->helper('url'); // Memuat URL helper
    }

    public function index() {
        $data['title'] = 'Halaman Masuk Pengguna';
        $this->load->view('Templates/Auth_Header', $data);
        $this->load->view('Auth/Login');
        $this->load->view('Templates/Auth_footer');
    }

    public function login() {
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
    
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
                    $this->session->set_userdata('name', $user['name']);
                    $this->session->set_userdata('email', $user['email']);
                    $this->session->set_userdata('role_id', $user['role_id']);
                    $this->session->set_userdata('is_active', $user['is_active']);
    
                    redirect('Libra/index'); // Pastikan ini benar
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
        $this->form_validation->set_rules('name', 'Nama Lengkap', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'Email ini sudah terdaftar!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[6]|matches[password2]', [
            'matches' => 'Password tidak sama!',
            'min_length' => 'Password minimal 6 karakter!'
        ]);
        $this->form_validation->set_rules('password2', 'Konfirmasi Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Halaman Registrasi Pengguna';
            $this->load->view('Templates/Auth_Header', $data);
            $this->load->view('Auth/Register');
            $this->load->view('Templates/Auth_footer');
        } else {
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
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
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->database(); // Pastikan database dimuat
    }

    // Login function
    public function index()
    {
        // Set form validation rules for login
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        // Check if form validation is successful
        if ($this->form_validation->run() == false) {
            // Load the login view again with error messages
            $data['title'] = 'Halaman Masuk Pengguna';
            $this->load->view('Templates/Auth_Header', $data);
            $this->load->view('Auth/Login');
            $this->load->view('Templates/Auth_footer');
        } else {
            // Get email and password from POST data
            $email = htmlspecialchars($this->input->post('email', true));
            $password = $this->input->post('password');

            // Check if the email exists in the database
            $user = $this->db->get_where('user', ['email' => $email, 'is_active' => 1])->row_array();

            // If user exists and password is correct
            if ($user) {
                // Verify password
                if (password_verify($password, $user['password'])) {
                    // Password is correct, create session data
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id'],
                        'name' => $user['name'],
                        'is_logged_in' => true
                    ];

                    $this->session->set_userdata($data);

                    // Redirect to dashboard or home page after successful login
                    redirect('user/index'); // Adjust 'dashboard' route as per your app structure
                } else {
                    // Incorrect password
                    $this->session->set_flashdata('message', 'Password salah!');
                    redirect('auth'); // Redirect to login page if password is incorrect
                }
            } else {
                // User not found or inactive
                $this->session->set_flashdata('message', 'Email tidak terdaftar atau akun tidak aktif!');
                redirect('auth'); // Redirect to login page if user is not found
            }
        }
    }

    // Registration function
    public function register()
    {
        // Set form validation rules for registration
        $this->form_validation->set_rules('name', 'Nama Lengkap', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'Email ini sudah terdaftar!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[6]|matches[password2]', [
            'min_length' => 'Kata sandi terlalu pendek!',
            'matches' => 'Kata sandi salah!'
        ]);
        $this->form_validation->set_rules('password2', 'Konfirmasi Password', 'required|trim|matches[password1]', [
            'matches' => 'Kata sandi salah!'
        ]);

        // Check if form validation is successful
        if ($this->form_validation->run() == false) {
            // Show registration form again with errors
            $data['title'] = 'Halaman Registrasi Pengguna';
            $this->load->view('Templates/Auth_Header', $data);
            $this->load->view('Auth/Register');
            $this->load->view('Templates/Auth_footer');
        } else {
            // Prepare data to insert into the 'user' table
            $userData = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'image' => 'default.jpg',  // Default image for the user
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT), // Hash the password
                'role_id' => 2,  // Assuming '2' represents the role for a regular user
                'is_active' => 1,  // User is active by default
                'date_created' => time()  // Store the time of registration
            ];

            // Insert user data into database directly using CI Query Builder
            $this->db->insert('user', $userData);

            // Check if the insertion was successful
            if ($this->db->affected_rows() > 0) {
                // Set flash data to show a success message
                $this->session->set_flashdata('message', 'Registrasi berhasil! Silakan login.');
                redirect('auth');  // Redirect to login page
            } else {
                // Set flash data for errors
                $this->session->set_flashdata('message', 'Terjadi kesalahan saat registrasi. Coba lagi.');
                redirect('auth/register');  // Redirect back to registration page
            }
        }
    }
}

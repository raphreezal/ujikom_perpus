<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Libra extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        // Ensure the user is logged in
        if (!$this->session->userdata('user_id')) {
            redirect('auth');
        }
    }

    public function index() {
        $data['title'] = 'Dashboard Perpustakaan';
        $this->load->view('Templates/Header', $data);
        $this->load->view('Templates/Sidebar');
        $this->load->view('Libra/index');
        $this->load->view('Templates/Footer');
    }
}
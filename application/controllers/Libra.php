<?php defined('BASEPATH') or exit('No direct script access allowed');

class Libra extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');

        // Cek apakah user sudah login
        if (!$this->session->userdata('user_id')) {
            redirect('auth');
        }
    }

    public function index()
    {
        $data = [
            'title' => 'Dashboard Perpustakaan'
        ];

        // Template utama
        $this->load->view('templates/header', $data);      // Head, open body, topbar
        $this->load->view('templates/sidebar');            // Sidebar navigasi
        $this->load->view('libra/index', $data);           // Isi konten utama
        $this->load->view('templates/footer');             // Footer + JS + Close tag
    }

    public function bacaonline()
    {
        $data = [
            'title' => 'Dashboard Perpustakaan'
        ];

        // Template utama
        $this->load->view('templates/header', $data);      // Head, open body, topbar
        $this->load->view('templates/sidebar');            // Sidebar navigasi
        $this->load->view('libra/index', $data);           // Isi konten utama
        $this->load->view('templates/footer');             // Footer + JS + Close tag
    }
}

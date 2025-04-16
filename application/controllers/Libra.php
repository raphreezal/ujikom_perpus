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
        $this->load->view('libra/bacaonline', $data);           // Isi konten utama
        $this->load->view('templates/footer');             // Footer + JS + Close tag
    }

    // ========== HALAMAN BUKU PERPUS ==========
    public function buku_fisik() {
        $data['title'] = 'Katalog Buku Perpustakaan';
        $data['buku'] = $this->db->get('buku')->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar'); // Atau 'adm_side' jika khusus admin
        $this->load->view('libra/buku_fisik', $data);
        $this->load->view('templates/footer');
    }
}

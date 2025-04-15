<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library(['session', 'upload']);
        $this->load->helper(['url', 'form']);
        $this->load->database();

        // Cek apakah user sudah login
        if (!$this->session->userdata('user_id')) {
            redirect('auth');
        }

        // Cek apakah user adalah admin (role_id = 1)
        if ($this->session->userdata('role_id') != 1) {
            show_error('Anda tidak memiliki akses ke halaman ini.', 403, 'Akses Ditolak');
        }
    }

    public function dashmin() {
        $data['title'] = 'Admin Dashboard';
        $data['total_buku'] = $this->db->count_all('buku');
        $data['total_user'] = $this->db->count_all('user');

        $this->db->order_by('date_created', 'DESC');
        $data['pengguna_baru'] = $this->db->get('user', 5)->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/adm_side');
        $this->load->view('admin/dashmin', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_buku() {
        $data['title'] = 'Tambah Buku';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('admin/tambah_buku', $data);
        $this->load->view('templates/footer');
    }

    public function post_buku() {
        $judul     = $this->input->post('judul');
        $slug      = $this->input->post('slug');
        $deskripsi = $this->input->post('deskripsi');

        // Pastikan folder uploads/cover tersedia
        $upload_folder = realpath(APPPATH . '../uploads/cover');
        if (!$upload_folder || !is_dir($upload_folder)) {
            show_error("Folder upload tidak ditemukan atau tidak valid: $upload_folder", 500);
            return;
        }

        // Konfigurasi upload
        $config['upload_path']   = $upload_folder;
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['file_name']     = time() . '_cover';
        $config['overwrite']     = true;

        $this->upload->initialize($config);

        if (!$this->upload->do_upload('cover')) {
            $error = $this->upload->display_errors();
            show_error("Gagal upload cover: $error", 500);
            return;
        }

        $upload_data = $this->upload->data();
        $cover = $upload_data['file_name'];

        // Simpan ke database
        $data = [
            'judul'  => $judul,
            'slug'   => $slug,
            'detail' => $deskripsi,
            'cover'  => $cover,
            'writer' => '',
        ];

        $this->db->insert('buku', $data);
        redirect('admin/dashmin');
    }

    public function daftar_buku() {
        $data['title'] = 'Daftar Buku';
    
        // Ambil semua data buku dari tabel
        $data['buku'] = $this->db->get('buku')->result();
    
        // Load view
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('admin/daftar_buku', $data);
        $this->load->view('templates/footer');
    }
    
}

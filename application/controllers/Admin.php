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
    
        // Ambil jumlah buku dari tabel 'buku'
        $data['total_buku'] = $this->db->count_all('buku');
    
        // Ambil jumlah user dari tabel 'user'
        $data['total_user'] = $this->db->count_all('user');
    
        // Ambil 5 pengguna terbaru berdasarkan kolom 'date_created'
        $this->db->order_by('date_created', 'DESC');
        $data['pengguna_baru'] = $this->db->get('user', 5)->result();
    
        // Load view dashboard
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
        $judul = $this->input->post('judul');
        $slug = $this->input->post('slug');
        $deskripsi = $this->input->post('deskripsi');
    
        // Upload Cover
        $config['upload_path'] = base_url() . "uploads/";
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['file_name'] = time() . '_cover';
        $config['overwrite'] = true;
    
        $this->load->library('upload', $config);
    
        if (!$this->upload->do_upload('cover')) {
            $error = $this->upload->display_errors();
            show_error("Gagal upload cover: $error", 500);
            return;
        }
    
        $cover = $this->upload->data('file_name');
    
        // Simpan ke database
        $data = [
            'judul'     => $judul,
            'writer'    => '', // Kalau kamu pakai input writer, sesuaikan ini
            'detail'    => $deskripsi, // karena kolomnya `detail` di DB
            'cover'     => $cover
        ];
    
        $this->db->insert('buku', $data);
    
        // Redirect ke dashboard
        redirect('admin/dashmin');
    }
    
    
}

<?php defined('BASEPATH') or exit('No direct script access allowed');
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peminjaman extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
        $this->load->helper('url');
    }


    // Ajuan pinjam oleh user
    public function ajukan($id_buku) {
        $id_user = $this->session->userdata('user_id');
        $tanggal_pinjam = date('Y-m-d');
        $tanggal_kembali = date('Y-m-d', strtotime('+4 days'));

        $data = [
            'id_user' => $id_user,
            'id_buku' => $id_buku,
            'tanggal_pinjam' => $tanggal_pinjam,
            'tanggal_kembali' => $tanggal_kembali,
            'status' => 'pending'
        ];

        $this->db->insert('peminjaman', $data);

        $this->session->set_flashdata('message', '<div class="alert alert-success">Ajuan peminjaman berhasil dikirim!</div>');
        redirect('libra/index');
    }

    // Admin menyetujui ajuan
    public function acc($id) {
        $this->db->where('id_peminjaman', $id);
        $this->db->update('peminjaman', ['status' => 'diterima']);
        redirect('peminjaman/list_ajuan');
    }

    // Admin menolak ajuan
    public function tolak($id) {
        $this->db->where('id_peminjaman', $id);
        $this->db->update('peminjaman', ['status' => 'ditolak']);
        redirect('peminjaman/list_ajuan');
    }
}

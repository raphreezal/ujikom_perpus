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

    public function daftar_buku() {
        $data['title'] = 'Manajemen Buku';
        $data['buku']  = $this->db->get('buku')->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/adm_side');
        $this->load->view('admin/daftar_buku', $data);
        $this->load->view('templates/footer');
    }

    public function simpan_buku() {
        $judul     = $this->input->post('judul');
        $slug      = $this->input->post('slug');
        $deskripsi = $this->input->post('deskripsi');

        $cover = '';
        if (!empty($_FILES['cover']['name'])) {
            $upload_folder = realpath(APPPATH . '../uploads/cover');
            $config['upload_path']   = $upload_folder;
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['file_name']     = time() . '_cover';
            $config['overwrite']     = true;

            $this->upload->initialize($config);

            if ($this->upload->do_upload('cover')) {
                $upload_data = $this->upload->data();
                $cover = $upload_data['file_name'];
            } else {
                $this->session->set_flashdata('upload_error', $this->upload->display_errors());
                redirect('admin/daftar_buku');
                return;
            }
        }

        $data = [
            'judul'  => $judul,
            'slug'   => $slug,
            'detail' => $deskripsi,
            'cover'  => $cover,
            'writer' => '',
        ];

        $this->db->insert('buku', $data);
        redirect('admin/daftar_buku');
    }

    public function update_buku($id) {
        $judul     = $this->input->put('judul');
        $slug      = $this->input->put('slug');
        $deskripsi = $this->input->put('deskripsi');

        $data_update = [
            'judul'  => $judul,
            'slug'   => $slug,
            'detail' => $deskripsi,
        ];

        if (!empty($_FILES['cover']['name'])) {
            $upload_folder = realpath(APPPATH . '../uploads/cover');
            $config['upload_path']   = $upload_folder;
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['file_name']     = time() . '_cover';
            $config['overwrite']     = true;

            $this->upload->initialize($config);

            if ($this->upload->do_upload('cover')) {
                $upload_data = $this->upload->data();
                $data_update['cover'] = $upload_data['file_name'];
            } else {
                $this->session->set_flashdata('upload_error', $this->upload->display_errors());
                redirect('admin/daftar_buku');
                return;
            }
        }

        $this->db->where('id_buku', $id);
        $this->db->update('buku', $data_update);
        redirect('admin/daftar_buku');
    }

    public function hapus_buku($id) {
        $buku = $this->db->get_where('buku', ['id_buku' => $id])->row();
        if ($buku) {
            $cover_path = APPPATH . '../uploads/cover/' . $buku->cover;
            if (file_exists($cover_path)) {
                unlink($cover_path);
            }
            $this->db->delete('buku', ['id_buku' => $id]);
        }
        redirect('admin/daftar_buku');
    }

    public function daftar_user() {
        $data['title'] = 'Manajemen User';
        $data['user']  = $this->db->get('user')->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/adm_side');
        $this->load->view('admin/daftar_user', $data);
        $this->load->view('templates/footer');
    }
    
    public function simpan_user() {
        $data = [
            'username'     => $this->input->post('username'),
            'email'        => $this->input->post('email'),
            'password'     => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            'role_id'      => $this->input->post('role_id'),
            'date_created' => date('Y-m-d H:i:s')
        ];
        $this->db->insert('user', $data);
        redirect('admin/daftar_user');
    }
    
    public function update_user($id) {
        $data_update = [
            'username' => $this->input->post('username'),
            'email'    => $this->input->post('email'),
            'role_id'  => $this->input->post('role_id')
        ];
    
        // Update password jika diisi
        $password = $this->input->post('password');
        if (!empty($password)) {
            $data_update['password'] = password_hash($password, PASSWORD_DEFAULT);
        }
    
        $this->db->where('id', $id);
        $this->db->update('user', $data_update);
        redirect('admin/daftar_user');
    }
    
    public function hapus_user($id) {
        $this->db->delete('user', ['id' => $id]);
        redirect('admin/daftar_user');
    }
    
}

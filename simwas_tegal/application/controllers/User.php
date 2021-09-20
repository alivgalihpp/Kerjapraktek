<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model', 'model');
        is_logout();
        $this->user = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
    }

    public function read_data()
    {
        is_admin();
        $data = [
            'judul' => 'Daftar Laporan',
            'user' => $this->user,
            'data' => $this->model->getData()
        ];
        $data['jenispengawasan'] = $this->db->get('jenispengawasan')->result();
        $data['timpengawasan'] = $this->db->get('timpengawasan')->result();
        $data['pengaduan'] = $this->db->get('pengaduan')->result();
        
        
        
        $this->templating->load('user/pengaduan', $data);
    }

    public function ubah_data()
    {
        if (isset($_POST['ubah-data'])) {
            $this->model->ubah_data();
        } else {
            redirect('auth/notfound');
        }
    }

    public function tambah_data() //tambah-pengaduan
    {
        is_admin();
        $data = [
            'judul' => 'Tambah Laporan',
            'user' => $this->user
        ];
        $data['jenispengawasan'] = $this->db->get('jenispengawasan')->result();
        $data['timpengawasan'] = $this->db->get('timpengawasan')->result();

        $this->templating->load('user/tambah', $data);
    }

    public function tambah_data_aksi()
    {
        if ($this->input->is_ajax_request() == true) {
            $this->form_validation->set_rules('instansi_id', 'Id Instansi', 'required');
            $this->form_validation->set_rules('id_jenispengawasan', 'Jenis Pengawasan', 'required');
            $this->form_validation->set_rules('tanggal_pelaksanaan', 'Tanggal Pelaksanaan', 'required');
            $this->form_validation->set_rules('id_timpengawasan', 'Jenis Pengawasan', 'required');
            $this->form_validation->set_rules('obrik', 'Obrik', 'required');
            $this->form_validation->set_rules('no_hasil_pengawasan', 'Nomor Hasil Pengawasan', 'required');
            $this->form_validation->set_rules('tanggal_hasil_pengawasan', 'Tanggal Hasil Pengawasan', 'required');
            $this->form_validation->set_rules('rekomendasi', 'Rekomandasi', 'required');
            $this->form_validation->set_rules('hasil_tindak_lanjut', 'Hasil Tindak Lanjut');

            $this->form_validation->set_error_delimiters('', '');

            if ($this->form_validation->run() == false) {
                $errors = [
                    'instansi_id' => form_error('instansi_id'),
                    'id_jenispengawasan' => form_error('id_jenispengawasan'),
                    'tanggal_pelaksanaan' => form_error('tanggal_pelaksanaan'),
                    'id_timpengawasan' => form_error('id_timpengawasan'),
                    'obrik' => form_error('obrik'),
                    'no_hasil_pengawasan' => form_error('no_hasil_pengawasan'),
                    'tanggal_hasil_pengawasan' => form_error('tanggal_hasil_pengawasan'),
                    'rekomendasi' => form_error('rekomendasi'),
                    'hasil_tindak_lanjut' => form_error('hasil_tindak_lanjut')
                ];

                $data = [
                    'status' => FALSE,
                    'errors' => $errors
                ];

                $this->output->set_content_type('application/json')->set_output(json_encode($data));
            } else {
                $this->model->tambah_data();
                $data['status'] = TRUE;
                $this->output->set_content_type('application/json')->set_output(json_encode($data));
            }
        } else {
            //echo "error";
            redirect('tambah-pengaduan');
        }
    }

    public function ubah_data_aksi()
    {
        $data['pengaduan'] = $this->db->get('pengaduan')->result();
        if ($this->input->is_ajax_request() == true) {
            $this->form_validation->set_rules('instansi_id', 'Id Instansi', 'required');
            $this->form_validation->set_rules('id_jenispengawasan', 'Jenis Pengawasan', 'required');
            $this->form_validation->set_rules('tanggal_pelaksanaan', 'Tanggal Pelaksanaan', 'required');
            $this->form_validation->set_rules('id_timpengawasan', 'Jenis Pengawasan', 'required');
            $this->form_validation->set_rules('obrik', 'Obrik', 'required');
            $this->form_validation->set_rules('no_hasil_pengawasan', 'Nomor Hasil Pengawasan', 'required');
            $this->form_validation->set_rules('tanggal_hasil_pengawasan', 'Tanggal Hasil Pengawasan', 'required');
            $this->form_validation->set_rules('rekomendasi', 'Rekomandasi', 'required');
            $this->form_validation->set_rules('hasil_tindak_lanjut', 'Hasil Tindak Lanjut', 'required');

            $this->form_validation->set_error_delimiters('', '');

            if ($this->form_validation->run() == false) {
                $errors = [
                    'instansi_id' => form_error('instansi_id'),
                    'id_jenispengawasan' => form_error('id_jenispengawasan'),
                    'tanggal_pelaksanaan' => form_error('tanggal_pelaksanaan'),
                    'id_timpengawasan' => form_error('id_timpengawasan'),
                    'obrik' => form_error('obrik'),
                    'no_hasil_pengawasan' => form_error('no_hasil_pengawasan'),
                    'tanggal_hasil_pengawasan' => form_error('tanggal_hasil_pengawasan'),
                    'rekomendasi' => form_error('rekomendasi'),
                    'hasil_tindak_lanjut' => form_error('hasil_tindak_lanjut')
                ];

                $data = [
                    'status' => FALSE,
                    'errors' => $errors
                ];

                $this->output->set_content_type('application/json')->set_output(json_encode($data));
            } else {
                $this->model->ubah_data();
                $data['status'] = TRUE;
                $this->output->set_content_type('application/json')->set_output(json_encode($data));
            }
        } else {
            //echo "error";
            redirect('daftar-pengaduan');
        }
        
    }

    public function ubah_password()
    {
        $data = [
            'user' => $this->user,
            'judul' => 'Ubah Password'
        ];

        $this->form_validation->set_rules('password', 'Password Lama', 'required');
        $this->form_validation->set_rules('newpass', 'Password Baru', 'required|min_length[8]');
        $this->form_validation->set_rules('newpass2', 'Konfirmasi Password', 'required|matches[newpass]');

        if ($this->form_validation->run() == false) {
            $this->templating->load('user/ubah-password', $data);
        } else {
            $this->model->ubah_password();
        }
    }
}

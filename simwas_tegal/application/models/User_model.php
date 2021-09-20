<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    public function getData()
    {
        return $this->db->get_where('view_pengaduan', ['instansi_id' => $this->user['id']])->result_array();
    }

    public function ubah_data()
    {
        $where = [
            'id' => $this->input->post('id')
        ];

        $data = [
            'instansi_id' => $this->input->post('instansi_id'),
            'id_jenispengawasan' => $this->input->post('id_jenispengawasan'),
            'tanggal_pelaksanaan' => $this->input->post('tanggal_pelaksanaan'),
            'id_timpengawasan' => $this->input->post('id_timpengawasan'),
            'obrik' => $this->input->post('obrik'),
            'no_hasil_pengawasan' => $this->input->post('no_hasil_pengawasan'),
            'tanggal_hasil_pengawasan' => $this->input->post('tanggal_hasil_pengawasan'),
            'rekomendasi' => $this->input->post('rekomendasi'),
            'hasil_tindak_lanjut' => $this->input->post('hasil_tindak_lanjut'),
            'tgl_pengaduan' => date('Y-m-d')
        ];

        $query = $this->db->update('pengaduan', $data, $where);

        if ($this->db->affected_rows($query) > 0) {
            $this->session->set_flashdata('msg', 'diupdate.');
            //redirect('daftar-pengaduan');
        } else {
            $this->session->set_flashdata('err', 'diupdate.');
            //redirect('daftar-pengaduan');
        }
    }

    public function tambah_data()
    {
        $data = [
            'instansi_id' => $this->input->post('instansi_id'),
            'id_jenispengawasan' => $this->input->post('id_jenispengawasan'),
            'tanggal_pelaksanaan' => $this->input->post('tanggal_pelaksanaan'),
            'id_timpengawasan' => $this->input->post('id_timpengawasan'),
            'obrik' => $this->input->post('obrik'),
            'no_hasil_pengawasan' => $this->input->post('no_hasil_pengawasan'),
            'tanggal_hasil_pengawasan' => $this->input->post('tanggal_hasil_pengawasan'),
            'rekomendasi' => $this->input->post('rekomendasi'),
            'hasil_tindak_lanjut' => $this->input->post('hasil_tindak_lanjut'),
            'tgl_pengaduan' => date('Y-m-d')
        ];

        $this->db->insert('pengaduan', $data);
        $this->session->set_flashdata('msg', 'submit.');
    }

    public function ubah_password()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $upass = $data['user']['password'];
        $pass = $this->input->post('password');
        $newpass = $this->input->post('newpass');

        // jika password yang di verify tidak sama dengan password user dari db
        if (!password_verify($pass, $upass)) {
            $this->session->set_flashdata('msg', 'Password Lama Salah!');
            redirect('ubah-password');
        } else {
            // jika input password lama sama dengan input password baru
            if ($newpass == $pass) {
                $this->session->set_flashdata('msg', 'Password baru tidak boleh sama dengan password lama.');
                redirect('ubah-password');
            } else {
                // jika tidak sama dengan password baru
                $pass_hash = password_hash($newpass, PASSWORD_DEFAULT);

                $this->db->set('password', $pass_hash);
                $this->db->where('username', $this->session->userdata('username'));
                $this->db->update('user');

                $this->session->set_flashdata('ubahpass', '<div class="alert alert-success">Password berhasil diubah.</div>');
                redirect('ubah-password');
            }
        }
    }
}

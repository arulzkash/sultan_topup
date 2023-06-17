<?php

class M_Mahasiswa extends CI_Model
{

    public function getAllMahasiswa()
    {
        return $this->db->get('t_mahasiswa')->result_array();
    }

    public function getJurusan()
    {
        return $this->db->get('t_jurusan')->result_array();
    }

    public function getMahasiswaJurusanByID($id)
    {
        $this->db->select('*');
        $this->db->from('t_mahasiswa');
        $this->db->join('t_jurusan', 't_mahasiswa.jurusan = t_jurusan.id_jurusan', 'inner');
        $this->db->where('id', $id);
        return $this->db->get()->row_array();
    }

    public function tambahDataMahasiswa()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "nrp" => $this->input->post('nrp', true),
            "email" => $this->input->post('email', true),
            "jurusan" => $this->input->post('jurusan', true)
        ];

        $this->db->insert('t_mahasiswa', $data);
    }

    public function hapusDataMahasiswa($id)
    {
        // $this->db->delete('t_mahasiswa', array('id' => $id));
        $this->db->delete('t_mahasiswa', ['id' => $id]);
    }

    public function getMahasiswaById($id)
    {
        return $this->db->get_where('t_mahasiswa', ['id' => $id])->row_array();
    }

    public function ubahDataMahasiswa()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "nrp" => $this->input->post('nrp', true),
            "email" => $this->input->post('email', true),
            "jurusan" => $this->input->post('jurusan', true)
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('t_mahasiswa', $data);
    }

    public function cariDataMahasiswa(){
        $keyword = $this->input->post('keyword');
        $this->db->select('*');
        $this->db->from('t_mahasiswa');
        $this->db->join('t_jurusan', 't_mahasiswa.jurusan = t_jurusan.id_jurusan', 'inner');
        $this->db->like('nama', $keyword);
        $this->db->or_like('nama_jurusan', $keyword);
        $this->db->or_like('nrp', $keyword);
        $this->db->or_like('email', $keyword);
        return $this->db->get()->result_array();
    }
}

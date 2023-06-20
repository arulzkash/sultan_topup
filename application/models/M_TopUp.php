<?php

class M_TopUp extends CI_Model
{
    public function getAllGames()
    {
        return $this->db->get('t_game')->result_array();
    }

    public function getAllPembayaranByID($id)
    {
        $query = $this->db->query("SELECT * FROM t_pembayaran WHERE id_pembayaran = $id");
        $data = $query->row_array();
        return $data;
    }

    public function getAllGamesByName($name)
    {
        $this->db->like('nama_game', $name);
        return $this->db->get('t_game')->row_array();
    }

    public function GetGamesByID($id)
    {
        $this->db->where('id_game', $id);
        return $this->db->get('t_game')->row_array();
    }

    public function getAllPesan()
    {
        return $this->db->get('t_pesan')->result_array();
    }

    public function getAllMetode()
    {
        return $this->db->get('t_metode')->result_array();
    }

    public function getMetodeByID($id)
    {
        $this->db->where('id_metode', $id);
        return $this->db->get('t_metode')->row_array();
    }

    public function getAllVoucher()
    {
        return $this->db->get('t_voucher')->result_array();
    }

    public function getAllVoucherByIDGames($id)
    {
        return $this->db->get_where('t_voucher', ['id_game' => $id])->result_array();
    }

    public function getVoucherByID($id)
    {
        return $this->db->get_where('t_voucher', ['id_voucher' => $id])->row_array();
    }

    public function getAllVoucherGame()
    {
        $this->db->select('*');
        $this->db->from('t_voucher');
        $this->db->join('t_game', 't_voucher.id_game = t_game.id_game', 'inner');
        return $this->db->get()->result_array();
    }

    public function getAllStruk()
    {
        return $this->db->get('t_struk')->result_array();
    }



    public function insertStruk($data, $discount)
    {
        $gmtOffestTime = 5 * 3600;
        $currentDateTime = now() + $gmtOffestTime;
        $formattedDateTime = date('H:i:s l, d F', $currentDateTime);

        // var_dump($data);
        $harga = $data['voucher']['harga_voucher'];
        $harga = $harga - ($discount / 100 * $harga);

        $data = [
            "uid_game" => $this->input->post('uid', true),
            "waktu" => $formattedDateTime,
            "tanggal_struk" => date('Y-m-d', $currentDateTime),
            "id_voucher" => $this->input->post('id_voucher', true),
            "id_metode" => $this->input->post('id_metode', true),
            "total_amount" => $harga,
        ];

        $this->db->insert('t_struk', $data);

        $id_terakhir = $this->db->insert_id();
        $pengguna = $this->session->userdata('pengguna');
        $id = $pengguna['id_user'];

        $data2 = [
            "id_struk" => $id_terakhir,
            "status_pembayaran" => '0',
            "id_user" => $id,
        ];
        $this->db->insert('t_pembayaran', $data2);
        $id_terakhir = $this->db->insert_id();
        return $id_terakhir;
    }

    public function getAllByID()
    {
        $this->db->select('*');
        $this->db->from('t_struk');
        $this->db->join('t_metode', 't_struk.id_metode = t_metode.id_metode', 'inner');
        $this->db->join('t_voucher', 't_struk.id_voucher = t_voucher.id_voucher', 'inner');
        $this->db->join('t_game', 't_voucher.id_game = t_game.id_game', 'inner');
        $this->db->where('t_game.id_game', $this->input->post('id_game', true),);
        $this->db->where('t_voucher.id_voucher', $this->input->post('id_voucher', true),);
        $this->db->where('t_metode.id_metode', $this->input->post('id_metode', true),);
        return $this->db->get()->row_array();
    }

    public function getAll()
    {
        $this->db->select('*');
        $this->db->from('t_struk');
        $this->db->join('t_metode', 't_struk.id_metode = t_metode.id_metode', 'inner');
        $this->db->join('t_voucher', 't_struk.id_voucher = t_voucher.id_voucher', 'inner');
        $this->db->join('t_game', 't_voucher.id_game = t_game.id_game', 'inner');
        return $this->db->get()->result_array();
    }

    public function getAllAdmin()
    {
        $this->db->select('*');
        $this->db->from('t_struk');
        $this->db->join('t_metode', 't_struk.id_metode = t_metode.id_metode', 'inner');
        $this->db->join('t_voucher', 't_struk.id_voucher = t_voucher.id_voucher', 'inner');
        $this->db->join('t_game', 't_voucher.id_game = t_game.id_game', 'inner');
        $this->db->order_by('t_struk.waktu', 'asc');
        return $this->db->get()->result_array();
    }

    public function StrukByUID($uid)
    {
        $this->db->select('*');
        $this->db->from('t_struk');
        $this->db->join('t_metode', 't_struk.id_metode = t_metode.id_metode', 'inner');
        $this->db->join('t_voucher', 't_struk.id_voucher = t_voucher.id_voucher', 'inner');
        $this->db->join('t_game', 't_voucher.id_game = t_game.id_game', 'inner');
        $this->db->where('t_struk.uid_game', $uid);
        return $this->db->get()->result_array();
    }

    public function getAllDataById($id)
    {
        $query = $this->db->query("SELECT * FROM t_pembayaran inner join t_struk on t_struk.id_struk = t_pembayaran.id_struk inner join t_metode on t_metode.id_metode = t_struk.id_metode inner join t_voucher on t_voucher.id_voucher = t_struk.id_voucher inner join t_game on t_game.id_game = t_voucher.id_game where t_pembayaran.id_pembayaran = $id");
        $data = $query->row_array();
        return $data;
    }

    public function getAllData()
    {
        $query = $this->db->query("SELECT * FROM t_pembayaran inner join t_struk on t_struk.id_struk = t_pembayaran.id_struk inner join t_metode on t_metode.id_metode = t_struk.id_metode inner join t_voucher on t_voucher.id_voucher = t_struk.id_voucher inner join t_game on t_game.id_game = t_voucher.id_game left join t_verifikasi on t_verifikasi.id_verifikasi = t_struk.id_verifikasi" );
        $data = $query->result_array();
        return $data;
    }

    public function getAllDataByUser($id)
    {
        $query = $this->db->query("SELECT * FROM t_pembayaran inner join t_struk on t_struk.id_struk = t_pembayaran.id_struk inner join t_metode on t_metode.id_metode = t_struk.id_metode inner join t_voucher on t_voucher.id_voucher = t_struk.id_voucher inner join t_game on t_game.id_game = t_voucher.id_game inner join t_user on t_user.id_user = t_pembayaran.id_user  where t_pembayaran.id_user = $id order by t_pembayaran.id_struk desc" );
        $data = $query->result_array();
        return $data;
    }

    public function pembayaranStruk($id)
    {
        $query = $this->db->query("SELECT * from t_pembayaran inner join t_struk on t_struk.id_struk = t_pembayaran.id_struk where id_pembayaran = $id " );
        $data = $query->row_array();
        return $data;
    }

    
}

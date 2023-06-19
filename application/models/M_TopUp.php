<?php

class M_TopUp extends CI_Model
{
    public function getAllGames()
    {
        return $this->db->get('t_game')->result_array();
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

    public function getAllPesan(){
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
        $harga = $data['voucher'][0]['harga_voucher'];
        $harga = $harga - ($discount/100*$harga);

        $data = [
            "uid_game" => $this->input->post('uid', true),
            "waktu" => $formattedDateTime,
            "id_voucher" => $this->input->post('id_voucher', true),
            "id_metode" => $this->input->post('id_metode', true),
            "total_amount" => $harga,
        ];

        $this->db->insert('t_struk', $data);

    }

    public function getAllByID(){
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

    public function getAll(){
        $this->db->select('*');
        $this->db->from('t_struk');
        $this->db->join('t_metode', 't_struk.id_metode = t_metode.id_metode', 'inner');
        $this->db->join('t_voucher', 't_struk.id_voucher = t_voucher.id_voucher', 'inner');
        $this->db->join('t_game', 't_voucher.id_game = t_game.id_game', 'inner');
        return $this->db->get()->result_array();
    }

    public function StrukByUID($uid){
        $this->db->select('*');
        $this->db->from('t_struk');
        $this->db->join('t_metode', 't_struk.id_metode = t_metode.id_metode', 'inner');
        $this->db->join('t_voucher', 't_struk.id_voucher = t_voucher.id_voucher', 'inner');
        $this->db->join('t_game', 't_voucher.id_game = t_game.id_game', 'inner');
        $this->db->where('t_struk.uid_game', $uid);
        return $this->db->get()->result_array();
    }

   
}

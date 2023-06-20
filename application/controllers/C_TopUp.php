<?php

class C_TopUp extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('date');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $searchData = $this->session->flashdata('search_data');
        $data['judul'] = 'Sultan Top UP';
        $data['games'] = $this->M_TopUp->getAllGames();


        if ($searchData) {
            $data['struk'] = $searchData['struk'];
            // Muat tampilan dengan data pencarian
            $this->load->view('templates/header2', $data);
            $this->load->view('x/index', $data);
        } else {
            $this->load->view('templates/header2', $data);
            $this->load->view('x/index', $data);
        }
    }

    public function transaksi($id)
    {
        $data['judul'] = 'Transaki Sultan';
        $data['game'] = $this->M_TopUp->getGamesById($id);
        $data['metode'] = $this->M_TopUp->getAllMetode();
        $data['voucher'] = $this->M_TopUp->getAllVoucherByIDGames($id);
        $this->load->view('templates/header', $data);
        $this->load->view('x/transaksi', $data);
    }

    public function aksiTransaksi()
    {
        $data['voucher'] = $this->M_TopUp->getVoucherByID($this->input->post('id_voucher', true));
        $id = $data['voucher']['id_game'];
        $data['game'] = $this->M_TopUp->getGamesById($id);
        $discount = $data['game']['discount'];
        
        // var_dump($discount);

        $this->M_TopUp->insertStruk($data, $discount);

        $data['all'] = $this->M_TopUp->getAllByID();

        $this->session->set_flashdata('data', $data);
        $this->session->set_flashdata('success', 'Pembayaran Sukses!');

        redirect('C_TopUp/struk');
    }

    public function struk()
    {

        $data = $this->session->flashdata('data');
        $this->session->keep_flashdata('data');
        $data['judul'] = 'Struk Sultan';


        $this->load->view('templates/header', $data);
        $this->load->view('x/struk', $data);
    }


    public function search()
    {
        // Ambil nilai uid_game dari pengguna
        $uid_game = $this->input->post('uid_game');

        // Panggil model untuk melakukan pencarian data
        $data['struk'] = $this->M_TopUp->strukByUID($uid_game);

        // // Tampilkan hasil pencarian pada view yang sama
        // $data['judul'] = 'Sultan Top UP';
        // $data['games'] = $this->M_TopUp->getAllGames();
        // $this->load->view('templates/header2', $data);
        // $this->load->view('x/index#search', $data);

        $this->session->set_flashdata('search_data', $data);
        redirect('C_TopUp/index#search');
    }
}

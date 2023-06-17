<?php

class C_Transaksi extends CI_Controller
{
    public function index($id)
    {
        $data['judul'] = 'Transaki Sultan';
        // $data['games'] = $this->M_X->getAllGames();
        $data['game'] = $this->M_X->getGamesById($id);
        var_dump($data);
        $data['metode'] = $this->M_X->getAllMetode();
        $this->load->view('templates/header2', $data);
        $this->load->view('x/transaksi', $data);
    }

    // public function transaksi($id)
    // {
    //     $data['judul'] = 'Transaki Sultan';
    //     // $data['games'] = $this->M_X->getAllGames();
    //     $data['game'] = $this->M_X->getGamesById($id);
    //     var_dump($data);
    //     $data['metode'] = $this->M_X->getAllMetode();
    //     $this->load->view('templates/header2', $data);
    //     $this->load->view('x/transaksi', $data);
    // }
}

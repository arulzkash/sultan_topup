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
        if ($this->session->has_userdata('pengguna') == 1) {
            $pengguna = $this->session->userdata('pengguna');
            $id = $pengguna['id_user'];
            $data['alldata'] = $this->M_TopUp->getAllDataByUser($id);
        }


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

    public function login()
    {
        $data['judul'] = "Login User";
        $this->load->view('templates/header_admin', $data);
        $this->load->view('x/login', $data);
        $this->load->view('templates/footer_admin', $data);

    }

    public function registrasi()
    {
        $data['judul'] = "Registrasi User";
        $this->load->view('templates/header_admin', $data);
        $this->load->view('x/registrasi', $data);
        $this->load->view('templates/footer_admin', $data);

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
        if ($this->session->has_userdata('pengguna') != 1) {
            redirect('C_TopUp/login');
        } else {
            $data['voucher'] = $this->M_TopUp->getVoucherByID($this->input->post('id_voucher', true));
            $id = $data['voucher']['id_game'];
            $data['game'] = $this->M_TopUp->getGamesById($id);
            $discount = $data['game']['discount'];

            // var_dump($discount);

            $id_struk = $this->M_TopUp->insertStruk($data, $discount);
            $data['id_terakhir'] = $id_struk;

            // var_dump($id_struk);

            $this->session->set_flashdata('upload', 'Silahkan lakukan pembayaran!');


            redirect('C_topUp/verifikasi/' . $id_struk);




            // $data['judul'] = 'Verifikasi Sultan';


            // $this->load->view('templates/header', $data);
            // $this->load->view('x/verifikasi', $data);



            // $data['all'] = $this->M_TopUp->getAllByID();

            // $this->session->set_flashdata('data', $data);
            // $this->session->set_flashdata('success', 'Pembayaran Sukses!');

            // redirect('C_TopUp/struk');
        }
    }

    public function aksiVerifikasi()
    {
        $gmtOffestTime = 5 * 3600;
        $currentDateTime = now() + $gmtOffestTime;
        $formattedDateTime = date('H:i:s l, d F', $currentDateTime);

        $id = $this->input->post('id_struk');
        $config['upload_path'] = './assetx/assets/images';  // Ubah sesuai dengan direktori tujuan penyimpanan gambar
        $config['allowed_types'] = 'jpg';  // Tentukan jenis file gambar yang diizinkan

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('foto_verifikasi')) {
            $data = $this->upload->data();
            $nama_file = $data['file_name'];

            // Lakukan sesuatu dengan nama file, misalnya menyimpan ke database

            $data = [
                "foto_verifikasi" => $nama_file,
            ];

            $this->db->insert('t_verifikasi', $data);

            $id_terakhir = $this->db->insert_id();

            $data2 = [
                "id_verifikasi" => $id_terakhir,
                "waktu" => $formattedDateTime,
                "tanggal_struk" => date('Y-m-d', $currentDateTime),

            ];


            $this->db->where("id_struk", $id);
            $this->db->update('t_struk', $data2);

            $data3 = [
                "status_pembayaran" => '1',
            ];

            $this->db->where("id_struk", $id);
            $this->db->update('t_pembayaran', $data3);

            $query = $this->db->query("SELECT id_pembayaran from t_pembayaran where t_pembayaran.id_struk = $id");
            $data = $query->row_array();

            // var_dump($data['id_pembayaran']);

            $this->session->set_flashdata('verifikasi', 'Tunggu verifikasi Admin');






            // $this->session->set_flashdata('success', 'Game berhasil ditambahkan!');


            // Redirect ke halaman sukses atau tampilkan pesan berhasil
            redirect('C_TopUp/verifikasi/' . $data['id_pembayaran']);
        } else {
            $error = $this->upload->display_errors();
            $id = $this->input->post('id_pembayaran');
            // Redirect ke halaman gagal atau tampilkan pesan error
            redirect('C_TopUp/verifikasi/' .$id);
        }
    }

    public function struk()
    {

        $data = $this->session->flashdata('data');
        $this->session->keep_flashdata('data');
        $data['judul'] = 'Struk Sultan';


        $this->load->view('templates/header', $data);
        $this->load->view('x/struk', $data);
    }

    public function verifikasi($id)
    {
        $data['pembayaran'] = $this->M_TopUp->getAllPembayaranByID($id);
        $data['judul'] = "Sultan Verifikasi";
        $data['all'] = $this->M_TopUp->getAllDataById($id);
        // var_dump($data);
        $id_game = $data['all']['id_game'];
        $data['game'] = $this->M_TopUp->getGamesById($id_game);

        $this->load->view('templates/header', $data);
        $this->load->view('x/verifikasi_status', $data);
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

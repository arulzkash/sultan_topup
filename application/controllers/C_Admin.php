<?php
class C_Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Admin');
        $this->load->helper('date');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = "Admin Page";
        $data['games'] = $this->M_TopUp->getAllGames();
        $data['voucher'] = $this->M_TopUp->getAllVoucher();
        $data['metode'] = $this->M_TopUp->getAllMetode();
        $data['struk'] = $this->M_TopUp->getAllStruk();


        $this->load->view('templates/menu_admin', $data);
        $this->load->view('admin/index');
        $this->load->view('templates/footer_admin', $data);
    }

    public function login()
    {
        $data['judul'] = "Login Sultan";

        $this->load->view('templates/header_admin', $data);

        $this->load->view('admin/login');
        $this->load->view('templates/footer_admin', $data);
    }

    public function games()
    {
        $data['judul'] = "Database Game";
        $data['active_database'] = "open";
        $data['active_game'] = "active";
        $data['games'] = $this->M_TopUp->getAllGames();

        $this->load->view('templates/menu_admin', $data);
        $this->load->view('admin/game');
        $this->load->view('templates/footer_admin', $data);
    }

    public function metode()
    {
        $data['judul'] = "Database Payment Method";
        $data['active_database'] = "open";
        $data['active_metode'] = "active";
        $data['metode'] = $this->M_TopUp->getAllMetode();

        $this->load->view('templates/menu_admin', $data);
        $this->load->view('admin/metode');
        $this->load->view('templates/footer_admin', $data);
    }

    public function voucher()
    {
        $data['judul'] = "Database Voucher";
        $data['active_database'] = "open";
        $data['active_voucher'] = "active";
        $data['voucher'] = $this->M_TopUp->getAllVoucherGame();

        $this->load->view('templates/menu_admin', $data);
        $this->load->view('admin/voucher');
        $this->load->view('templates/footer_admin', $data);
    }

    public function struk()
    {
        $data['judul'] = "Database Receipt";
        $data['active_database'] = "open";
        $data['active_struk'] = "active";
        $data['struk'] = $this->M_TopUp->getAllAdmin();

        $this->load->view('templates/menu_admin', $data);
        $this->load->view('admin/struk');
        $this->load->view('templates/footer_admin', $data);
    }

    public function pembayaran()
    {
        $data['judul'] = "Database Receipt";
        $data['active_database'] = "open";
        $data['active_struk'] = "active";
        $data['struk'] = $this->M_TopUp->getAllData();

        $this->load->view('templates/menu_admin', $data);
        $this->load->view('admin/pembayaran');
        $this->load->view('templates/footer_admin', $data);
    }

    public function konfirmasi_pembayaran($id)
    {
        $gmtOffestTime = 5 * 3600;
        $currentDateTime = now() + $gmtOffestTime;
        $formattedDateTime = date('H:i:s l, d F', $currentDateTime);

        $hasil = $this->M_TopUp->pembayaranStruk($id);
        $data = [
            "status_pembayaran" => '2',
        ];

        $this->db->where("id_pembayaran", $id);
        $this->db->update('t_pembayaran', $data);

        $data2 = [
            "waktu" => $formattedDateTime,
            "tanggal_struk" => date('Y-m-d', $currentDateTime),
        ];

        $this->db->where("id_struk", $hasil['id_struk']);
        $this->db->update('t_struk', $data2);

        $this->session->set_flashdata('selesai', 'Pembayaran berhasil! Ini dia struk anda!');


        redirect('c_admin/pembayaran');
    }

    public function pesan()
    {
        $data['judul'] = "Database Message";
        $data['active_database'] = "open";
        $data['pesan'] = $this->M_TopUp->getAllPesan();
        // var_dump($data);

        $this->load->view('templates/menu_admin', $data);
        $this->load->view('admin/pesan', $data);
        $this->load->view('templates/footer_admin', $data);
    }

    public function aksi_pesan()
    {
        $gmtOffestTime = 5 * 3600;
        $currentDateTime = now() + $gmtOffestTime;
        $formattedDateTime = date('H:i:s l, d F', $currentDateTime);
        $data = [
            "nama_pengirim" => $this->input->post("nama_pengirim"),
            "email_pengirim" => $this->input->post("email_pengirim"),
            "subjek_pesan" => $this->input->post("subjek_pesan"),
            "isi_pesan" => $this->input->post("isi_pesan"),
            "tanggal_pesan" => date('Y-m-d', $currentDateTime)
        ];

        $this->db->insert('t_pesan', $data);

        $this->session->set_flashdata('success', 'Pesan telah terkirim!');
        redirect('C_TopUp/index');
    }

    public function tambah_game()
    {
        $data['judul'] = "Add Game";
        $data['active_database'] = "open";
        $data['active_game'] = "active";

        $this->load->view('templates/menu_admin', $data);
        $this->load->view('admin/tambah_game');
        $this->load->view('templates/footer_admin', $data);
    }

    public function tambah_metode()
    {
        $data['judul'] = "Add Payment Method";
        $data['active_database'] = "open";
        $data['active_metode'] = "active";

        $this->load->view('templates/menu_admin', $data);
        $this->load->view('admin/tambah_metode');
        $this->load->view('templates/footer_admin', $data);
    }

    public function tambah_voucher()
    {
        $data['judul'] = "Add Voucher";
        $data['active_database'] = "open";
        $data['active_voucher'] = "active";
        $data['games'] = $this->M_TopUp->getAllGames();

        $this->load->view('templates/menu_admin', $data);
        $this->load->view('admin/tambah_voucher');
        $this->load->view('templates/footer_admin', $data);
    }


    public function aksi_tambah_game()
    {
        $config['upload_path'] = './assetx/assets/images';  // Ubah sesuai dengan direktori tujuan penyimpanan gambar
        $config['allowed_types'] = 'jpg';  // Tentukan jenis file gambar yang diizinkan

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('foto_game')) {
            $data = $this->upload->data();
            $nama_file = $data['file_name'];
            $nama_game = $this->input->post('nama_game');
            $discount = $this->input->post('discount');

            // Lakukan sesuatu dengan nama file, misalnya menyimpan ke database

            $data = [
                "nama_game" => $nama_game,
                "foto_game" => $nama_file,
                "discount" => $discount
            ];

            $this->db->insert('t_game', $data);

            $this->session->set_flashdata('success', 'Game berhasil ditambahkan!');


            // Redirect ke halaman sukses atau tampilkan pesan berhasil
            redirect('C_Admin/games');
        } else {
            $error = $this->upload->display_errors();
            // Redirect ke halaman gagal atau tampilkan pesan error
            redirect('C_Admin/tambah_game');
        }
    }

    public function aksi_tambah_metode()
    {
        $config['upload_path'] = './assetx/assets/images';  // Ubah sesuai dengan direktori tujuan penyimpanan gambar
        $config['allowed_types'] = 'png';  // Tentukan jenis file gambar yang diizinkan

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('foto_metode')) {
            $data = $this->upload->data();
            $nama_file = $data['file_name'];
            $nama_metode = $this->input->post('nama_metode');

            // Lakukan sesuatu dengan nama file, misalnya menyimpan ke database

            $data = [
                "nama_metode" => $nama_metode,
                "foto_metode" => $nama_file
            ];

            $this->db->insert('t_metode', $data);

            $this->session->set_flashdata('success', 'Metode Pembayaran berhasil ditambahkan!');


            // Redirect ke halaman sukses atau tampilkan pesan berhasil
            redirect('C_Admin/metode');
        } else {
            $error = $this->upload->display_errors();
            // Redirect ke halaman gagal atau tampilkan pesan error
            redirect('C_Admin/tambah_metode');
        }
    }

    public function aksi_tambah_voucher()
    {
        $data = [
            "nama_voucher" => $this->input->post("nama_voucher"),
            "harga_voucher" => $this->input->post("harga_voucher"),
            "id_game" => $this->input->post("id_game")
        ];

        $this->db->insert('t_voucher', $data);

        $this->session->set_flashdata('success', 'Voucher berhasil ditambahkan!');


        // Redirect ke halaman sukses atau tampilkan pesan berhasil
        redirect('C_Admin/voucher');
    }

    public function edit_game($id)
    {
        $data['judul'] = "Edit Game";
        $data['active_database'] = "open";
        $data['active_game'] = "active";
        $data['game'] = $this->M_TopUp->getGamesByID($id);

        $this->load->view('templates/menu_admin', $data);
        $this->load->view('admin/edit_game');
        $this->load->view('templates/footer_admin', $data);
    }

    public function edit_metode($id)
    {
        $data['judul'] = "Edit Metode";
        $data['active_database'] = "open";
        $data['active_metode'] = "active";
        $data['metode'] = $this->M_TopUp->getMetodeByID($id);

        $this->load->view('templates/menu_admin', $data);
        $this->load->view('admin/edit_metode');
        $this->load->view('templates/footer_admin', $data);
    }

    public function edit_voucher($id)
    {
        $data['judul'] = "Edit Voucher";
        $data['active_database'] = "open";
        $data['active_voucher'] = "active";
        $data['games'] = $this->M_TopUp->getAllGames();
        $data['voucher'] = $this->M_TopUp->getVoucherByID($id);
        // var_dump($data);

        $this->load->view('templates/menu_admin', $data);
        $this->load->view('admin/edit_voucher', $data);
        $this->load->view('templates/footer_admin', $data);
    }

    public function aksi_edit_game()
    {
        $config['upload_path'] = './assetx/assets/images';  // Ubah sesuai dengan direktori tujuan penyimpanan gambar
        $config['allowed_types'] = 'jpg';  // Tentukan jenis file gambar yang diizinkan

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('foto_game')) {

            $data = $this->upload->data();
            $nama_file = $data['file_name'];
            $nama_game = $this->input->post('nama_game');
            $discount = $this->input->post('discount');

            // Lakukan sesuatu dengan nama file, misalnya menyimpan ke database

            $data = [
                "nama_game" => $nama_game,
                "foto_game" => $nama_file,
                "discount" => $discount
            ];

            $this->db->where('id_game', $this->input->post('id_game'));
            $this->db->update('t_game', $data);

            $this->session->set_flashdata('success', 'Game berhasil diedit!');


            // Redirect ke halaman sukses atau tampilkan pesan berhasil
            redirect('C_Admin/games');
        } else {
            $data = [
                "nama_game" => $this->input->post('nama_game', true),
                "discount" => $this->input->post('discount', true)
            ];

            $this->db->where('id_game', $this->input->post('id_game'));
            $this->db->update('t_game', $data);

            $this->session->set_flashdata('success', 'Game berhasil diedit!');

            redirect('C_Admin/games');
        }
    }

    public function aksi_edit_metode()
    {
        $config['upload_path'] = './assetx/assets/images';  // Ubah sesuai dengan direktori tujuan penyimpanan gambar
        $config['allowed_types'] = 'png';  // Tentukan jenis file gambar yang diizinkan

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('foto_metode')) {

            $data = $this->upload->data();
            $nama_file = $data['file_name'];
            $nama_metode = $this->input->post('nama_metode');

            // Lakukan sesuatu dengan nama file, misalnya menyimpan ke database

            $data = [
                "nama_metode" => $nama_metode,
                "foto_metode" => $nama_file
            ];

            $this->db->where('id_metode', $this->input->post('id_metode'));
            $this->db->update('t_metode', $data);

            $this->session->set_flashdata('success', 'Metode berhasil diedit!');


            // Redirect ke halaman sukses atau tampilkan pesan berhasil
            redirect('C_Admin/metode');
        } else {
            $data = [
                "nama_metode" => $this->input->post('nama_metode', true),
            ];

            $this->db->where('id_metode', $this->input->post('id_metode'));
            $this->db->update('t_metode', $data);

            $this->session->set_flashdata('success', 'Metode berhasil diedit!');

            redirect('C_Admin/metode');
        }
    }

    public function aksi_edit_voucher()
    {
        $data = [
            "nama_voucher" => $this->input->post("nama_voucher"),
            "harga_voucher" => $this->input->post("harga_voucher"),
            "id_game" => $this->input->post("id_game")
        ];

        $this->db->where('id_voucher', $this->input->post('id_voucher'));
        $this->db->update('t_voucher', $data);

        $this->session->set_flashdata('success', 'Voucher berhasil diedit!');


        // Redirect ke halaman sukses atau tampilkan pesan berhasil
        redirect('C_Admin/voucher');
    }

    public function hapus_game($id)
    {

        $this->db->delete('t_game', ['id_game' => $id]);

        $this->session->set_flashdata('success', 'Game berhasil Dihapus!');

        redirect('C_Admin/games');
    }

    public function hapus_metode($id)
    {

        $this->db->delete('t_metode', ['id_metode' => $id]);

        $this->session->set_flashdata('success', 'Metode Pembayaran berhasil Dihapus!');

        redirect('C_Admin/metode');
    }

    public function hapus_voucher($id)
    {

        $this->db->delete('t_voucher', ['id_voucher' => $id]);

        $this->session->set_flashdata('success', 'Voucher berhasil Dihapus!');

        redirect('C_Admin/voucher');
    }

    public function hapus_struk($id)
    {

        $this->db->delete('t_struk', ['id_struk' => $id]);

        $this->session->set_flashdata('success', 'Struk berhasil Dihapus!');

        redirect('C_Admin/struk');
    }
}

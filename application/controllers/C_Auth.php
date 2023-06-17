<?php
class C_Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Admin');
        $this->load->library('form_validation');
    }

    public function login()
    {
        // Form validation
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            // Tampilkan halaman login jika validasi gagal
            $data['judul'] = "Login Sultan";

            $this->load->view('templates/header_admin', $data);

            $this->load->view('admin/login');
            $this->load->view('templates/footer_admin', $data);
        } else {
            // Ambil input username dan password
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            // Dapatkan data pengguna dari model
            $user = $this->M_Admin->get_user($username);

            if ($user && ($password == $user['password'])) {
                // Jika pengguna valid, set data pengguna ke dalam session
                $this->session->set_userdata('user', $user);

                // Redirect ke halaman beranda atau halaman lain yang diinginkan
                redirect('C_admin/index');
            } else {
                // Jika pengguna tidak valid, tampilkan pesan error
                $data['judul'] = "Login Sultan";
                $data['error'] = 'Invalid username or password';

                $this->load->view('templates/header_admin', $data);

                $this->load->view('admin/login');
                $this->load->view('templates/footer_admin', $data);
               
            }
        }
    }

    public function logout()
    {
        // Hapus data pengguna dari session
        $this->session->unset_userdata('user');

        // Redirect ke halaman login atau halaman lain yang diinginkan
        redirect('C_admin/login');
    }
}

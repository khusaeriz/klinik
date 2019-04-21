<?php

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function login()
    {
        if ($this->session->has_userdata('user_ses')) {
            redirect('dashboard');
        }

        $this->load->view('login');
    }

    public function check()
    {
        // ini buat check user
    }

    public function logout()
    {
        $this->session->sess_destroy();

        redirect('auth/login');
    }
}

<?php

class Pemeriksaan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('layouts/head');
        $this->load->view('pemeriksaan/content');
        $this->load->view('layouts/foot');
    }

    public function tambah()
    {
        $this->load->view('layouts/head');
        $this->load->view('pemeriksaan/tambah');
        $this->load->view('layouts/foot');
    }

    public function edit($id)
    {
        $this->load->view('layouts/head');
        $this->load->view('pemeriksaan/edit');
        $this->load->view('layouts/foot');
    }

    public function hapus($id)
    {
        
    }
}

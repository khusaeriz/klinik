<?php

class Obat extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Obat_model');
    }

    public function index()
    {
        $data['obat'] = $this->Obat_model->get_all();

        $this->load->view('layouts/head');
        $this->load->view('obat/content', $data);
        $this->load->view('layouts/foot');
    }

    public function tambah()
    {
        $this->load->view('layouts/head');
        $this->load->view('obat/tambah');
        $this->load->view('layouts/foot');
    }

    public function insert()
    {
        $data = $this->input->post();

        $this->Obat_model->insert($data);

        redirect('obat');
    }

    public function edit($id)
    {
        $this->load->view('layouts/head');
        $this->load->view('obat/edit');
        $this->load->view('layouts/foot');
    }

    public function hapus($id)
    {
        
    }
}

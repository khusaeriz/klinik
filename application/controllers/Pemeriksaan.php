<?php

class Pemeriksaan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model(array('Pemeriksaan_model', 'Obat_model'));
    }

    public function index()
    {
        $data['pemeriksaan'] = $this->Pemeriksaan_model->get_all();

        $this->load->view('layouts/head');
        $this->load->view('pemeriksaan/content', $data);
        $this->load->view('layouts/foot');
    }

    public function tambah()
    {
        $data['obat'] = $this->Obat_model->get_all();

        $this->load->view('layouts/head');
        $this->load->view('pemeriksaan/tambah', $data);
        $this->load->view('layouts/foot');
    }

    public function insert()
    {
        $data = $this->input->post();
        $data['kd_pemeriksaan'] = $this->Pemeriksaan_model->generate_kd_pemeriksaan();

        $this->Pemeriksaan_model->insert($data);

        redirect('pemeriksaan');
    }

    public function edit($id)
    {
        $data['d'] = $this->Pemeriksaan_model->find_one($id);

        if (empty($data)) {
            redirect('pemeriksaan');
        }

        $this->load->view('layouts/head');
        $this->load->view('pemeriksaan/edit', $data);
        $this->load->view('layouts/foot');
    }

    public function hapus($id)
    {
        
    }
}

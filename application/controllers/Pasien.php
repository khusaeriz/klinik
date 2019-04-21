<?php

class Pasien extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Pasien_model');
    }

    public function index()
    {
        $data['pasien'] = $this->Pasien_model->get_all();
        $data['pasien'] = $this->Pasien_model->hitung_umur($data['pasien']);
        
        $this->load->view('layouts/head');
        $this->load->view('pasien/content', $data);
        $this->load->view('layouts/foot');
    }

    public function tambah()
    {
        $this->load->view('layouts/head');
        $this->load->view('pasien/tambah');
        $this->load->view('layouts/foot');
    }

    public function edit($id)
    {
        $data['d'] = $this->Pasien_model->find_one($id);

        if (empty($data)) {
            redirect('pasien');
        }
        
        $this->load->view('layouts/head');
        $this->load->view('pasien/edit', $data);
        $this->load->view('layouts/foot');
    }

    public function update()
    {
        
        $data   = $this->input->post();

        $this->Pasien_model->update($data['kd_pasien'], $data);
        redirect('pasien');
    }

    public function hapus($id)
    {
        
    }
}

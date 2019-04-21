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
        $data['d'] = $this->Obat_model->find_one($id);

        if (empty($data['d'])) {
            redirect('obat');
        }

        $this->load->view('layouts/head');
        $this->load->view('obat/edit', $data);
        $this->load->view('layouts/foot');
    }

    public function update()
    {        
        $data   = $this->input->post();
        $id     = $data['kd_obat_old'];

        unset($data['kd_obat_old']);

        $check = $this->Obat_model->find(array('kd_obat' => $data['kd_obat']));
        
        if (!empty($check) && $check[0]->kd_obat !== $id) {
            $this->session->set_flashdata('error', 'Kode dokter sudah dipakai');
            $this->edit($id);
        } else {
            $this->Obat_model->update($id, $data);

            redirect('obat');
        }
    }

    public function hapus($id)
    {
        $this->Obat_model->delete($id);
        redirect('obat');
    }
}

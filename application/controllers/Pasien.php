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

    public function rekam_medis($kd_pasien)
    {
        $this->load->model('Pemeriksaan_model');
        $data['list'] = $this->Pemeriksaan_model->rekam_medis($kd_pasien);
        
        $this->load->view('layouts/head');
        $this->load->view('pasien/rekam_medis', $data);
        $this->load->view('layouts/foot');
    }

    public function cetak_rekam_medis($kd_pasien)
    {
        $this->load->model('Pemeriksaan_model');
        $data['list'] = $this->Pemeriksaan_model->rekam_medis($kd_pasien);
        $data['pasien'] = $this->Pasien_model->get_one($kd_pasien);
        
        $this->load->view('pasien/cetak_rekam_medis', $data);
    }

    public function tambah()
    {
        $kd = $this->Pasien_model->generate_kd_pasien();

        $this->load->view('layouts/head');
        $this->load->view('pasien/tambah', array('kd' => $kd));
        $this->load->view('layouts/foot');
    }

    public function insert()
    {
        $this->rules();

        if ($this->validation->run() == false) {
            $this->tambah();
        } else {    
            $data = $this->input->post();
            $data['kd_pasien'] = $this->Pasien_model->generate_kd_pasien();

            $this->Pasien_model->insert($data);
            redirect('pasien');
        }
    }

    public function edit($id)
    {
        $data['d'] = $this->Pasien_model->find_one($id);

        if (empty($data['d'])) {
            redirect('pasien');
        }
        
        $this->load->view('layouts/head');
        $this->load->view('pasien/edit', $data);
        $this->load->view('layouts/foot');
    }

    public function update()
    {
        $this->rules();
        $data   = $this->input->post();

        if ($this->validation->run() == false) {
            $this->edit($data['kd_pasien']);
        } else {
            $this->Pasien_model->update($data['kd_pasien'], $data);
            redirect('pasien');
        }       

    }

    public function hapus($id)
    {
        $this->Pasien_model->delete($id);
        redirect('pasien');
    }

    public function rules()
    {
        $rules = array(
            array(
                'field' => 'kd_pasien',
                'label' => 'Kode Pasien',
                'rules' => 'required'
            ),
            array(
                'field' => 'nama',
                'label' => 'Nama Pasien',
                'rules' => 'required'
            ),
            array(
                'field' => 'jk',
                'label' => 'Jenis Kelamin',
                'rules' => 'required'
            ),
            array(
                'field' => 'gol_darah',
                'label' => 'Golongan Darah',
                'rules' => 'required'
            ),
            array(
                'field' => 'alamat',
                'label' => 'Alamat',
                'rules' => 'required'
            ),
            array(
                'field' => 'tgl_lahir',
                'label' => 'Tanggal Lahir',
                'rules' => 'required'
            ),
        );

        $this->validation->set_rules($rules);
    }
}

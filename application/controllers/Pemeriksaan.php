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
        $data['kd']   = $this->Pemeriksaan_model->generate_kd_pemeriksaan();

        $this->load->view('layouts/head');
        $this->load->view('pemeriksaan/tambah', $data);
        $this->load->view('layouts/foot');
    }

    public function insert()
    {
        $this->rules();

        if ($this->validation->run() == false) {
            $this->tambah();
        } else {    
            $data = $this->input->post();
            $data['kd_pemeriksaan'] = $this->Pemeriksaan_model->generate_kd_pemeriksaan();
            $this->Obat_model->restokObat($data['resep'], 1);
            $data['resep'] = json_encode($data['resep']);
            
            $this->Pemeriksaan_model->insert($data);

            redirect('pemeriksaan');
        }
    }

    public function detail($id)
    {
        $data['d'] = $this->Pemeriksaan_model->get_detail($id);
        
        $data['d']->obat = $this->Obat_model->get_in(json_decode($data['d']->resep, false));
        // print_r($data['d']);
        if (empty($data)) {
            redirect('pemeriksaan');
        }

        $this->load->view('layouts/head');
        $this->load->view('pemeriksaan/detail', $data);
        $this->load->view('layouts/foot');
    }
	
	public function cetak($id) {
        $data['d'] = $this->Pemeriksaan_model->get_detail($id);
        
        $data['d']->obat = $this->Obat_model->get_in(json_decode($data['d']->resep, false));
        // print_r($data['d']);
        if (empty($data)) {
            redirect('pemeriksaan');
        }
		
		$this->load->view('pemeriksaan/cetak', $data);
	}

    public function hapus($id)
    {
        $this->Pemeriksaan_model->delete($id);
        redirect('pemeriksaan');
    }

    public function rules()
    {
        $rules = array(
            array(
                'field' => 'kd_pemeriksaan',
                'label' => 'Kode Pemeriksaan',
                'rules' => 'required'
            ),
            array(
                'field' => 'kd_dokter',
                'label' => 'Dokter',
                'rules' => 'required'
            ),
            array(
                'field' => 'kd_pasien',
                'label' => 'Pasien',
                'rules' => 'required'
            ),
            array(
                'field' => 'hasil_pemeriksaan',
                'label' => 'Hasil Pemeriksaan',
                'rules' => 'required'
            ),
        );

        $this->validation->set_rules($rules);
    }
}

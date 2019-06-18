<?php

class Obat extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Obat_model');
    }

    public function generate_kode()
    {
        $nama_obat = $this->input->get('nama');
        $kode   = $this->Obat_model->get_kode($nama_obat);

        $this->response(array('kode' => $kode));
    }
    
    public function response($res)
    {
        $this->output->set_content_type('application/json')
                    ->set_output(json_encode($res, JSON_PRETTY_PRINT));
    }
}

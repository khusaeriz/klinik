<?php

class Dokter extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Dokter_model');
    }
    
    public function get_last_number()
    {
        $spesialis = $this->input->get('spesialis');
        $last_number = $this->Dokter_model->get_last_number($spesialis);

        $this->response(array('last_number' => $last_number));
    }

    public function index()
    {
        $data = $this->Dokter_model->set_field('kd_dokter, nama')->get_all();

        $this->response($data);
    }

    public function search()
    {
        $q = $this->input->get('q');

        $data = $this->Dokter_model->set_field('kd_dokter, nama')->search(array('nama' => $q), 5);
        $this->response(array(
            'active' => $this->session->userdata('user')->username,
            'list'   => $data
        ));
    }

    public function response($res)
    {
        $this->output->set_content_type('application/json')
                    ->set_output(json_encode($res, JSON_PRETTY_PRINT));
    }
}

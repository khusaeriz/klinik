<?php

class Pasien extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Pasien_model');
    }

    public function search()
    {
        $q = $this->input->get('q');

        $data = $this->Pasien_model->set_field('kd_pasien, nama')->search(array('nama' => $q), 5);
        $this->response($data);
    }

    public function add()
    {
        $data = $this->input->post();
    }

    public function response($res)
    {
        $this->output->set_content_type('application/json')
                    ->set_output(json_encode($res, JSON_PRETTY_PRINT));
    }
}

<?php

class Pasien extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();

        if (!$this->input->is_ajax_request()) {
            // redirect();
        }
        $this->load->model('Pasien_model');
    }

    public function search()
    {
        $q = $this->input->get('q');

        $data = $this->Pasien_model->set_field('kd_pasien, nama, tgl_lahir')->search(array('nama' => $q), 5);
        $data = $this->Pasien_model->hitung_umur($data);
        $this->response($data);
    }

    public function add()
    {
        $data   = $this->input->post();
        

        if (@$data['kd_pasien'] == "") {
            $data['kd_pasien'] = $this->Pasien_model->generate_kd_pasien();
        }

        if ($this->Pasien_model->insert($data)) {
            $res = array(
                'status'    => 'ok',
                'error'     => '',
                'data'      => $data
            );
        } else {
            $res = array(
                'status'    => 'failed',
                'error'     => 'gagal menambahkan data pasien',
                'data'      => array()
            );
        }

        $this->response($res);
    }
    
    protected function response($res)
    {
        $this->output->set_content_type('application/json')
                    ->set_output(json_encode($res, JSON_PRETTY_PRINT));
    }
}

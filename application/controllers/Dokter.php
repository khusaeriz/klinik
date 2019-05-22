<?php

class Dokter extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Dokter_model');
        $this->load->model('User_model');
        $this->load->model('Pasien_model');
    }

    public function index()
    {
        $data['dokter'] = $this->Dokter_model->get_all();

        $this->load->view('layouts/head');
        $this->load->view('dokter/content', $data);
        $this->load->view('layouts/foot');
    }

    public function tambah()
    {
        $this->load->view('layouts/head');
        $this->load->view('dokter/tambah');
        $this->load->view('layouts/foot');
    }

    public function insert()
    {
        $this->rules();

        if ($this->validation->run() == true) {
            $dokter = $this->input->post();

            // data user
            $user = array(
                'nama'      => $this->input->post('nama'),
                'username'  => $this->input->post('kd_dokter'),
                'password'  => md5($this->input->post('password')),
                'role'      => 'dokter'
            );

            unset($dokter['password']);

            $this->Dokter_model->insert($dokter);
            $this->User_model->insert($user);
            redirect('dokter');
        } else {
            $this->tambah();
        }
    }

    public function edit($id)
    {
        $data['dokter'] = $this->Dokter_model->get_one($id);

        if (empty($data['dokter'])) {
            redirect('dokter');
        }

        $this->load->view('layouts/head');
        $this->load->view('dokter/edit', $data);
        $this->load->view('layouts/foot');
    }

    public function update()
    {

        $data   = $this->input->post();
        $id     = $data['kd_dokter_old'];

        unset($data['kd_dokter_old']);
        unset($data['password']);

        $check = $this->Dokter_model->find(array('kd_dokter' => $data['kd_dokter']));
        
        // check kd_dokter yg sama
        if (!empty($check) && $check[0]->kd_dokter !== $id) {
            $this->session->set_flashdata('error', 'Kode dokter sudah dipakai');
            
            $this->edit($id);
        } else {
            $this->Dokter_model->update($id, $data);
            $user = array(
                'username'  => $this->input->post('kd_dokter'),
                'nama'      => $this->input->post('nama')
            );

            // check jika password ingin diganti
            if ($this->input->post('password')) {
                $user['password'] = md5($this->input->post('password'));
            }

            // update data user
            $this->User_model->update($id, $user);

            redirect('dokter');
        }
    }

    public function hapus($id)
    {
        $this->Dokter_model->delete($id);
        $this->Pasien_model->delete($id);

        redirect('dokter');
    }

    public function rules()
    {
        $this->validation->set_rules('kd_dokter', 
                                     'Kode Dokter', 
                                     'required|is_unique[dokter.kd_dokter]', 
                                     array(
                                         'is_unique' => 'Kode Dokter Sudah Digunakan.')
                                    );
    }
}

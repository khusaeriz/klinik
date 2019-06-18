<?php

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function login()
    {
        if ($this->session->has_userdata('user_ses')) {
            redirect('dashboard');
        }

        $this->load->view('login');
    }

    public function check()
    {
		$this->lang->load('form_validation', 'indonesian');
		$rules = array( 
			array(
				'field' => 'username',
				'label' => 'Username',
				'rules' => 'required'
			),
			array(
				'field' => 'password',
				'label' => 'Password',
				'rules' => 'required'
			)
		);
		
		$this->validation->set_rules($rules);
		
		if($this->validation->run()) {
		
			// ini buat check user
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$check    = $this->db->where(array(
				'username' => $username, 
				'password' => md5($password)
				)
			)->get('user');
			
			if ($check->num_rows() > 0) {
				$this->session->set_userdata('user', $check->row());

				redirect('dashboard');
			}
			
			$this->session->set_flashdata('error', 'Gagal Login');
			
			redirect('auth/login');
		} 
		
		$this->session->set_flashdata('error', validation_errors());
		redirect('auth/login');
    }

    public function logout()
    {
        $this->session->sess_destroy();

        redirect('auth/login');
    }
}

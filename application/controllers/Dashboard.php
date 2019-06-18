<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->model(array('Dokter_model', 'Obat_model', 'Pemeriksaan_model'));

		$data['count']['dokter'] 		= $this->Dokter_model->count_all();
		$data['count']['obat'] 			= $this->Obat_model->count_all();
		$data['count']['pemeriksaan'] 	= $this->Pemeriksaan_model->count_all();
		
		$this->load->view('layouts/head');
		$this->load->view('dashboard', $data);
		$this->load->view('layouts/foot');
	}
}

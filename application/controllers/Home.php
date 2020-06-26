<?php

class Home extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('m_data');
		if($this->session->userdata('login')==null){
			redirect('login');
		}
	}

	public function index(){
		//controller home
		$data = array(
			'judul' => 'Data Anggota BPKP', 
			'data_anggota' => $this->m_data->data_anggota(),
			'data_berita' => $this->m_data->data_berita(),
		);
		$this->load->view('v_home', $data);
	}

	public function tambah_aksi(){
			$this->load->library('form_validation');
	      	$this->form_validation->set_rules('no', 'no', 'trim|required');
			$this->form_validation->set_rules('nama', 'nama', 'trim|required');
			$this->form_validation->set_rules('email', 'email', 'trim|required|valid_email');
			$this->form_validation->set_rules('jabatan', 'jabatan', 'trim|required');

		$no = $this->input->post('no');
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$jabatan = $this->input->post('jabatan');


		$data = array(
			'No_Anggota' => $no,
			'Nama_Anggota' => $nama,
			'Email' => $email,
			'Jabatan' => $jabatan,
		);
		$this->m_data->input_data($data, 'anggota');
		redirect('http://localhost/RWEB/home');
	}
}


?>
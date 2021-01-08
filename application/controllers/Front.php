<?php

class Front extends CI_Controller
{
	public function __construct()
	{

		parrent::__construct();
		$this->load->view->model('m_mahasiswa');
	}

	public function index()
	{
		$data['tbl_mhs'] = $this->m_mahasiswa->getAll();
		$this->load->view('front/index', $data);
	}
}
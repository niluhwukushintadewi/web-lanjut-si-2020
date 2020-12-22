<?php

/**
 * 
 */
class Ccontroller extends CI_Controller
{
	
	public function __construct()
	{

		parent::__construct();

		$this->load->model('CModel');
    }

	public function index()
	{
		$data['isi_tabel'] = $this->CModel->semuaData();

		var_dump($data);
		die();
		
		$this->load->view('UTSremed/v_shinta');
		# code...
	}
}
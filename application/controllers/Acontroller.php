<?php


class Acontroller extends CI_Controller
{
	public function __construct()
	{

		parent::__construct();

		$this->load->model('AModel');

	}
	public function index()
    {
       
		$data['tabel_a'] = $this->AModel->getAll();

		 $this->load->view('utsweblanjut/v_input', $data);
		}

	public function tambah()
	{
		 $this->load->view('utsweblanjut/v_output');
	}
	public function input()
	{
		$data=[
			'id_010'=> $this->input->post('id_010'),
			'merek'=> $this->input->post('merek'),
			'jenis'=> $this->input->post('jenis'),
			'stok'=> $this->input->post('stok'),
		];

		$this->AModel->create($data);
		redirect('Acontroller/index','refresh');
		print_r($data);
	}

}
?>
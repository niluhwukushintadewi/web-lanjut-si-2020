<?php 

/**
 * 
 */
class mahasiswa extends CI_Controller
{
	public function index($url_nim ='',$url_jur ='')
	{
       $data['nama'] = 'ni luh wuku shinta dewi';
       $data['umur'] = '20';
       $data['nim']  = $url_nim;
       $data['jurusan'] = $url_jur;

		$this->load->view('mahasiswa/v_index',$data);
	}
	
	public function jurusan()
	{
		# code...
		echo "D3 Sistem Informasi";
	}
}
 ?>
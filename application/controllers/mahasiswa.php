<?php 

/**
 * 
 */
class mahasiswa extends CI_Controller
{
	public function __construct()
	{

		parent::__construct();

		$this->load->model('m_mahasiswa');
		
		if(!$this->session->userdata('nama_pengguna')){
			redirect('login/index');
		}
	}

	public function index($url_nim ='',$url_jur ='')
	{
       $data['nama'] = 'ni luh wuku shinta dewi';
       $data['umur'] = '20'; 
       $data['nim']  = $url_nim;
       $data['jurusan'] = $url_jur;
       
		//$data['tbl_mahasiswa'] = $this->db->get('mahasiswa')->result();
		$data['tbl_mahasiswa'] = $this->m_mahasiswa->getAll();

		$this->load->view('template/header');
		 $this->load->view('mahasiswa/v_index', $data);
	}
	
	public function jurusan()
	{
		# code...
		echo "D3 Sistem Informasi";
	}
public function tambah()
	{
		$this->load->view('template/header');
		 $this->load->view('mahasiswa/v_tambah');
	
	}
	public function simpan_data()
	{
		$data=[
			'nim'=> $this->input->post('nim'),
			'nama'=> $this->input->post('nama'),
			'alamat'=> $this->input->post('alamat'),
		];

		$this->m_mahasiswa->create($data);
		redirect('mahasiswa/index','refresh');
	}

	public function hapus($input_nim)
	{

		$this->m_mahasiswa->delete($nim);
		redirect('mahasiswa/index','refresh');

	}
	public function edit($input_nim)
	{
		$data['data_nim'] = $this->m_mahasiswa->getWhere($input_nim);
			$this->load->view('template/header');
		return $this->load->view('mahasiswa/v_edit', $data);
	}
	public function update()
	{
		
			$nim = $this->input->post('nim');
			$nama = $this->input->post('nama');
			$alamat = $this->input->post('alamat');
	    $data = array (
	    	 'nim' => $nim,
	    	 'nama' => $nama,
	    	 'alamat' => $alamat,
	    	);

		$where = array(
			'nim'=> $nim
		);

		$this->m_mahasiswa->update($where,$data, 'mahasiswa');
		redirect('mahasiswa/index');
	}
}

 ?>
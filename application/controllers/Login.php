<?php


class Login extends CI_Controller
{

	public function index()
	{
		$this->load->view('v_login');
	}

	public function proses()
	{

		$input_username = $this->input->post('txtusername');
		$input_password = md5($this->input->post('txtpassword'));

		$this->load->model('m_pengguna');
		$cek = $this->m_pengguna->cek_login($input_username, $input_password);

		if ($cek->num_rows() > 0) {

			//jika  sesuai maka ambil data tersebut
			$isi = $cek->row_object();

			$data_session = [
					'nama_pengguna' => $isi->nama_lengkap,
					'hak_pengguna' => $isi->hak_akses
			];
			//masukan data pengguna kedalam sesion
			$this->session->set_userdata($data_session);
			redirect('mahasiswa/index');
			# code...
		} else {

			$this->session->set_flashdata('pesan', 'Maaf, Username atau Sandi anda Salah');
			redirect('login/index');
		}
	}

		public function logout()
		{
			$this->session->sess_destroy();
			redirect('Login/index');
		}
}
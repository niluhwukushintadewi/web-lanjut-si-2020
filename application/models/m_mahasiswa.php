<?php

class m_mahasiswa extends CI_Model 
{

	private $tabel = 'mahasiswa';

	public function getAll()

	{

		return $this->db->get($this->tabel)
		            ->result();
	}

	public function create($object)
	{

		return $this->db->insert($this->tabel,$object);
	}

	public function delete($input_nim)
	{
		$this->db->delete($this->tabel, ['nim'=> $input_nim]);
	}

	public function getWhere($input_nim)
	{
		return $this->db->get_Where($this->tabel, ['nim'=> $input_nim])->row_object();
	}
	function update($where,$data,$tabel){
		$this->db->where($where);
		$this->db->update($tabel,$data);
	}
}

?>
<?php

class CModel extends CI_Model
{
	private $table = 'c_tabel';

	public function semuaData()
	{
		return $this->db->get($this->table)->result();
	}
}

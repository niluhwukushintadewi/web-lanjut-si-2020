<?php

class m_pengguna extends CI_Model
{

	private $table = 'pengguna';

	public function cek_login($input_username, $input_password)
	{

		$this->db->where('username', $input_username);
		$this->db->where('password', $input_password);
		return $this->db->get($this->table);

	}
	public function getAll()

	{

		return $this->db->get($this->table)
		            ->result();
}

	public function create($object)
	{

		return $this->db->insert($this->table,$object);

	}

	public function delete($input_username)
	{
		$this->db->delete($this->table, ['username'=> $input_username]);
	}

	public function getWhere($input_username)
	{
		return $this->db->get_Where($this->table, ['username'=> $input_username])->row_object();
	}

	public function update($data, $where, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	
	}
}
<?php
class AModel extends CI_Model {

	private $tabel = 'tabel_a';

	public function getAll(){

		return $this->db->get($this->tabel)
		            ->result();
	}

	public function create($object)
	{

		return $this->db->insert($this->tabel,$object);
	}
}
?>
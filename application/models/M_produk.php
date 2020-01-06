<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_produk extends CI_Model {

	public function tampil()
	{
		return $this->db->get('produk');
	}

	public function save($data)
	{
		$this->db->insert('produk',$tada);
	}

	public function getid($id)
	{
		$param = array('kode_produk' =>$id);
		return $this->db->get_where('produk',$param);
	}

	public function update($data,$kode)
	{
		$this->db->where('kode_dosen',$kode);
		$this->db->update('produk',$data);
	}
}
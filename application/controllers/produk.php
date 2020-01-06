<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  class uas extends CI_Controller{

  	public function index()
  	{
  		$data['judul']="Tampil Data produk";
  		$data['tampil']=$this->M_produk->tampil()->result)();
  		$this->load->('produk/tampil', $data, FALSE);
  	}

  	public function input()
  	{
  		$data['judul']="Tambah produk";
  		$this->load->view('produk/input', $data, FALSE);
  	}

  	public function save ()
    {
    $id=$this->input->post('id');
    $kode_produk=$this->input->post('kode_dosen');
    $nama_produk=$this->input->post('nama_produk');
    $Harga=$this->input->post('harga');
    $stok=$this->input->post('stok');

    $data=array(
      'id'=>$id,
      'kode_produk'=>$kode_produk,
      'nama_produk'=>$nama_produk,
      'harga'=>$harga,
      'stok'=>$stok,
    );

    $this->M_produk->save($data);
    redirect('produk','refresh');
    } 

    public function upadte()
    {
    $id=$this->input->post('id');
    $kode_produk=$this->input->post('kode_dosen');
    $nama_produk=$this->input->post('nama_produk');
    $Harga=$this->input->post('harga');
    $stok=$this->input->post('stok');

    $data=array(
      'id'=>$id,
      'kode_produk'=>$kode_produk,
      'nama_produk'=>$nama_produk,
      'harga'=>$harga,
      'stok'=>$stok,
    );

    $this->M_produk->update($data,$kode);
    redirect('produk','refresh');
    }

    public function delete()
    {
      $id=$this->uri->segment(3);
      $this->db->where('kode_produk', $id);
      $this0>db->delete('produk');
      redirect('prduk','refresh');
    }

  }
  


  ?>
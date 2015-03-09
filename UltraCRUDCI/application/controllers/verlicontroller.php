<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class verlicontroller extends CI_Controller 
{
//VERLY BISMILAH AND ACTION//
	
	public function index()
	{
		//Function yang digunakan untuk menampilkan view menu_verly.php
		$data['listsiswa'] = $this->verlymodel->getsiswa(); //berisi dari return value pada function getsiswa() di file models/verlymodel.php
		$this->load->view('menu_verly', $data); //menampilkan view 'data_siswa' dan juga passing data dengan nama $data(Bentuknya array) yang berisi 'list_siswa'
	}


	public function addsiswa()
	{
		//Function yang dipanggil ketika ingin memasukan data_siswa ke dalam database
		$data = array(
		'nama_siswa' => $this->input->post('ver_nama'),
		'alamat_siswa' => $this->input->post('ver_alamat'));
		$this->verlymodel->verlitambahan($data); //passing variable $data ke verlimodel
		redirect('index.php/control_verli_admin'); //redirect page ke halaman utama controller 
	}


	public function updatesiswa($id_siswa) //Apabila kita menambahkan parameter seperti ini, maka kita menggunakan method GET untuk mengirimkan parameter dari view ke controller
	{
		//Function yang dipanggil ketika ingin melakukan update siswa kemudian menampilkan update siswa
        $data['ubah_siswa'] = $this->verlymodel->getsiswaID($id_siswa); //Melakukan pemanggilan fungsi getsiswaID yang ada di dalam verlimodel untuk mendapatkan informasi / data mengenai data_siswa berdasarkan id_siswa yang dikirimkan
         
        $this->load->view('menu_verly_atas');
        $this->load->view('menu_verly_navbar');
        $this->load->view('menu_ubah_verly', $data); //menampilkan view  dan juga passing data dengan nama $data(Bentuknya array) yang berisi 'product'
	}

	public function updsiswaaction()
	{
		//Function yang dipanggil ketika ingin melakukan update terhadap produk yang ada di dalam database
        $data = array(
					'nama_siswa' => $this->input->post('ver_nama'), //Didapatkan dari form yang disubmit 
					'alamat_siswa' => $this->input->post('ver_alamat') //Didapatkan dari form yang disubmit 
				);
        $condition['id_siswa'] = $this->input->post('ver_id_siswa'); //Digunakan untuk melakukan validasi terhadap produk mana yang akan diupdate nantinya
        
		$this->verlymodel->updatedatasiswa($data, $condition); //passing variable $data ke verlimodel

		redirect('index.php/control_verli_admin'); //redirect page ke halaman utama controller 
	}

	public function deletesiswa($id_siswa)
	{
		//Function yang dipanggil ketika ingin melakukan delete siswa dari database
        $this->verlymodel->deletesiswa($id_siswa); //Memanggil fungsi deletesiswa yang ada pada model verlimodel dan mengirimkan parameter yaitu id_siswa yang akan di delete
        
        redirect('index.php/control_verli_admin'); //redirect page ke halaman utama controller 
	}
}

/* Location: ./application/controllers/products.php */
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class control_verli_admin extends CI_Controller
{
	function __construct(){

		parent::__construct();
		$this->load->model("verlymodel"); //constructor yang dipanggil ketika memanggil verlymodel.php untuk melakukan pemanggilan pada model : verlymodel.php yang ada di folder models
	    $this->load->helper(array('url'));
		$this->load->library('form_validation');
		$this->cek_session();
	}
		
	function index(){
		$data['list_siswa'] = $this->verlymodel->getsiswa(); //berisi dari return value pada function getsiswa() di file models/verlymodel.php
		$this->load->view('menu_verly_atas');
		$this->load->view('menu_verly_navbar');
		$this->load->view('menu_verly', $data); //menampilkan view 'data siswa' dan juga passing data dengan nama $data(Bentuknya array) yang berisi 'data siswa'
	}
	function cek_session(){
		if($this->session->userdata('username') == NULL){ //jika di periksa belum login
	    redirect('index.php/control_verli_admin');// maka akan kembali ke login
		}		
	}
	//// LOGOUT ////
	function logout(){
		$this->session->sess_destroy();// session_destroy//kembali  
		redirect('');//kembali ke login
	}

}
?>
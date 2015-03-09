<?php
class control_verli_login extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper(array('security','url'));

	}
	function index(){
		$this->load->view('login');
	}

	/// cek login user ///
	function cek_login(){
		$username = $this->input->post('username');
		$password = ($this->input->post('password'));		
		$ex['i'] = $this->model_verly_login->cek_data($username,$password);
		$ver = $ex['i']->row();
		// PERIKSA ADMIN //
		if($ver == 1){
			if($ver->level == 'admin'){				
				$adm = array(
							'username'=>$ver->username,
							'password'=>$ver->password,
							'foto'=>$ver->foto,
							'id_login'=>$ver->id);

				$this->session->set_userdata($adm);				
				redirect('index.php/control_verli_admin');	
			}
			else{
				$user = array(
							'username'=>$ver->username,
							'password'=>$ver->password,
							'id_login'=>$ver->id);
				$this->session->set_userdata($user);				
				redirect('controlUser');
			}
		}
		else{
			$this->index();
			echo "<div class='callout callout-danger'>
           <h4>Login Gagal!</h4>
           <p><font color='red'><b>Pastikan Username dan Password anda benar</font></b></p>
           </div>";
		}
	}
}
?>
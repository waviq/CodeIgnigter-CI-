<?php
class model_verly_login extends CI_Model{

	function cek_data($username,$password){
		$this->db->where('password',$password);
		$this->db->where('username',$username);
		return $this->db->get('tb_login');
		}
}
?>
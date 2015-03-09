<?php
//VERLY BISMILAH AND ACTION

class verlymodel extends CI_Model 
{

	function getsiswa()
	{
		//select semua data yang ada pada table tb_siswa
		$this->db->select("*");
		$this->db->from("tb_siswa order by nama_siswa");
		return $this->db->get();
	}
 function getsiswaID($id_siswa)
 {
 	//select siswa berdasarkan id_siswa yang dimiliki	
        $this->db->where('id_siswa', $id_siswa); //Akan melakukan select terhadap row yang memiliki id_siswa sesuai dengan id_siswa yang telah dipilih
        $this->db->select("*");
        $this->db->from("tb_siswa");
        
        return $this->db->get();
 }

	function verlitambahan($data)
	{
		//untuk insert data ke tb_siswa
		$this->db->insert('tb_siswa', $data);
	}

	function updatedatasiswa($data, $condition)
	{
		//update data_siswa
        $this->db->where($condition); //Hanya akan melakukan update sesuai dengan condition yang sudah ditentukan
        $this->db->update('tb_siswa', $data); //Melakukan update terhadap table tb_siswa sesuai dengan data yang telah diterima dari controller
	}
function deletesiswa($id_siswa)
	{
		//delete produk berdasarkan id_siswa
        $this->db->where('id_siswa', $id_siswa);
        $this->db->delete('tb_siswa');
	}

}
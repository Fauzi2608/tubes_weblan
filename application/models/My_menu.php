<?php 
 
class My_menu extends CI_Model{
	function ambil_data($tabel){
		
		return $this->db->get($tabel);
	}
	
}
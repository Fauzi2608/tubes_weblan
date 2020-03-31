<?php  
  class Admin_model extends CI_Model{

  
  public function login_admin($username, $password){
   // Validate
   $this->db->where('username', $username);
   $this->db->where('password', $password);

   $result = $this->db->get('admin');

   if($result->num_rows() == 1){
    return $result->row(0)->id_admin;
   } else {
    return false;
   }
  }

}
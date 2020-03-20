<?php  
  defined('BASEPATH') OR exit('No direct script access allowed');  
  class User_model extends CI_Model  
  {  
  public function insertuser($data)  
   {  
   return $this->db->insert('user', $data);  
   }  
  public function verifyemail($key)  
    $data = array('status' => 1);  
   {  
      $this->db->where('md5(email)', $key);  
      return $this->db->update('user', $data);  
   }  
   public function check_user($email,$pass)
  {
    $sql = "SELECT status , id , fname FROM user where email = ? and password = ?";
    $data = $this->db->query($sql, array($email,$pass));
        return ($data->result_array()) ;
  }
  }

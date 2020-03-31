<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin extends CI_Controller {
 public function __construct()
 {
  parent::__construct();
  $this->load->helper('url');
  $this->load->model('Admin_model');
  $this->load->library(array('form_validation','session'));
}

public function login_admin(){
 
  $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');

            if($this->form_validation->run() === FALSE){
                
                    
                    $this->load->view('admin/login_admin');
                      
            } else {
                
    
                $username = $this->input->post('username');
  
                $password = md5($this->input->post('password'));

  
                $admin_id = $this->Admin_model->login_admin($username, $password);

                if($admin_id){

                    $admin_data = array(
                        'admin_id' => $admin_id,
                        'username' => $username,
                        'logged_in' => true
                    );
                    $this->session->set_flashdata('admin_loggedin','Selamat Anda Berhasil Login');

                    redirect('products/product');
                } else {
        
                    $this->session->set_flashdata('login_failed', '<div class="alert   

           alert-danger text-center">username dan password salah!</div>');

                    redirect('admin/login_admin');
                }        
            }
        }

    

}
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User extends CI_Controller {
 public function __construct()
 {
  parent::__construct();
    $this->load->model('user_model');
    $this->load->helper('url','form');
    $this->load->library(array('form_validation','session'));

 }
public function login(){
 
  $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');

            if($this->form_validation->run() === FALSE){
                
                    $this->load->view('main/header');
                    $this->load->view('main/login');
                    $this->load->view('main/footer');  
            } else {
                
    
                $username = $this->input->post('username');
  
                $password = md5($this->input->post('password'));

  
                $user_id = $this->user_model->login($username, $password);

                if($user_id){

                    $user_data = array(
                        'user_id' => $user_id,
                        'username' => $username,
                        'logged_in' => true
                    );

                    $this->session->set_userdata($user_data);

       
                    $this->session->set_flashdata('user_loggedin','Selamat Anda Berhasil Login');

                    redirect('');
                } else {
        
                    $this->session->set_flashdata('login_failed', '<div class="alert   

           alert-danger text-center">username dan password salah!</div>');

                    redirect('main/login');
                }        
            }
        }
 
 public function register(){

  $this->form_validation->set_rules('nama', 'Nama', 'required');
  $this->form_validation->set_rules('username', 'Username', 'required|callback_check_username_exists');
  $this->form_validation->set_rules('email', 'Email', 'required|callback_check_email_exists');
  $this->form_validation->set_rules('password', 'Password', 'required');
  $this->form_validation->set_rules('password2', 'Confirm Password', 'matches[password]');

            if($this->form_validation->run() === FALSE){
               $this->load->view('main/header');
               $this->load->view('main/register');
               $this->load->view('main/footer');;
            } else {
               
                $enc_password = md5($this->input->post('password'));

                $this->user_model->register($enc_password);

          
                $this->session->set_flashdata('user_registered', 'You are now registered and can log in');

                redirect('main/login');
            }
        }
 public function check_username_exists($username){
  $this->form_validation->set_message('check_username_exists', 'Usrname Sudah diambil. Silahkan gunakan username lain');
            if($this->user_model->check_username_exists($username)){
                return true;
            } else {
                return false;
            }
        }
  public function check_email_exists($email){
            $this->form_validation->set_message('check_email_exists', 'Email Sudah diambil. Silahkan gunakan email lain');
            if($this->user_model->check_email_exists($email)){
                return true;
            } else {
                return false;
            }
        }

}
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Main extends CI_Controller {
 public function __construct()
 {
  parent::__construct();
  $this->load->helper('url');
  $this->load->model('My_menu');
  $this->load->model('user_model');
  $this->load->helper('url','form');
  $this->load->library(array('form_validation','session'));

 }
 public function index()
 {
  $this->load->view('main/header');
  $this->load->view('main/home');
  $this->load->view('main/footer');
 }

  public function aboutus(){
  $this->load->view('main/header');
  $this->load->view('main/aboutus');
  $this->load->view('main/footer');
 }
 public function gallery(){
  $this->load->view('main/header');
  $this->load->view('main/gallery');
  $this->load->view('main/footer');
 }
 public function shop(){
  $data['shop'] = $this->My_menu->ambil_data('menu')->result();

  $this->load->view('main/header');
  $this->load->view('main/shop',$data);
  $this->load->view('main/footer');
 }
 public function contact(){
  $this->load->view('main/header');
  $this->load->view('main/contact');
  $this->load->view('main/footer');
 }
 public function cart(){
  $this->load->view('main/header');
  $this->load->view('main/cart');
  $this->load->view('main/footer');
 }
 public function checkout(){
  $this->load->view('main/header');
  $this->load->view('main/checkout');
  $this->load->view('main/footer');
 }
 public function login(){
  $this->load->view('main/header');
  $this->load->view('main/login');
  $this->load->view('main/footer');
  $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');

            if($this->form_validation->run() === FALSE){
                
                    
            } else {
                
                // Get username
                $username = $this->input->post('username');
                // Get and encrypt the password
                $password = md5($this->input->post('password'));

                // Login user
                $user_id = $this->user_model->login($username, $password);

                if($user_id){
                    // Create session
                    $user_data = array(
                        'user_id' => $user_id,
                        'username' => $username,
                        'logged_in' => true
                    );

                    $this->session->set_userdata($user_data);

                    // Set message
                    $this->session->set_flashdata('user_loggedin','Selamat Anda Berhasil Login');

                    redirect('');
                } else {
                    // Set message
                    $this->session->set_flashdata('login_failed', '<div class="alert   

           alert-danger text-center">username dan password salah!</div>');

                    redirect('main/login');
                }        
            }
        }
 
 public function register(){
  $this->load->view('main/header');
  $this->load->view('main/register');
  $this->load->view('main/footer');
  $this->form_validation->set_rules('nama', 'Nama', 'required');
  $this->form_validation->set_rules('username', 'Username', 'required|callback_check_username_exists');
  $this->form_validation->set_rules('email', 'Email', 'required|callback_check_email_exists');
  $this->form_validation->set_rules('password', 'Password', 'required');
  $this->form_validation->set_rules('password2', 'Confirm Password', 'matches[password]');

            if($this->form_validation->run() === FALSE){
               
            } else {
                // Encrypt password
                $enc_password = md5($this->input->post('password'));

                $this->user_model->register($enc_password);

                // Set message
                $this->session->set_flashdata('user_registered', 'You are now registered and can log in');

                redirect('main/login');
            }
        }
 public function logout(){
            
  $this->session->unset_userdata('logged_in');
            $this->session->unset_userdata('user_id');
            $this->session->unset_userdata('username');

            // Set message
            $this->session->set_flashdata('user_loggedout', 'You are now logged out');

            redirect('main/login');
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



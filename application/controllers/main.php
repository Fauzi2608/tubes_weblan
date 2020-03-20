<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Main extends CI_Controller {
 public function __construct()
 {
  parent::__construct();
  $this->load->helper('url');
  $this->load->model('My_menu');

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
 }
 public function registration(){
  $this->load->view('main/header');
  $this->load->view('main/registration');
  $this->load->view('main/footer');
 }
}


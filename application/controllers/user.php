 <?php  
  defined('BASEPATH') OR exit('No direct script access allowed');  
  class User extends CI_Controller {  
   function __Construct(){  
    parent::__Construct();  
    $this->load->helper(array('form', 'url'));  
    $this->load->library(array('session', 'form_validation', 'email'));   
    $this->load->database();  
    $this->load->model('user_model');  
    }    
   public function index()  
   {  
    $this->load->view('registration');  
   }  
   public function registration()  
   {  
    //validate input value with form validation class of codeigniter  
    $this->form_validation->set_rules('fname', 'First Name', 'required');  
    $this->form_validation->set_rules('lname', 'Last Name', 'required');  
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[user.email]');  
      $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[15]');  
      $this->form_validation->set_rules('confirmpswd', 'Password Confirmation', 'required|matches[password]');  
      //$this->form_validation->set_message('is_unique', 'This %s is already exits');  
      if ($this->form_validation->run() == FALSE)  
      {  
        $this->load->view('registration');  
      }  
      else  
      {  
        $fname = $_POST['fname'];  
        $lname = $_POST['lname'];  
        $email = $_POST['email'];  
        $password = $_POST['password'];  
        $passhash = hash('md5', $password);  
        //md5 hashing algorithm to decode and encode input password  
        //$salt    = uniqid(rand(10,10000000),true);  
     $saltid   = md5($email);  
     $status   = 0;  
     $data = array('fname' => $fname,  
         'lname' => $lname,  
         'email' => $email,  
         'password' => $passhash,  
         'status' => $status);  
     if($this->user_model->insertuser($data))  
     {  
      if($this->sendemail($email, $saltid))  
      {  
       // successfully sent mail to user email  
            $this->session->set_flashdata('msg','<div class="alert alert-success text-center">Please confirm the mail sent to your email id to complete the registration.</div>');  
            redirect(base_url());  
      }  
      else  
      {  
       $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Please try again ...</div>');  
            redirect(base_url());  
          }  
     }  
     else  
     {  
      $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Something Wrong. Please try again ...</div>');  
            redirect(base_url());  
     }  
      }  
   }  
   function sendemail($email,$saltid){  
    // configure the email setting  
    $config['protocol'] = 'smtp';  
      $config['smtp_host'] = 'ssl://smtp.gmail.com'; //smtp host name  
      $config['smtp_port'] = '465'; //smtp port number  
      $config['smtp_user'] = 'fauziari2608@gmail.com';  
      $config['smtp_pass'] = '********'; //$from_email password  
      $config['mailtype'] = 'html';  
      $config['charset'] = 'iso-8859-1';  
      $config['wordwrap'] = TRUE;  
      $config['newline'] = "\r\n"; //use double quotes  
      $this->email->initialize($config);  
      $url = base_url()."user/confirmation/".$saltid;  
      $this->email->from('faisalalamsyah1@gmail.com', 'CodesQuery');  
    $this->email->to($email);   
    $this->email->subject('Please Verify Your Email Address');  
    $message = "<html><head><head></head><body><p>Hi,</p><p>Thanks for registration with CodesQuery.</p><p>Please click below link to verify your email.</p>".$url."<br/><p>Sincerely,</p><p>CodesQuery Team</p></body></html>";  
    $this->email->message($message);  
    return $this->email->send();  
    }  
    public function confirmation($key)  
    {  
      if($this->user_model->verifyemail($key))  
      {  
        $this->session->set_flashdata('msg','<div class="alert alert-success text-center">Your Email Address is successfully verified!</div>');  
        redirect(base_url());  
      }  
      else  
      {  
        $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Your Email Address Verification Failed. Please try again later...</div>');  
        redirect(base_url());  
      }  
    }
    public function login()
{
    $this->load->view('login');
}

public function check_login()
{
    $email = $_POST['email'];
    $pass = hash('md5', $_POST['password']);

    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
    $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[15]');

    if($this->form_validation->run() == FALSE)
    {
        $this->load->view('login');
    }
    else
    {
        $res = $this->user_model->check_user($email , $pass);
        if(!empty($res))
        {
            if($res[0]['status'] == '1')
            {
                $data['user'] = $res[0]['fname'];
                $this->setSession($res[0]['id'],$res[0]['fname']);
                $this->load->view('profile', $data);
            }
            else
            {
                $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Verify your email address first to login...</div>');
        redirect(base_url().'user/login');
            }
        }
        else
        {
            $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">email/password not found</div>');
        redirect(base_url().'user/login');
        }
    }
}

function setSession($userId,$userName) {
    
    $userSession = array('userId'=>$userId,
                         'userName'=>$userName,
                         'loggedIn'=>TRUE );
    $this->session->set_userdata($userSession);
}

function logout(){
    $this->session->sess_destroy();
    redirect(base_url().'user/login', 'refresh');
}  
  } 
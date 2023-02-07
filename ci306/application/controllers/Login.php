<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class Login extends CI_Controller {  
      
    public function index()  
    {  
        $this->load->view('Login');  
    }  
    
    public function process()  
    {  
        $user = $this->input->post('user');  
        $pass = $this->input->post('pass');  
        if ($user=='megane' && $pass=='meg')   
        {  
            //declaring session  
            $this->load->library('session');
            $this->session->set_userdata(array('user'=>$user));  
            $this->load->view('welcome_view');  
        }  
        else{  
            $data['error'] = 'Your Account is Invalid';  
            $this->load->view('Login', $data);  
        }  
    }  
    
    public function logout()  
    {  
        //removing session  
        $this->load->library('session');
        $this->session->unset_userdata('user');  
        redirect("Login");  
    }  
  
}  
?>
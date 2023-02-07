<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class Login extends CI_Controller {  
      
    public function index()  
    {  
        $this->load->view('Login');  
    }  

    public function signin()  
    {  
        $this->load->view('SignIn');  
    }  
    
  
    public function process()  
    {  
        $data=array();
        $user = $this->input->post('user');  
        $pass = $this->input->post('pass');  
        $data=$this->user->verifUser($user,$pass);
        if (count($data) == 1)   
        {  
            //declaring session  
            $this->load->library('session');
            $this->session->set_userdata(array('user'=>$user));  
            redirect('control_acceuil/allUtilisateur');       
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
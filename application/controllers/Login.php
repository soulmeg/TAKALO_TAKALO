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
            $this->session->set_userdata('user',$data);  
            $tt='control_acceuil/allUtilisateur/'.$data[0]['id_user'];
            var_dump($tt);
            redirect('control_acceuil/allUtilisate8ur/'.$data[0]['id_user']);       
        }  
        else{  
            $data['error'] = 'Your Account is Invalid';  
            $this->load->view('Login', $data);  
        }  
    }  
    
    public function insert_user(){
        $data=array();
        $user = $this->input->post('name');  
        $mail = $this->input->post('email');   
        $pass = $this->input->post('password');   
        $this->User_model->inscription($user,$mail,$pass);
        $data=$this->user->verifUser($mail,$pass);
        $this->load->library('session');
        $this->session->set_userdata('user',$data);  
        // var_dump($data);
        redirect('control_acceuil/allUtilisateur/'.$data[0]['id_user']); 
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
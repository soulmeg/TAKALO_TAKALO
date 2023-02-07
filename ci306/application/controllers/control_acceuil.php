<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class control_acceuil extends CI_Controller {  
      
    public function index()  
    {  
        $this->load->view('Login');  
    }  

    public function allUtilisateur(){
        $data = array();
		$data['contents']='acceuil_echange';
		$this->load->view('takalo/template',$data);
    }

}  
?>
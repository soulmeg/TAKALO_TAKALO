<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class verifAdmin_controller extends CI_Controller{
  
    public function index(){
		$this->load->view('Login');
    }

    public function nbr_utilisateur(){
        $data=array();
        $data['nbr']=$this->verifAdmin->utilisateur_inscrit();
        $data['contents']='user_view';
		$this->load->view('takalo/template',$data);
    }
    public function echange_effectue(){
        $data=array();
        $data['echange']=$this->verifAdmin->nombre_dechange_effectue();
        $data['contents']='echange_view';
		$this->load->view('takalo/template',$data);

    }
    
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Acceuil extends CI_Controller {

    public function index(){
		$this->load->view('index');
	}	


	public function liste(){
		// $this->load->model('liste_client');
		$data = array();
		$data['liste']=$this->liste_client->liste_client();
		$data['contents']='index';
		// var_dump($data['liste']);
		$this->load->view('sakila/template',$data);
	}
 
    public function fiche_client($id){
		$data=array();
		$data['liste']=$this->liste_client->liste_fiche_client($id);
		$data['contents']='fiche_client';
		$this->load->view('sakila/template',$data);
	}
	public function search_client(){
		$user = $this->input->post('mitady');  
		$data=array();
		$data['liste']=$this->liste_client->liste_recherche($user);
		$data['contents']='recherche';
		$this->load->view('sakila/template',$data);
	}
	
}
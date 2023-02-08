<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categorie_controller extends CI_Controller{
  
    public function index(){
        $data['categories'] = $this->Categorie_model->get_categories(null);
        // $this->load->view("categorie_view",$data);
        $data['contents']='categorie_view';
		$this->load->view('takalo/template',$data);
    }

    public function delete($id_categorie){
        $this->Categorie_model->delete_categorie($id_categorie);
        redirect("categorie_controller");
    }

    public function get_form($id_categorie){
        $data['categories'] = $this->Categorie_model->get_categories($id_categorie);
        // $this->load->view("categorie_form_view",$data);
        $data['contents']='categorie_form_view';
		$this->load->view('takalo/template',$data);
    }

    public function update($id_categorie){
        $nom_categorie = $this->input->post('categorie_name');
        $this->Categorie_model->update_categorie($id_categorie, $nom_categorie);
        redirect("categorie_controller");
    } 

    public function get_form_insert(){
        $this->load->view("categorie_form_insert_view");
    }

    public function insert(){
        $nom_categorie = $this->input->post('categorie_name');
        $this->categorie_model->insert_categorie($nom_categorie);
        redirect("categorie_controller");
    }

    public function getCategories(){
        $data['categories'] = $this->Categorie_model->get_categories(null);
        $this->load->view('control',$data);
    }

    
}
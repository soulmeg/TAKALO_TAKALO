<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Objet_controller extends CI_Controller{
    public function index()  
    {  
        $this->load->view('Login');  
    }  

    public function get_form_update($id_objet){
        $this->load->model("objet_model");
        $this->load->model("categorie_model");
        $data = array();
        $data['objet'] = $this->objet_model->get_objet_by_id($id_objet,1);
        $data['categories'] = $this->categorie_model->get_categories(null);        
        $this->load->view("modifier",$data);
    }

    public function update($id_objet){
        $this->load->model("objet_model");
        $this->load->model("categorie_model");
        $description_text = $this->input->post("description_name");
        $prix = $this->input->post("prix");
        $prix = $this->input->post('id_categorie');
        $this->objet_model->update_objet($id_objet, $description_text, $prix);
        redirect("control_acceuil/allUtilisateur/$id_objet");
    }
}

?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categorie_model extends CI_Model{
    public function insert_categorie($nom_categorie){
        $sql = "INSERT INTO categorie (nom_categorie) VALUES (%s)";
        $sql = sprintf($sql, $this->db->escape($nom_categorie));
        $this->db->query($sql);
    }

    public function update_categorie($id_categorie, $nom_categorie){
        $sql = "UPDATE categorie SET nom_categorie = %s WHERE id_categorie = $id_categorie";
        $sql = sprintf($sql, $this->db->escape($nom_categorie));
        $this->db->query($sql);
    }

    public function get_categories($id_categorie){
        $sql = null ;
        if($id_categorie == null){
            $sql = "SELECT * FROM categorie";
            $query = $this->db->query($sql);
            return $query->result_array();
        }
        else{
            $sql = "SELECT * FROM categorie WHERE id_categorie = $id_categorie";
            $query = $this->db->query($sql);
            return $query->row_array(); 
        }  
    }

    public function delete_categorie($id_categorie){
        $sql = "DELETE FROM categorie WHERE id_categorie = $id_categorie";
        $this->db->query($sql);        
    }
    
    public function recherche(){
        $this->load->model("categorie_model");
        $mot_cle = $this->input->post("mot_cle");
        $id_categorie = $this->input->post("id_categorie");
        $data = array();
        $data['recherche'] = $this->categorie_model->recherche($mot_cle, $id_categorie); 
    }
}
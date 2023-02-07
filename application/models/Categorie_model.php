<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categorie_model extends CI_Model{
    public function insert_categorie($nom_categorie){
        $sql = "INSERT INTO categorie (nom_categorie) VALUES (%s)";
        $sql = sprintf($sql, $this->db->escape($nom_categorie));
        $this->db->query($sql);
    }

    public function update_categorie($id_categorie, $nom_categorie){
        $sql = "UPDATE categorie SET nom_categorie = %s WHERE id_categorie = %s";
        $sql = sprintf($sql, $this->db->escape($nom_categorie), $this->db->escape($id_categorie));
        $this->db->query($sql);
    }

    public function get_categories(){
        $sql = "SELECT * FROM categorie";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
}
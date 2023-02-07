<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Photo_model extends CI_Model{

    public function insert_photo($id_objet, $nom_photo){
        $sql = "INSERT INTO photo (id_objet, nom_photo) VALUES (%d, %s)";
        $sql = sprintf($sql, $this->db->escape($id_objet), $this->db->escape($nom_photo));
        $this->db->query($sql);
    }

    
}
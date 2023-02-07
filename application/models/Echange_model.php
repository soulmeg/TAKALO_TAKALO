<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Echange_model extends CI_Model{
    public function insert_echange($id_objet_choix, $id_objet_echange, $date_envoie, $date_acceptation){
        $sql = "INSERT INTO echange (id_objet_choix, id_objet_echange, date_envoie, date_acceptation)
        VALUES (%d,%d,%s,%s)";
        $sql = sprintf($sql,
        $this->db->escape($id_objet_choix),
        $this->db->escape($id_objet_echange),
        $this->db->escape($date_envoie),
        $this->db->escape($date_acceptation));
        
        $this->db->query($sql);
    }

    public function accept_echange($id_echange, $date_acceptation){
        $sql = "UPDATE echange SET date_acceptation = %s WHERE id_echange = %s";
        $sql = sprintf($sql,$this->db->escape($date_acceptation),$this->db->escape($id_echange));
        $this->db->query($sql);
    }

    

    
    
}
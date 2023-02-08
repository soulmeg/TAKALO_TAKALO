<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Echange_model extends CI_Model{
    public function insert_echange_attente($id_objet_choix, $id_objet_echange){
        $date_acceptation=null;
        $sql = "INSERT INTO echange (id_objet_choix, id_objet_echange, date_envoie, date_acceptation,id_etat)
        VALUES ($id_objet_choix,$id_objet_echange,now(),%s,10)";
        $sql = sprintf($sql,
        // $this->db->escape($date_envoie),
        $this->db->escape($date_acceptation));
        $this->db->query($sql);
    }

    public function accept_echange($id_echange, $date_acceptation){
        $sql = "UPDATE echange SET date_acceptation = %s WHERE id_echange = %s";
        $sql = sprintf($sql,$this->db->escape($date_acceptation),$this->db->escape($id_echange));
        $this->db->query($sql);
    }

    public function getProposition($id_objet){
        
    }


    

    
    
}
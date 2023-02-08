<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Objet_model extends CI_Model{
//maka objet ana user
    public function get_objets_by_user($id_utilisateur, $choix){
        $objets = array();
        $sql = null ;
        if($choix == 1){
            $sql = "SELECT * FROM objet WHERE id_user = %d";
            $sql = sprintf($sql, $this->db->escape($id_utilisateur));
        }
        else{
            $sql = "SELECT * FROM objet WHERE id_utilisateur != %d";
            $sql = sprintf($sql, $this->db->escape($id_utilisateur));
        }
        $query = $this->db->query($sql);
        $objets =  $query->result_array();
        return $objets;
    }

    public function getNotMyObject($id){
        $objets=array();
        $sql = "select objet.id_objet,objet.id_user,categorie.nom_categorie,categorie.id_categorie,objet.description_text,objet.prix,photo.nom_photo from objet join photo on objet.id_objet=photo.id_objet join categorie on objet.id_categorie=categorie.id_categorie where id_user != %d group by objet.id_user,categorie.id_categorie,categorie.nom_categorie";
        $sql = sprintf($sql, $this->db->escape($id));
        // var_dump($sql);
        $query = $this->db->query($sql);
        $objets =  $query->result_array();
        return $objets;
    }

    public function getMyObjects($id){
        $objets=array();
        $this->db->select('*');
        $this->db->from('liste_objet');
        $this->db->where('id_user',$id);
        $query = $this->db->get();
        $row = $query->result_array();
        return $row;
    }


    public function getMyObject($id){
        $objets=array();
        $sql="select objet.id_objet,objet.id_user,categorie.id_categorie,categorie.nom_categorie,photo.nom_photo,objet.description_text,objet.prix
        from photo
        join objet
        on photo.id_objet=objet.id_objet
        join categorie
        on objet.id_categorie=categorie.id_categorie
        where id_user=$id
        group by categorie.id_categorie";
        // var_dump($sql);
        $sql = sprintf($sql, $this->db->escape($id));
        $query = $this->db->query($sql);
        $objets =  $query->result_array();
        return $objets;
    }

    public function getPhotoParUser($id){
        $objets=array();
        $this->db->select('*');
        $this->db->from('photo_par_user');
        $this->db->where('id_user',$id);
        $query = $this->db->get();
        $row = $query->result_array();
        return $row;
    }

    public function update_objet($id_objet,$description_text, $prix){
        $sql = "UPDATE objet set description_text = %s, prix = %d WHERE id_objet = $id_objet";
        $sql = sprintf($sql,$this->db->escape($description_text),$this->db->escape($prix));
        $this->db->query($sql);
    }


    // public function update_objets($id_objet, $description, $prix){
    //     $sql = "UPDATE objet SET description_text =%s AND prix = %d WHERE id_objet = %d" ;
    //     $sql = sprintf($sql, $this->db->escape($description), $this->db->escape($prix), $this->db->escape($id_objet));
    //     $this->db->query($sql);
    // }

    public function get_objet_by_id($id_objet, $choix){
        $sql = null ;
        $objets = null ;
        if($choix == 1){
            $sql = "SELECT * FROM objet WHERE id_objet = $id_objet";
            $query = $this->db->query($sql);
            $objets = $query -> row_array();
        }              
        else{
            $sql = "SELECT * FROM objet WHERE id_objet != $id_objet";
            $query = $this->db->query($sql);
            $objets = $query -> array_result();
        }
        return $objets;
    }

    public function insert_objet($id_user, $id_categorie, $description_text, $prix){
        $sql = "INSERT INTO objet VALUES (id_user, id_categorie, description_text, prix) 
        VALUES (%d, %d, %s, %d)";

        $sql = sprintf($sql,
        $this->db->escape($id_user), 
        $this->db->escape($id_categorie), 
        $this->db->escape($description_text),
 
        $this->db->escape($prix));

        $this->db->query($sql);
    }
}
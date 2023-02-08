<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  

class verifAdmin extends CI_Model { 
    public function __construct(){
        // $this->load->database();
    } 

    public function utilisateur_inscrit(){
        $query = $this->db->query('select * from user where est_Admin=0');
        $row = $query -> result_array();
        $nbr=count($row);
        return $nbr;
    }

    public function nombre_dechange_effectue(){
        $this->db->select('*');
        $this->db->from('echange');
        $query = $this->db->get();
        $row = $query->result_array();
        $nbr=count($row);
        return $nbr;
     }

}

?>
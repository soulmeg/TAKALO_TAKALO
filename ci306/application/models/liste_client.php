<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  

class liste_client extends CI_Model { 
    public function __construct(){
        // $this->load->database();
    } 

    public function liste_client2(){
        $query = $this->db->query('select * from customer');
        $row = $query -> result_array();
        return $row;
    }

    public function liste_client(){
        $this->db->select('customer.customer_id,customer.first_name,customer.last_name,customer.email,address.address');
        $this->db->from('customer');
        $this->db->join('address','customer.address_id = address.address_id');
        $query = $this->db->get();
        $row = $query -> result_array();
        return $row;
    }

    public function liste_fiche_client($id){
       $this->db->select('*');
       $this->db->from('customer_list');
       $this->db->where('ID',$id);
       $query = $this->db->get();
       $row = $query -> result_array();
       return $row;
    }
    
    public function liste_recherche($nom){
        $this->db->select('*');
        $this->db->from('customer');
        $this->db->where('first_name',$nom);
        $this->db->or_where('last_name',$nom);
        $query = $this->db->get();
        $row = $query -> result_array();
        return $row;
     }

}

?>
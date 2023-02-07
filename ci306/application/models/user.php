<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  

class user extends CI_Model { 
    public function __construct(){
        // $this->load->database();
    } 

    public function liste_user(){
        $query = $this->db->query('select * from user');
        $row = $query -> result_array();
        return $row;
    }

    public function verifUser($nom,$pass){
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('user_email',$nom);
        $this->db->where('user_pwd',$pass);
        $query = $this->db->get();
        $row = $query -> result_array();
        return $row;
     }

     

    
     


    // public function liste_client(){
    //     $this->db->select('customer.customer_id,customer.first_name,customer.last_name,customer.email,address.address');
    //     $this->db->from('customer');
    //     $this->db->join('address','customer.address_id = address.address_id');
    //     $query = $this->db->get();
    //     $row = $query -> result_array();
    //     return $row;
    // }

    
    
    // public function liste_recherche($nom){
    //     $this->db->select('*');
    //     $this->db->from('customer');
    //     $this->db->where('first_name',$nom);
    //     $this->db->or_where('last_name',$nom);
    //     $query = $this->db->get();
    //     $row = $query -> result_array();
    //     return $row;
    //  }

}

?>
<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class restaurant extends CI_Model { 
   public function __construct(){
   // $this->load->database();
   } 

   public function get_info(){
    return array('auteur' => 'megane',
            'prenom' => 'sitraka');
   }

   public function liste_recette(){
    $query = $this->db->query('select * from recette');
    $row = $query -> row_array();
    return $row;
   }

}  
?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model{
    public function inscription($user_name,$user_email ,$user_pwd){
        $sql = "INSERT INTO user (user_name,user_email,user_pwd,est_admin) VALUES (%s,%s,%s,false)";
        $sql = sprintf($sql,
        $this->db->escape($user_name), 
        $this->db->escape($user_email),
        $this->db->escape($user_pwd));
        $this->db->query($sql);
    }
}
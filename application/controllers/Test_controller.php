<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  

class Test_controller extends CI_Controller{

    public function index(){
        $this->load->model('user_model');
        $this->user_model->inscription('bobo','bobo@gmail.com','123');
    }
}
?>
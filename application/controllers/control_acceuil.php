<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class control_acceuil extends CI_Controller {  
      
    public function index()  
    {  
        $this->load->view('Login');  
    }  

    public function allUtilisateur($id){
        $data = array();
        $data['liste']=$this->Objet_model->getMyObject($id);
		$data['contents']='mesObjets';
        // $data['photos']=$this->Objet_model->getPhotoParUser($id);
        // var_dump($data);
		$this->load->view('takalo/template',$data);
    }

    public function notmyObject($id){
        $data = array();
        $data['liste']=$this->Objet_model->getNotMyObject($id);
        // var_dump($data['liste']);
		$data['contents']='mesNonObjets';
        // $data['photos']=$this->Objet_model->getPhotoParUser($id);
        // var_dump($data);
		$this->load->view('takalo/template',$data);
    }


}  
?>
  
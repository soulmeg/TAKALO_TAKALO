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
		$this->load->view('takalo/template',$data);
    }

    public function notmyObject($id){
        $data = array();
        $data['liste']=$this->Objet_model->getNotMyObject($id);
        // var_dump($data['liste']);
		$data['contents']='mesNonObjets';
		$this->load->view('takalo/template',$data);
    }

    public function redirigeView(){
        $data['categories'] = $this->Categorie_model->get_categories(null);
        $this->load->view('modifier',$data);
    }


}  
?>
  
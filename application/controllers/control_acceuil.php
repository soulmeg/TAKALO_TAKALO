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

    public function welcomee(){
        $data['contents']='welcome';
		$this->load->view('takalo/template',$data);
    }

    public function EchangeUser($id){
        $data = array();
        $data['id_demander']=$this->input->post('id_objet_demander');
        $data['liste']=$this->Objet_model->getMyObject($id);
		$data['contents']='Echange';
		$this->load->view('takalo/template',$data);
    }

    public function notmyObject($id){
        $data = array();
        $data['liste']=$this->Objet_model->getNotMyObject($id);
		$data['contents']='mesNonObjets';
		$this->load->view('takalo/template',$data);
    }

    public function insert_attente($id){
        $objet_demande=$this->input->post('objet_demande');
        $objet_demander=$this->input->post('objet_demander');
        $this->Echange_model->insert_echange_attente($objet_demande, $objet_demander);
       
        $data = array();
        $data['liste']=$this->Objet_model->getMyObject($id);
		$data['contents']='mesObjets';
		$this->load->view('takalo/template',$data);
    }

    public function redirigeView(){
        $data['categories'] = $this->Categorie_model->get_categories(null);
        $this->load->view('modifier',$data);
    }

    public function getPoposition_controller($idUser){
        $data=array();
        $data['liste']=$this->Objet_model->getProposition_model($idUser);
        $data['contents']='acceuil';
		$this->load->view('takalo/template',$data);
    }


}  
?>
  
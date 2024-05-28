<?php

class IDreg extends Controller{
    protected $memberModel;
    public function __construct()
    {
        $this->memberModel = $this->model('Member');
    }
    public function index(){
        //$data=$this->userModel->sample();
       $this->render('ID_Reg/dataPrivacy');
    }
    public function type(){
        $this->renderForm('ID_Reg/type');
    }

    public function new(){
        $data = array(
            'Title'=>'Bagong Aplikante',
            'subTitle'=>'New Applicant'
            
        );
        
        $this->renderForm('ID_Reg/update_new_form', $data);
    }

    public function update(){
        $data = array(
            'Title'=>'Pagpapanibago',
            'subTitle'=>'Renewal',
            'firstName'=>'Juan'
        );
        $this->renderForm('ID_Reg/update_new_form', $data);
    }

    public function update_address(){
        $this->renderForm('ID_Reg/update_address');
    }

    public function update_name(){
        $this->renderForm('ID_Reg/update_name');
    }

    public function save_member(){
        //$this->memberModel->add_member(); 
       
    }
    public function save(){
        echo "hello world!";
        $lastId = $this->memberModel->add_member($_POST);
        print_r($_POST);

        $address = array(
            
            'housenum'=>$_POST['houseNumber'], 
            'street'=>$_POST['street'], 
            'subdivision'=>$_POST['subdivision'],
            'barangay'=>$_POST['barangay']

        );

        $this->memberModel->add_address($lastId, $address);
        
        $c_person = array(
            
            'c_name'=>$_POST['fullName'], 
            'c_number'=>$_POST['contactNumber'],
            'c_relation'=>$_POST['relationship']
            
        );
            $this->memberModel->add_contact_person($lastId, $c_person);    
        
    }   
    
}
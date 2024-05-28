<?php

class Home extends Controller{
    public function index(){
        //$data=$this->userModel->sample();
       $this->render('Home/index');
    }
}


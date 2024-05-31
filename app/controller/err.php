<?php
class Err extends Controller{
    public function index(){
        echo 'Error 404: page not found.';
    }

    public function _404(){
        echo 'Error 404: page not found.';
        echo 'hindi namatay';
    }

    public function _403(){
        echo 'Error 403: page forbidden.';
    }
}

 
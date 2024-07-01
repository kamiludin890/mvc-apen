<?php 
Class Controllers{
    // public $username,$password,$key=key;
    public function view($view,$data=[]){
        require_once('../app/views/'.$view.'.php');
    }
}
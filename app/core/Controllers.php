<?php 
Class Controllers{
    public function view($view,$data=[]){
        if(isset($_SESSION['user'])){
            require_once('../app/views/'.$view.'.php');
        }else{
            require_once('../app/views/Login/index.php');
        }
    }
}
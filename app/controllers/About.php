<?php 
Class About extends Controllers{
    public function index(){
        $this->view('Layout/header');
       $this->view('About/index');
       $this->view('Layout/footer');
    }
    public function page(){
        $this->view('Layout/header');
        $this->view('About/page');
        $this->view('Layout/footer');
    }
}
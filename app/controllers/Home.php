<?php
class Home extends Controllers
{
    public function index()
    {
        $this->view('Layout/header');
        $this->view('Home/Index');
        $this->view('Layout/footer');
    }
}

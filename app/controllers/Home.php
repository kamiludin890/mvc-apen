<?php
class Home extends Controllers
{
    public function index()
    {
        $data['judul'] = 'Home';
        $this->view('Layout/header_public', $data);
        $this->view('Home/Index');
        $this->view('Layout/footer_public');
    }
}

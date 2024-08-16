<?php
class About extends Controllers
{
    public function index()
    {
        $data['profile'] = $this->model('Login_model')->UserLogin($_SESSION['sesi']);
        $data['usernameId'] = $this->model('User_model')->getUserName($data['profile'][0]);
        $data['judul'] = 'About';
        if (empty($_SESSION['sesi'])) {
            echo "<script>window.location='" . BASEURL . "/Login';</script>";
        } else {
            $this->view('Layout/header');
            $this->view('About/index');
            $this->view('Layout/footer');
        }
    }
    public function page()
    {
        $data['profile'] = $this->model('Login_model')->UserLogin($_SESSION['sesi']);
        $data['usernameId'] = $this->model('User_model')->getUserName($data['profile'][0]);
        $data['judul'] = 'About';
        if (empty($_SESSION['sesi'])) {
            echo "<script>window.location='" . BASEURL . "/Login';</script>";
        } else {
            $this->view('Layout/header');
            $this->view('About/page');
            $this->view('Layout/footer');
        }
    }
}

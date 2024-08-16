<?php
class Home extends Controllers
{
    public function index()
    {
        $data['profile'] = $this->model('Login_model')->UserLogin($_SESSION['sesi']);
        $data['usernameId'] = $this->model('User_model')->getUserName($data['profile'][0]);
        $data['judul'] = 'Dashboard';
        if (empty($_SESSION['sesi'])) {
            echo "<script>window.location='" . BASEURL . "/Login';</script>";
        } else {
            $this->view('Layout/header', $data);
            $this->view('Home/Index');
            $this->view('Layout/footer');
        }
    }
}

<?php
class Home extends Controllers
{
    public function index()
    {
        $data['judul'] = $this->model('Login_model')->UserLogin($_SESSION['sesi']);
        if (empty($_SESSION['sesi'])) {
            echo "<script>window.location='" . BASEURL . "/Login';</script>";
        } else {
            $this->view('Layout/header', $data);
            $this->view('Home/Index');
            $this->view('Layout/footer');
        }
    }
}

<?php
class Produk extends Controllers
{
    public function index()
    {
        $data['profile'] = $this->model('Login_model')->UserLogin($_SESSION['sesi']);
        if (empty($_SESSION['sesi'])) {
            echo "<script>window.location='" . BASEURL . "/Login';</script>";
        } else {
            $this->view('Layout/header', $data);
            $this->view('Produk/Index');
            $this->view('Layout/footer');
        }
    }
}

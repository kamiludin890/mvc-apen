<?php
class Produk extends Controllers
{
    public function index()
    {
        if (empty($_SESSION['sesi'])) {
            echo "<script>window.location='" . BASEURL . "/Login';</script>";
        } else {
            $this->view('Layout/header');
            $this->view('Produk/Index');
            $this->view('Layout/footer');
        }
    }
}

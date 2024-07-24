<?php
class About extends Controllers
{
    public function index()
    {
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
        if (empty($_SESSION['sesi'])) {
            echo "<script>window.location='" . BASEURL . "/Login';</script>";
        } else {
            $this->view('Layout/header');
            $this->view('About/page');
            $this->view('Layout/footer');
        }
    }
}

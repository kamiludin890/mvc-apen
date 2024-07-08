<?php
class Login extends Controllers
{
    public function index()
    {
        if (isset($_POST['login'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $sesi = $this->model('Login_model')->SesiLogin($username, $password);
            $_SESSION['sesi'] = $sesi;
            echo "<script>window.location='" . BASEURL . "/Home';</script>";
        }
        $this->view('Login/index');
    }
}

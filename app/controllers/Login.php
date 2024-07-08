<?php
class Login extends Controllers
{
    public function index()
    {
        if (isset($_POST['login'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $sesi = $this->model('Login_model')->SesiLogin($username, $password);
        }
        $this->view('Login/index');
    }
}

<?php
class Login_model
{
    public function SesiLogin($username, $password, $key = key)
    {
        $user = "$username,$password,$key";
        $_SESSION['login'] = base64_encode($user);
        $sesi = $_SESSION['login'];
        return $sesi;
    }
}

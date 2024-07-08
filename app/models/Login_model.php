<?php
class Login_model
{
    public function SesiLogin($username, $password, $key = key)
    {
        $user = "$username,$password,$key";
        $sesi = base64_encode($user);
        return $sesi;
    }
}

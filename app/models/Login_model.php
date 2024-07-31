<?php
class Login_model
{
    public $sesi = "", $userdata = "";
    public function SesiLogin($username, $password, $key = key)
    {
        $userpass = "$username,$password";
        $userpass = base64_encode($userpass);
        $key = base64_encode($key);
        $newEncode = "$userpass$key";
        $sesi = base64_encode($newEncode);
        return $sesi;
    }
    public function UserLogin($sesi, $key = key)
    {
        $userdata = base64_decode(base64_decode($sesi));
        $userdata = str_replace("$key", "", $userdata);
        $userdata = explode(",", $userdata);
        return $userdata;
    }
}

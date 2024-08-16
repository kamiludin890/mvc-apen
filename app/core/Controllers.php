<?php
class Controllers
{
    // public $username,$password,$key=key;
    public function view($view, $data = [])
    {
        require_once('../app/views/' . $view . '.php');
    }
    public function model($model)
    {
        require_once('../app/models/' . $model . '.php');
        return new $model;
    }
    public function skema($skema)
    {
        require_once('../Database/Skema/skema_' . $skema . '.php');
        return new $skema;
    }
}

<?php 
session_start();
require_once("../app/init.php");
if(isset($_SESSION['user'])){
  $app = new App();
}else{
  require_once('../app/views/Login/index.php');
}
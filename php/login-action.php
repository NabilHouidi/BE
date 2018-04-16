<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include_once './login.php';
$admin = new itg_admin(); //crée nouvelle instance 
$admin->_login_action(); // methode de login
?>


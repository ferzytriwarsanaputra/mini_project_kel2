<?php
session_start();


require_once('../app/controllers/LoginController.php');

$controller = new LoginController();


$controller->action();

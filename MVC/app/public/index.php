<?php 
require '../app/controllers/homeController.php';
require '../app/Models/user.php';

$controller =new HomeController;
$controller->index();
?>
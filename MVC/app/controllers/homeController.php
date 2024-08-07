<?php 
class HomeController{
    private $userModel;
    public function _construct(){
         $this->userModel = new User();   
    }
    public function index(){

        $users=$this->userModel->getAllUsers();
        require '../app/views/home.php';
    }
}
?>
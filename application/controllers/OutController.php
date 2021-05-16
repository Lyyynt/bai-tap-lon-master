<?php 
class OutController extends BaseController{
    public function logout(){
        set_logout();
        header('Location: index.php?');
    }
}
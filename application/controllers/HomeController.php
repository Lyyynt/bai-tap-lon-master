<?php
class HomeController extends BaseController{
    public function home(){
        
        $this->CreateView('home');
    }
    public function homelogin(){
        $this->CreateView('homelogin');
    }

    public function dangnhap(){
        $this->CreateView('login');
    }

    public function dangki(){
        $this->CreateView('register');
    }

    public function dangxuat(){
        set_logout();
        $this->CreateView('home');
    }
}
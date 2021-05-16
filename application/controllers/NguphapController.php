<?php
class NguphapController extends BaseController{
    private $nguphapModel;
    public function __construct(){
        $this->CreateModel('NguphapModel');
        $this->nguphapModel= new NguphapModel;
    }
    public function danhsach(){
        $data =$this->nguphapModel->getAll();
        return $this->CreateViewData('nguphap', $data);
    }
    public function bieudien(){
        $id =$_REQUEST['id'];
        return $this->CreateView($id);
    }

}
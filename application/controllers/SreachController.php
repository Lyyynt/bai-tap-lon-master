<?php
class SreachController extends BaseController{
    private $sreacModel;
    public function __construct(){
        $this->CreateModel('SreachModel');
        $this->sreachModel= new SreachModel;
    }
    public function danhsach(){
        $name= addslashes($_POST['sreach']);
        $data =$this->sreachModel->danhsachN($name);
        return $this->CreateViewData('timkiem',$data);
    }

}
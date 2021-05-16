<?php
class DethiController extends BaseController{
    private $dethiModel;
    public function __construct(){
        $this->CreateModel('DethiModel');
        $this->dethiModel= new DethiModel;
    }
    public function danhsach(){
        $data = $this->dethiModel->getAll();
        return $this->CreateViewData('dethi', $data);
    }

    public function bieudiendethi(){
        $id =$_REQUEST['id'];
        return $this->CreateView($id);
    }
}
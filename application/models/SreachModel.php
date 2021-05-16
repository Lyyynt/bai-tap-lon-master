<?php
class SreachModel extends BaseModel{
    const TABLE1='nguphap';
    const TABLE2='dethi';
    public function danhsachN($name){
        return $this->danhsachName(self::TABLE1, $name);
    }
    public function danhsachN2($name){
        return $this->danhsachName(self::TABLE2, $name);
    }
}
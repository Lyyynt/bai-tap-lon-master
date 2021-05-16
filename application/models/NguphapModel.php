<?php
class NguphapModel extends BaseModel{
    const TABLE='nguphap';

    public function getAll(){
        $select=['id','name'];
        return $this->all(self::TABLE, $select);
    }
}
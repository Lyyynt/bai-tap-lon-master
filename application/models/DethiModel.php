<?php
class DethiModel extends BaseModel{
    const TABLE='dethi';

    public function getAll(){
        $select=['id','name'];
        return $this->all(self::TABLE, $select);
    }
}
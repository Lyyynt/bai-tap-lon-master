<?php
class Database{
    const HOST ='localhost:3306';
    const USERNAME ='root';
    const PASSWORD ='123456789';
    const DATABASE = 'btlweb';

    public function getConnection(){
        $connect= mysqli_connect(self::HOST, self::USERNAME, self::PASSWORD, self::DATABASE);
        mysqli_set_charset($connect, "utf-8");
        if (mysqli_connect_errno()===0){
            return $connect;
        }
        return false;
    }

    public function close($connect){
        mysqli_close($connect);
    }
}
    
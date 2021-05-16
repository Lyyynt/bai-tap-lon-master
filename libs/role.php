<?php
    include_once ('./libs/session.php');
    // Hàm thiết lập là đã đăng nhập
    function set_logged($username){
        session_set('username',$username);
    }
     
    // Hàm thiết lập đăng xuất
    function set_logout(){
        session_delete('username');
    }
     
    // Hàm kiểm tra trạng thái người dùng đã đăng nhập chưa
    function is_logged(){
        $user = session_get('username');
        return $user;
    }
     
    // Hàm kiểm tra có phải là admin hay không
    function is_admin(){
        $user  = is_logged();
        if (!empty($user['level']) && $user['level'] == '1'){
            return true;
        }
        return false;
    }

    // Lấy username người dùng hiện tại
    function get_current_username(){
        $user  = is_logged();
        return isset($user['username']) ? $user['username'] : '';
    }

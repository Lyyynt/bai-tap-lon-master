<?php
class LoginController extends BaseController{
    private $loginModel;

    public function __construct(){
        $this->CreateModel('LoginModel');
        $this->loginModel= new LoginModel;
    }

    public function login(){ 
            $username= addslashes($_POST['username']);
            $password = addslashes($_POST['password']);
            
            $data= $this->loginModel->find($username);

            if(empty($data)){
                echo "<script>
                        alert('Tên đăng nhập không có hoặc sai');
                        history.back();
                    </script>";
                    
            } else if ($data['password'] != $password){
                echo "<script>
                        alert('Mật khẩu sai');
                        history.back();
                    </script>";
            } else {
                $_SESSION['username']=$username;
                $_SESSION['name']= $data['name'];
                echo "<script>
                        alert('Đăng nhập thành công');
                    </script>";
                header('Location: index.php?');
                
            }
    }
}
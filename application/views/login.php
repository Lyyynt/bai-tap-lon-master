<?php if (!defined('IN_SITE')) die('The request not found'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/login/css/login.css">
    <title>Đăng nhập</title>
    <script type="text/javascript">
		function Validate(){
			var name = document.myform.username.value;
			var pass = document.myform.password.value;
			name.trim();
			pass.trim();
			if( name == ""|| pass== ""){
				alert("Không được để trống thông tin");
				return false;
			}
			return true;
		}

	</script>
    <style>
        html{
    height: 100%;
  }
  
  *{
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    font-family: nunito;
    color: #403868;
  }
  
  body{
    height: 100%;
    background: #ffd4aa;
  }
  
  main{
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
  }
  #sms{
      margin-top: 10px;
      
      width: 307px;
  }
  #sms i{
      color: #d30000;
  }
  
  main section{
    border: 1px solid green;
    border-radius: 3px;
    padding: 20px;
    width: 350px;
    display: flex;
    flex-direction: column;
    justify-content: space-evenly;
    align-items: center;
  }
  a{
      text-decoration: none;
      display: block;
      margin-top: 10px;
  }
  a:hover{
    color: #d50d0d;
  }
  main section .login-text h1{
    font-size: 32px;
    font-weight: 900;
  }
  
  main section form{
    width: 100%;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
  }
  
  main section form input{
    padding-top: 15px;
    padding-bottom: 15px;
    padding-left: 20px;
    padding-right: 20px;
    border: none;
    border-radius: 3px;
  }
  
  main section form input[type="text"],input[type=password]{
    margin-top: 10px;
    color: #403868;
    font-weight: 600;
  }
  
  main section form input[type="text"],input[type=password]{
    background-color: #dedede;
  }
  
  main section form .user-pass{
    display: flex;
    flex-direction: column;
  }
  
  main section form > *{
    margin-top: 10px;
  }
  
  main section form input[type="submit"]{
    margin-top: 30px;
    background-color: #807FFE;
    font-weight: 600;
    color: whitesmoke;
    cursor: pointer;
  }
  
  main section form input[type="submit"]:hover{
    background: green;
  }
    </style>
</head>
<body>
<main>
    <section>
        <div class="login-text">
            <h1>LOGIN</h1>
        </div>
        <form action='index.php?c=login&a=login' method="post" name="myform" onsubmit="return Validate()">
            <div class="user-pass">
                <input placeholder="Tài khoản" autocomplete="off" type="text" name="username" id="username" >
                <label id="lpass" style="color: red; margin-top: 5px"></label>
                <input placeholder="Mật khẩu" autocomplete="off" type="password" name="password" id="password">
            </div>
            <input type="submit" value="Đăng nhập" name='dangnhap'>
        </form>
        <a href='index.php?c=home&a=dangki'>Don't have account? Register</a>
        <a href='index.php?'>Back to home page</a>
    </section>
</main>
</body>
</html>
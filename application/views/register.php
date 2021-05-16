<?php if (!defined('IN_SITE')) die('The request not found'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/login/css/login.css">
    <title>Đăng ký</title>
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
    <script type="text/javascript">
		function Validate(){
			var fullName = document.myform.name.value;
			var name = document.myform.username.value;
			var pass = document.myform.password.value;
			var pass2 = document.myform.password2.value;
			fullName.trim();
			name.trim();
			pass.trim();
			if( fullName =="" || name == ""|| pass== "" || pass2 == ""){
				alert("Không được để trống thông tin");
				return false;
			}
			if( pass.length < 6){
				return false;
			}
			if( pass2 != pass){
				alert("Mật khẩu xác thực không chính xác");
				return false;
			}
			return true;
		}
		function ValidatePass(){
			var pass = document.myform.password.value;
			if( pass.length < 6){
				document.getElementById("lpass").innerHTML = "Mật khẩu ít nhất 6 ký tự";
			}
			else{
				document.getElementById("lpass").innerHTML = "";
			}
		}
	</script>
</head>
<body>
<main>
    <section>
        <div class="login-text">
            <h1>REGISTER</h1>
        </div>
        <form action="index.php?c=register&a=register" method="post" name="myform" onsubmit="return Validate()">
            <div class="user-pass">
            	<input placeholder="Họ và tên" autocomplete="off" type="text" name="name" id="name" >
                <input placeholder="Tài khoản" autocomplete="off" type="text" name="username" id="username">
                <input placeholder="Mật khẩu" autocomplete="off" type="password" name="password" id="password" onkeyup="ValidatePass()">
                <label id="lpass" style="color: red; margin-top: 5px"></label>
                <input placeholder="Xác nhận mật khẩu" autocomplete="off" type="password" name="password2" id="password2" >
            </div>
            <input type="submit" value="Đăng ký" name='dangki'>
        </form>
        <div class="re_link">
	        <a href="?c=home&a=dangnhap" class="re_link-login">Already have account? Login</a>
	        <a href="index.php?" class="re_link-home">Back to home page</a>
        </div>
    </section>
    
</main>
</body>
</html>
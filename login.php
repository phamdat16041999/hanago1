<!DOCTYPE html>
<html xmlns:th="http://www.thymeleaf.org">
<head>
	<title></title>

	<style type="text/css" media="screen">
		.parent {
			background-image: url('img/backgroundHome.jpg');
			background-size: cover;
			background-position: center;
			width: 100%;
			height: 100vh;
			display: flex;
			justify-content: center;
			align-items: center;
		}

		form {
			display: inline-block;
			background: #b4e9fb;
			padding: 30px;
			border-radius: 10px;
			text-align: center;
		}

		form input[type="text"] {
			width: 250px;
			border-radius: 5px;
			outline: 0;
			border: 0;
			height: 35px;
			margin: 10px 3px 20px 3px;
		}

		input[type="submit"] {
			outline: 0;
			border: 0;
			font-weight: 700;
			color: white;
			background: #049bcc;
			padding: 5px 20px;
			border-radius: 10px;
			font-size: 20px;
			width: 100px;
			display: inline-block;
		}
		input[type="submit"]:hover{
			opacity: .8;
			transition: all .4s ease-in-out;
		}
	</style>
</head>
<body>
	<?php 
	include 'connect.php';
	session_start();
	?>
	<div class="parent">
		<form action="" method="POST">
			<input type="text" name='username' placeholder="Tên đăng nhập">
			<input type="password" name='password' placeholder="Mật khẩu" style="width: 250px; border-radius: 5px; outline: 0; border: 0; height: 35px; margin: 10px 3px 20px 3px;">
			<div><input type="submit" value="Login" name="submit"></div>
			<?php
			if (isset($_POST["username"])&&isset($_POST["username"]))
			{
				$Username = $_POST["username"];
				$Password = $_POST["password"];
		//làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
		//mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
				$Username = strip_tags($Username);
				$Username = addslashes($Username);
				$Password = strip_tags($Password);
				$Password = addslashes($Password);
				if ($Username == "" || $Password =="") {
					echo "Vui lòng điền tên đăng nhập và mật khẩu";
				}
				else{
					$sql = "select * from app_user where user_name ='" . $Username . "' and encryted_password = '" . md5($Password) . "' and enabled ='1'" ;
					$acc = query($sql);
					if ((count($acc)>0))
					{
						header("Location: ./admin/admin.php");
						$_SESSION['username'] = $Username;
						
					}
					else{
						echo "Tên đăng nhập hoặc mật khẩu không đúng";
					}

				}
			}
			?>
		</form>

	</div>


</body>
</html>
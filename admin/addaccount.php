<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<title>Thêm tài khoản</title>
	<link rel="icon" href="../img/Logo.png" type="image/icon type">
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">

	<link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/Features-Boxed.css">
	<link rel="stylesheet" href="assets/css/styles.css">
<!-- 	<link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
	<link rel="stylesheet" href="assets/css/smoothproducts.css"> -->

</head>
<style>
	.clean-block.clean-hero:before {
		content: none;
	}
	.features-boxed .item .box {
		background-color: #ecf0f1;
	}
</style>
<body>
	<?php 
	include 'menuTop.php';
	include 'connect.php';
	?>
	<main class="page landing-page">
		<section class="clean-block clean-hero" style="background-image:url(../img/backgroundHome.jpg);">
			<div class="container">
				<div class="row">
					<h4 style="width: 100%; text-align: center;">Thêm tài khoản</h4><br><br>
					<br>

					<table style="width:100%">
						<form method="POST" accept-charset="utf-8" action="addaccount.php">
							<tr>
								<td><div class="textlienhe">Tên đăng nhập</div></td>
								<td><input type="text" style="width: 80%" name="admin_username"></td>
							</tr>
							<tr>
								<td><div class="textlienhe">Mật khẩu</div></td>
								<td><input type="text" style="width: 80%" name="admin_pasword"></td>
							</tr>
							<tr>
								<td><div class="textlienhe">Trạng thái</div></td>
								<td>
									<select size="1" style="font-size:14pt; width: 80%" id="cbopurpose" name="status">
										<option value="1">kích hoạt</option>
										<option value="0">không kích hoạt</option>
									</select>						


								</td>
							</tr>
							<tr>
								<td colspan="2" style="text-align: center;"><input type="submit" name="" value="Thêm tài khoản"></td>
							</tr>
						</form>
					</table>
					<?php 
					if(isset($_POST['admin_username'])&&isset($_POST['admin_pasword'])&&isset($_POST['status']))
					{
						$admin_username=$_POST['admin_username'];
						$admin_pasword=$_POST['admin_pasword'];
						$admin_pasword=md5($admin_pasword);
						$status=$_POST['status'];
						$add= "insert into app_user(user_name, encryted_password, enabled)values('".$admin_username."', '".$admin_pasword."','".$status."')";
						$ra=execsql($add);
						if($ra!= null){
							?>
							<div style="width: 100%; text-align: center; font-size: 20px; color:#e74c3c">
								Thêm tài khoản thành công
							</div>
							<?php 
						}
						else
						{
							?>
							<div style="width: 100%; text-align: center; font-size: 20px; color:#e74c3c">
								Vui lòng thử lại
							</div>
							<?php 
						}
					}
					?>
				</div>
			</div>
		</section>
		<div class="footer-copyright">
			<p>© 2020 Copyright Text</p>
		</div>
	</main>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
<script src="assets/js/smoothproducts.min.js"></script>
<script src="assets/js/theme.js"></script> -->
</body>

</html>
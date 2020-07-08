<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<title>Thêm dự án triển khai</title>
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
					<h4 style="width: 100%; text-align: center;">Thêm dự án triển khai</h4><br><br>
					<br>

					<table style="width:100%">
						<form action="addduan.php" method="POST" accept-charset="utf-8">

							<tr>
								<td><div class="textlienhe">Địa chỉ :</div></td>
								<td><input type="text" name="diachi" style="width: 80%"></td>
							</tr>
							<tr>
								<td><div class="textlienhe">Tên dự án :</div></td>
								<td><input type="text" name="name" style="width: 80%"></td>
							</tr>
							<tr>
								<td><div class="textlienhe">Đường dẫn ảnh :</div></td>
								<td><textarea name="duongdananh" style="width: 80%; overflow: auto;height: 200px"></textarea></td>
							</tr>
							<tr>
								<td colspan="2" style="text-align: center;"><input type="submit" name="" value="thêm dự án"></td>
							</tr>
						</form>
					</table>
					<?php 
					if(isset($_POST['diachi'])&&isset($_POST['name'])&&isset($_POST['duongdananh']))
					{
						$diachi=$_POST['diachi'];
						$name=$_POST['name'];
						$duongdananh=$_POST['duongdananh'];
						$add= "insert into duantrienkhai(name, linkimg, location)values('".$name."', '".$diachi."','".$duongdananh."')";
						$ra=execsql($add);
						if($ra!= null){
							?>
							<div style="width: 100%; text-align: center; font-size: 20px; color:#e74c3c">
								Dự án đã được thêm thành công
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
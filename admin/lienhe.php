<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<title>Quản lý liên hệ</title>
	<link rel="icon" href="../img/Logo.png" type="image/icon type">
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">

	<link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/Features-Boxed.css">
	<link rel="stylesheet" href="assets/css/styles.css">
<!-- 	<link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
	<link rel="stylesheet" href="assets/css/smoothproducts.css"> -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>

</head>
<style>
	.clean-block.clean-hero:before {
		content: none;
	}
	.features-boxed .item .box {
		background-color: #ecf0f1;
	}

	table {
		font-family: arial, sans-serif;
		border-collapse: collapse;
		width: 100%;
	}

	td, th {
		border: 1px solid #dddddd;
		text-align: left;
		padding: 8px;
		text-align: center;
	}

	tr:nth-child(even) {
		background-color: #dddddd;
		text-align: center;
	}

</style>
<body ng-app="myApp" ng-controller="namesCtrl">
	<?php 
	include 'menuTop.php';
	include 'connect.php';
	?>
	<main class="page landing-page">

		<section class="clean-block clean-hero" style="background-image:url(../img/backgroundHome.jpg);">
			<div class="features-boxed" style="width: 60%; background-color: transparent; ">
				<div class="row justify-content-center features">
					<input type="" name="" ng-model="first" style="width: 70%" placeholder="Tìm kiếm liên hệ">
					<div style="background-color: #F8FAD5; width: 100%; height: auto;">
						<table>
							<tr>
								<td>Họ và tên</td>
								<td>Địa chỉ</td>
								<td>Điện thoại</td>
								<td>Gmail</td>
								<td>Mục đích gửi</td>
								<td>Tiêu đề</td>
								<td>Nội dung</td>
								<td>Ngày liên hệ</td>
							</tr>
							<?php 
							$sql = "Select * from contact";
							$cats = query($sql);
							$myJSON=json_encode($cats);  
							?>
							<script>
								angular.module('myApp', []).controller('namesCtrl', function($scope) {
									$scope.names = <?=$myJSON?>
								});
							</script>

							<tr ng-repeat="x in names | filter : first">
								<td>{{ x[1] }}</td>
								<td>{{ x[2] }}</td>
								<td>{{ x[3] }}</td>
								<td>{{ x[4] }}</td>
								<td>{{ x[5] }}</td>
								<td>{{ x[6] }}</td>
								<td>{{ x[7] }}</td>
								<td>{{ x[8] }}</td>
							</tr>


					</table>
				</div>
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
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<title>Quản lý dự án triển khai</title>
	<link rel="icon" href="../img/Logo.png" type="image/icon type">
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">

	<link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/Features-Boxed.css">
	<link rel="stylesheet" href="assets/css/styles.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
</style>
<body ng-app="myApp" ng-controller="namesCtrl">
	<?php 
	include 'menuTop.php';
	include 'connect.php';
	?>
	<?php 
	if(isset($_GET['id']))
	{
		$id=$_GET['id'];
		$sql="delete from duantrienkhai where id='".$id."'";
		$rs=execsql($sql);
		if($rs != null){
			echo "Dự án đã được xóa thành công";
		}
		else{
			echo "Try again";
		}
	}
	?>
	<main class="page landing-page">
		<section class="clean-block clean-hero" style="background-image:url(../img/backgroundHome.jpg);">
			<div class="features-boxed" style="width: 60%; background-color: transparent; ">
				<div class="row justify-content-center features">
					<input type="" name="" ng-model="first" style="width: 70%" placeholder="Tìm kiếm dự án triển khai">
					<div class="container">
						<div class="row">
							<div class="col-lg-12 col-md-12">
								<a href="addduan.php" title="" style="float: right;"><i class="material-icons" style="font-size:48px;color:red">add_circle_outline</i></a>
							</div>





							<div class="col-lg-12 col-md-12">
								<form action="duantrienkhai.php" method="get" accept-charset="utf-8">
									<table class="tableduan">
										<tr class="trduan">
											<td class="tdduan" style="width: 15%;">Địa chỉ</td>
											<td class="tdduan" style="width: 25%;">Tên dự án</td>
											<td class="tdduan" style="width: 40%;">Đường dẫn ảnh</td>
											<td colspan="2" class="tdduan" style="width: 20%;">Action</td>
										</tr>
										<?php 
										
										$sql = "Select * from duantrienkhai";
										$cats = query($sql);
										for($i=0; $i<count($cats); $i++)
										{
											?>
											<tr class="trduan" ng-repeat="x in names | filter : first">
												<td class="tdduan"><div><?=$cats[$i][3]?></div> </td>
												<td class="tdduan"><div><?=$cats[$i][1]?></div></td>
												<td class="tdduan"><textarea style="width: 100%;"><?=$cats[$i][2]?></textarea></td>
												<td class="tdduan"><a href="updateduantrienkhai.php?id=<?=$cats[$i][0]?>" title="" style="font-size: 20px; color: #e74c3c; background-color: #ecf0f1"><b>Update</b></a></td>
												<td class="tdduan"><a href="duantrienkhai.php?id=<?=$cats[$i][0]?>" title="" style="font-size: 20px; color: #e74c3c; background-color: #ecf0f1"><b>Delete</b></a></td>
											</tr>
											<?php 
										}
										?>

									</table>
								</form>
							</div>

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
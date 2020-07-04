<!DOCTYPE html>
<html>

<head>
	<meta>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<title>Home - Brand</title>
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
	include 'menutop.php';
	include 'connect.php';
	?>
	<main class="page landing-page">
		<section class="clean-block clean-hero" style="background-image:url(../img/backgroundHome.jpg);">
			<div class="container">
				<div class="row">
					<h4 style="width: 100%; text-align: center;">Cập nhật dự án</h4><br><br>
					<br>
					<?php 
					if(isset($_POST['id'])&&isset($_POST['admin_name'])&&isset($_POST['admin_password'])&&isset($_POST['status']))
					{
						$id=$_POST['id'];
						$admin_name=$_POST['admin_name'];
						$admin_password=$_POST['admin_password'];
						$admin_password = md5($admin_password);
						$status=$_POST['status'];
						$add= "update app_user set user_id = '".$id."', user_name = '".$admin_name."', encryted_password ='".$admin_password."',enabled ='".$status."' where user_id ='" . $id. "'";
						$ra=execsql($add);
						if($ra!= null){
							echo "Category has update successfully!";
							header("Location: ./updateaccount.php");
						}
						else
						{
							echo "Try again";
						}
					}
					?>
					<?php 
					if(isset($_GET['id']))
					{
						$id=$_GET['id'];
						$sql = "Select * from app_user where user_id='".$id."'";
						$cats = query($sql);
						for($i=0; $i<count($cats); $i++)
						{
							?>
							<table style="width:100%">
								<form action="updateaccount.php" method="POST" accept-charset="utf-8">
									<tr>
										<td><div class="textlienhe" >ID :</div></td>
										<td><input type="text" name="id" style="width: 80%" value="<?=$cats[$i][0]?>" readonly></td>
									</tr>
									<tr>
										<td><div class="textlienhe">User name :</div></td>
										<td><input type="text" name="admin_name" style="width: 80%" value="<?=$cats[$i][1]?>"></td>
									</tr>
									<tr>
										<td><div class="textlienhe">Password :</div></td>
										<td><input type="text" name="admin_password" style="width: 80%" value="<?=$cats[$i][2]?>"></td>
									</tr>
									<tr>
										<td><div class="textlienhe">Trạng thái :</div></td>
										<td>									
											<select size="1" style="font-size:14pt" name="status" id="cbopurpose">
												<option value="1">Kích hoạt</option>
												<option value="0">Không kích hoạt</option>
											</select></td>
										</tr>
										<tr>
											<td colspan="2" style="text-align: center;"><input type="submit" name="" value="Cập nhật"></td>
										</tr>
									</form>
								</table>
								<?php 
							}

						}

						else{
							header("Location: ./selectaccount.php");
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
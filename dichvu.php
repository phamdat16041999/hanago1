<!DOCTYPE html>
<html>
<head>
	<title>Dịch vụ</title>
	<link rel="icon" href="img/Logo.png" type="image/icon type">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body style="height: auto;">
	
	<div class="container">
		<div class="row">
			<div class="col-sm-2">
				<a href="index.php" title=""><img src="img/Logo.png" alt="" style="width: 100%; height: auto;"></a>
			</div>
			<div class="col-sm-10" >
				<h2 style="text-align: center; width: 80%; font-weight: 500;margin-top: 3%; margin-left: 10%;">Công ty cổ phần HANAGO quốc tế</h2>
			</div>
		</div>
	</div>



	<div class="container">
		<div class="row" style=" border-radius: 30px; border-style: solid;">
			<?php 
			include 'menuLeft.php';
			?>

			<div class="col-lg-9 col-md-9" id="boderright">
				<div>
					<?php 
					include 'menuTop.php';
					?>


				</div>	
				<div style="margin-top: 10px; margin-bottom: 10px;">
					<?php 
						$name=$_GET['name'];
					 ?>
					 <img src="img/dichvu/<?=$name?>" alt="" style="width: 100%; height: auto;">
					
						
				</div>

			</div>



		</div>
		<!-- phan lien he  -->
	<?php 
	include 'endpage.php';
	?>

	</body>
	</html>
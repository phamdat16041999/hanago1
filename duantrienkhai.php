<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<style>
	body, html {
		height: auto;
	}
</style>
<body>	
	<?php 
	include 'connect.php';
	?>
	<div class="container">
		<div class="row">
			<div class="col-sm-2">
				<a href="index.php" title=""><img src="img/Logo.png" alt="" style="width: 100%; height: auto;"></a>
			</div>
			<div class="col-sm-10" >
				<h2 style="text-align: center; width: 80%; font-weight: 500; margin-top: 3%; margin-left: 10%;">Công ty cổ phần HANAGO quốc tế</h2>
			</div>
		</div>
	</div>



	<div class="container">
		<div class="row" style=" border-radius: 30px; border-style: solid;">
			<?php 
			include 'menuLeft.php';
			?>

			<div class="col-lg-9 col-md-9" id="boderright">
				<div class="row">
					<div class="col-lg-12 col-md-12">						
						<?php 
						include 'menuTop.php';
						?>
					</div>
					
					<?php 
					$sql = "Select * from duantrienkhai";
					$cats = query($sql);
					for($i=0; $i<count($cats); $i++)
					{
						?>
						<div class="col-lg-6 col-md-12" style="margin-top: 15px">
							<div class="project">
								<img src="<?=$cats[$i][2]?>" alt="Avatar" class="imageProject">
								<div class="overlay">
									<div class="textproject" ><?=$cats[$i][1]?></div>
								</div>

							</div>
						</div>
						<?php 
					}
					?>



				</div>
			</div>	

		</div>
		<!-- phan lien he  -->
		<?php 
		include 'endpage.php';
		?>
	</div>



</body>
</html>
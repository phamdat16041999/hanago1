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
	<style type="text/css">
		#btnService.activeLorem{
			display: none;
		}
		.demo20.toggle{
			display: none;
		}
		.owl{
			margin-top: 5%; margin-left: 2%;margin-right: 2%;
		}
		@media screen and (max-width: 1024px) {
			.owl{
				margin-top: 7%; margin-left: 3%;margin-right: 3%;
			}
		}

	</style>
</head>
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
				<div class="col-lg-12 col-md-12">
					<?php 
					include 'menuTop.php';
					?>
				</div>
				<div class="col-lg-12 col-md-12">

					<div style="margin-top: 100px; margin-bottom: -50px;">
						<div class="slideshow-container">

							<div class="mySlides fade">
								<div class="numbertext">1 / 3</div>
								<img src="img/2.jpg" class="imghome">

							</div>

							<div class="mySlides fade">
								<div class="numbertext">2 / 3</div>
								<img src="img/3.jpg" class="imghome">

							</div>

							<div class="mySlides fade">
								<div class="numbertext">3 / 3</div>
								<img src="img/4.jpg" class="imghome">

							</div>
							<div style="  position: relative;bottom: 38px;left: 0px;">
								<div style="width: 100%;">
									<th:block th:include="a"></th:block>
								</div>
							</div>
						</div>
						<br>

						<div style="text-align:center">
							<span class="dot" style="display: none;"></span> 
							<span class="dot" style="display: none;"></span> 
							<span class="dot" style="display: none;"></span> 
						</div>

						<script>
							var slideIndex = 0;
							showSlides();

							function showSlides() {
								var i;
								var slides = document.getElementsByClassName("mySlides");
								var dots = document.getElementsByClassName("dot");
								for (i = 0; i < slides.length; i++) {
									slides[i].style.display = "none";  
								}
								slideIndex++;
								if (slideIndex > slides.length) {slideIndex = 1}    
									for (i = 0; i < dots.length; i++) {
										dots[i].className = dots[i].className.replace(" active", "");
									}
									slides[slideIndex-1].style.display = "block";  
									dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
</div>
</div>


<div class="col-lg-12 col-md-12">
	<div class="owl"> 	
		<?php 
		include 'owl.php';
		?>
	</div>
	<div style="width: 100%; height: 20px;"></div>
</div>




<div class="demo20 toggle">
	<?php 
	include 'endpage.php';
	?>
</div>





<script>
	$(document).ready(function () {

		$('#btnService').on('mouseover', function () {
			console.log('btn-service')
			$("#copyright").toggle()
			$(".demo20").toggleClass("toggle")
		});
		$('#btnService').on('mouseout', function () {
			console.log('btn-service')
			$("#copyright").toggle()
			$(".demo20").toggleClass("toggle")
		});

	});
</script>



</div>



</div>
<div id="copyright" class="activeLorem">
	

	<?php 
	include 'endpage.php';
	?>
</div>

</body>
</html>
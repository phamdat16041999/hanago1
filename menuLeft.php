<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		#nav1{
			position: relative;
			margin-bottom: 30px;
			margin: 0;
		}
		#nav1 li.list {
			display: block;
			float: none;
		}
		#nav1 li.list .heading{
			background: #CC681D;
			font-size: 20px;
			padding: 8px 0 8px 15px;

		}

		#nav1 li.list a {
			display: block;
			float: none;
			text-decoration: none;
			color: white;
			font-size: 12px;
			font-weight: bold;
			padding-left: 20px;
			background: #636e72;
			letter-spacing: 4px;
		}

		#nav1 li.list ul.head {
			display: block;
			position: relative;
			margin: 0;
			background: #2c632c;
		}

		#nav1 li.list ul.head li a{
			padding: 10px;
			margin: 0;
		}
		#nav1 li.list ul.head li a:hover {
			background: #2c8493;
		}

		.head li {
			display: block;
			float: none;
		}
		#nav1 li.list ul.head{
			display: none;

		}
		@media only screen and (max-width: 1280px) {
			#nav1 li.list .heading{
				font-size: 15px;

			}
		}
	</style>
</head>
<body>
	<div class="col-lg-3 col-md-3" style="background-color: #CC681D; border-top-left-radius:20px; padding: 10px; border-bottom-left-radius: 20px; overflow-x: hidden;">
		<div class="row" style="margin-top: 40px">
			<div class="col-lg-12 col-md-12">
				<ul id="nav1">
					<li class="list" id="btnService"><a href="#" class="heading">Dịch vụ</a>
						<ul class="head">
							<li><a href="dichvu.php?name=dichvu1.png" title="" class="textContent">- Thi công công trình dân dụng, công nghiệp</a></li>
							<li><a href="dichvu.php?name=dichvu2.png" title="" class="textContent">- Thi công công trình giao thông, Thủy Lợi</a></li>
							<li><a href="dichvu.php?name=dichvu3.png" title="" class="textContent">- Thi công công trình hạ tầng kỹ thuật</a></li>
							<li><a href="dichvu.php?name=dichvu4.png" title="" class="textContent">- Tư vấn giám sát công trình dân dụng, công nghiệp</a></li>
							<li><a href="dichvu.php?name=dichvu5.png" title="" class="textContent">- Tư vấn giám sát công trình giao thông, Thủy Lợi</a></li>
						</ul>
					</li>
					<li class="list" id="btnService"><a href="duantrienkhai.php" class="heading">Dự án triển khai</a>
					</li>

				</ul>
			</div>
					<div class="col-lg-12" style="text-align: center;margin-top: 50px;">
						<div>
							<img src="img/hotline.png" alt="" style="max-width: 100%; height: 75px;">
						</div>
					</div>
				</div>
			</div>
			<script>
				$(document).ready(function() {
					$("#nav1 .list").hover(
						function() {
							
							$(this).find('.head').slideDown(0);
						},
						function() {
							$(this).find('.head').slideUp(0);
						});
				});
			</script>
		</body>
		</html>
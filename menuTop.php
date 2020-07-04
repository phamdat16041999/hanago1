<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		<div class="topnav" id="myTopnav">
			<a href="index.php" class="active">Trang chủ</a>
			<a href="vechungtoi.php">Về chúng tôi</a>
			<a href="lienhe.php">Liên hệ</a> 
			<a href="login.php">Quản trị viên</a>
			<a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
		</div>


		<script>
			function myFunction() {
				var x = document.getElementById("myTopnav");
				if (x.className === "topnav") {
					x.className += " responsive";
				} else {
					x.className = "topnav";
				}
			}
		</script>
</body>
</html>
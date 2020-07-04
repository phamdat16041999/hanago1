<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
	session_start();
	if (!isset($_SESSION['username'])) {
		header('Location: ../login.php');
	}
	else{
		?>
		<nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
			<div class="container"><a class="navbar-brand logo" href="admin.php"><h1 style="color: #3498db"><b>Hanago</b></h1></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
				<div class="collapse navbar-collapse"
				id="navcol-1">
				<ul class="nav navbar-nav ml-auto">
					<li class="nav-item" role="presentation"><a class="nav-link active" href="admin.php">Trang chủ</a></li>
					<li class="nav-item" role="presentation"><a class="nav-link" href="duantrienkhai.php">Dự án triển khai</a></li>
					<li class="nav-item" role="presentation"><a class="nav-link" href="lienhe.php">Quản lý liên hệ</a></li>
					<li class="nav-item" role="presentation"><a class="nav-link" href="selectaccount.php">quản lý tài khoản</a></li>
					<li class="nav-item" role="presentation"><a class="nav-link" href="logout.php">Đăng xuất</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<?php 
}
?>

</body>
</html>
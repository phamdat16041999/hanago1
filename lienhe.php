<!DOCTYPE html>
<html xmlns:th="http://www.thymeleaf.org">
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
				<h2 style="text-align: center; width: 80%; font-weight: 500; margin-top: 3%; margin-left: 10%;">CÔNG TY CỔ PHẦN HANAGO QUỐC TẾ</h2>
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

				<div style="margin-top: 100px; margin-bottom: 10px;">
					<table style="width:100%; border: 1px solid black; background-color: #F8FAD5;">
						<tr>
							<th colspan="2">
								<h3 style="margin-top: 20px; text-align: center;">CÔNG TY CỔ PHẦN HANAGO QUỐC TẾ</h3>
								<div class="textlienhe">
									- Địa chỉ: Ô111, Lô A, KĐT Đại Kim - Định Công, 
									Phường Định Công, Quận Hoàng Mai, TP. Hà Nội
								</div>
								<div class="textlienhe">
									- Tel: 02462.594.592
								</div>
								<div class="textlienhe">
									- Fax: 0243.6413.412
								</div>

							</th>
						</tr>
						<form method="POST" action="lienhe.php">
							<tr>
								<td><div class="textlienhe">Họ và tên :</div></td>
								<td><input type="text" name="hoten" style="width: 80%"></td>
							</tr>
							<tr>
								<td><div class="textlienhe">Địa chỉ :</div></td>
								<td><input type="text" name="diachi" style="width: 80%"></td>
							</tr>
							<tr>
								<td><div class="textlienhe">Số điện thoại:</div></td>
								<td><input type="text" name="phone" style="width: 80%"></td>
							</tr>
							<tr>
								<td><div class="textlienhe">Email :</div></td>
								<td><input type="text" name="email" style="width: 80%"></td>
							</tr>
							<tr>
								<td><div class="textlienhe">Mục đích gửi:</div></td>
								<td>									
									<select size="1" style="font-size:14pt" name="mucdichgui" id="cbopurpose">
										<option value="Hỗ trợ khách hàng">Hỗ trợ khách hàng</option>
										<option value="Góp ý">Góp ý</option>
									</select>
								</td>
							</tr>
							<tr>
								<td><div class="textlienhe">Tiêu để gửi :</div></td>
								<td><input type="text" name="tieude" style="width: 80%"></td>
							</tr>
							<tr>
								<td><div class="textlienhe">Nội dung gửi :</div></td>
								<td><textarea name="noidung" style="width: 80%; overflow: auto;height: 200px"></textarea></td>
							</tr>
							<tr>
								<tr>
									<td><div class="textlienhe">Ngày gửi :</div></td>
									<td>	<input type="text" name="ngaygui" id="myDate" readonly="true" style="width: 80%"></td>
									<script>
										var today = new Date();
										var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
										document.getElementById("myDate").value = date;
									</script>

								</tr>
								<tr>
									<td colspan="2" style="text-align: center;"><input type="submit" name="" value="Đồng ý gửi"></td>
								</tr>
							</form>
						</table>

						<?php 
						if(isset($_POST['hoten'])&&isset($_POST['diachi'])&&isset($_POST['phone'])&&isset($_POST['email'])&&isset($_POST['mucdichgui'])&&isset($_POST['tieude'])&&isset($_POST['noidung'])&&isset($_POST['ngaygui']))
						{
							$hoten=$_POST['hoten'];
							$diachi=$_POST['diachi'];
							$phone=$_POST['phone'];
							$email=$_POST['email'];
							$mucdichgui=$_POST['mucdichgui'];
							$tieude=$_POST['tieude'];
							$noidung=$_POST['noidung'];
							$ngaygui=$_POST['ngaygui'];
							$hoten = strip_tags($hoten);
							$hoten = addslashes($hoten);
							$diachi = strip_tags($diachi);
							$diachi = addslashes($diachi);
							$phone = strip_tags($phone);
							$phone = addslashes($phone);
							$email = strip_tags($email);
							$email = addslashes($email);
							$mucdichgui = strip_tags($mucdichgui);
							$mucdichgui = addslashes($mucdichgui);
							$tieude = strip_tags($tieude);
							$tieude = addslashes($tieude);
							$noidung = strip_tags($noidung);
							$noidung = addslashes($noidung);
							$ngaygui = strip_tags($ngaygui);
							$ngaygui = addslashes($ngaygui);
							if (($hoten==null)or($diachi==null)or($phone==null)or($email==null)or($mucdichgui==null)or($tieude==null)or($noidung==null)) {
								?>
								<div style="width: 100%; text-align: center; font-size: 20px; color:#ecf0f1">
									Vui lòng cung cấp cho chúng tôi đầy đủ thông tin bạn cần liên hệ
								</div>
								<?php 
							}
							else{
								$add= "insert into contact(hoten, diachi, dienthoai, email, mucdichgui, tieudegui, noidung, ngay) values ('".$hoten."', '".$diachi."','".$phone."', '".$email."', '".$mucdichgui."','".$tieude."', '".$noidung."','".$ngaygui."')";
								$ra=execsql($add);
								if($ra!= null){
									?>
									<div style="width: 100%; text-align: center; font-size: 20px; color:#ecf0f1">
										Yêu cầu của bạn đã được gửi thành công
									</div>
									<?php 
								}
								else
								{
									?>
									<div style="width: 100%; text-align: center; font-size: 20px; color:#ecf0f1">
										Có lỗi xảy ra, vui lòng thử lại
									</div>
									<?php 
								}
							}

						}

						?>

					</div>

				</div>


			</div>
			<!-- phan lien he  -->

			<?php 
			include 'endpage.php';
			?>

		</body>
		</html>
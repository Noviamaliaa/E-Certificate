
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
	<title>Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Minimal Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<link href="../assets/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
	<!-- Custom Theme files -->
	<link href="../assets/css/style.css" rel='stylesheet' type='text/css' />
	<link href="../assets/css/font-awesome.css" rel="stylesheet"> 
	<script src="../assets/js/jquery.min.js"> </script>
	<script src="../assets/js/bootstrap.min.js"> </script>
</head>
<body>
	
	<div class="login">
		<!-- <h1><a href="index.html">Sertifikat </a></h1> -->
		<div class="login-bottom">
			<h2>Login</h2>
			<?php 
			if(isset($_GET['pesan'])){
				if($_GET['pesan'] == "gagal"){
					echo "<div class='alert alert-danger' role='alert'>Usernam atau password salah</div>";
				}else if($_GET['pesan'] == "logout"){
					echo "<div class='alert alert-success' role='alert'>Anda sudah logout</div>";
				}else if($_GET['pesan'] == "login"){
					echo "<div class='alert alert-danger' role='alert'>Anda harus login dulu</div>";
				}
			}
			?>
			<form method="POST" action="../DB/Login.php">
				<div class="login-mail">
					<i class="fa fa-user"></i>
					<input type="text" placeholder="Username" name="username" required="">
				</div>
				<div class="login-mail">
					<i class="fa fa-lock"></i>
					<input type="password" placeholder="Password" name="password" required="">
				</div>
				<div class=" login-do">
					<label class="hvr-shutter-in-horizontal login-sub">
						<input type="submit" value="login">
					</label>
				</div>

				<div class="clearfix"> </div>
			</form>
		</div>
	</div>
<?php
session_start();
?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Minimal Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<link href="assets/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
	<!-- Custom Theme files -->
	<link href="assets/css/style.css" rel='stylesheet' type='text/css' />
	<link href="assets/css/font-awesome.css" rel="stylesheet"> 
	<script src="assets/js/jquery.min.js"> </script>
	<script src="assets/js/bootstrap.min.js"> </script>

	<!-- Mainly scripts -->
	<script src="assets/js/jquery.metisMenu.js"></script>
	<script src="assets/js/jquery.slimscroll.min.js"></script>
	<!-- Custom and plugin javascript -->
	<link href="assets/css/custom.css" rel="stylesheet">
	<script src="assets/js/custom.js"></script>
	<script src="assets/js/screenfull.js"></script>
	<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}

			

			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});
			

			
		});
	</script>

   <!--scrolling js-->
   <script src="assets/js/jquery.nicescroll.js"></script>
   <script src="assets/js/scripts.js"></script>
</head>
<body class="container">
	<?php
	if (!isset($_SESSION['status'])) {
		 header("location:form/Login.php?pesan=login");
	}
	?>
	<div id="wrapper">
		<!-- Menu -->
		<nav class="navbar-default navbar-static-top" role="navigation">
			<!-- Top Bar -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<h1> <a class="navbar-brand" href="index.html">Sertifikat</a></h1>         
			</div>
			<div class="full-left">
				<form class=" navbar-left-right">
					<input type="text"  value="Search..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search...';}">
					<input type="submit" value="" class="fa fa-search">
				</form>
				<div class="clearfix"> </div>
			</div>
			<div class="drop-men" >
				<ul class="nav_1">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle dropdown-at" data-toggle="dropdown"><span class=" name-caret"><?php echo $_SESSION['username'];?><i class="caret"></i></span><img src="assets/images/logouin3.jpg"></a>
						<ul class="dropdown-menu " role="menu">
							<li><a href="profile.php"><i class="fa fa-user"></i>Profile</a></li>
							<li><a href="DB/logout.php"><i class="fa fa-sign-out"></i>Logout</a></li>
						</ul>
					</li>

				</ul>
			</div>
			<!-- /.navbar-collapse -->
			<div class="clearfix"></div>
			<!-- Side Menu -->
			<div class="navbar-default sidebar" role="navigation">
				<div class="sidebar-nav navbar-collapse">
					<ul class="nav" id="side-menu">
						<li>
							<a href="index.php" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label">Dashboards</span> </a>
						</li>
						<li>
							<a href="Mahasiswa.php" class=" hvr-bounce-to-right"><i class="fa fa-user nav_icon "></i><span class="nav-label">Data Mahasiswa</span> </a>
						</li><li>
							<a href="Dosen.php" class=" hvr-bounce-to-right"><i class="fa fa-user nav_icon "></i><span class="nav-label">Data Dosen</span> </a>
						</li>

						<li>
							<a href="Jurusan.php" class=" hvr-bounce-to-right"><i class="fa fa-user nav_icon "></i><span class="nav-label">Jurusan</span> </a>
						</li>
						<li>
							<a href="#" class=" hvr-bounce-to-right"><i class="fa fa-list nav_icon"></i> <span class="nav-label">Sertifikat</span><span class="fa arrow"></span></a>
							<ul class="nav nav-second-level collapse">
								<li><a href="form.php?print" class=" hvr-bounce-to-right"><i class="fa fa-print nav_icon"></i>Print Sertifikat</a></li>
								<li><a href="sertifikat.php" class=" hvr-bounce-to-right"><i class="fa fa-file nav_icon"></i>Data Sertifikat</a></li>
								<!-- <li><a href="sertifikat2.php" class=" hvr-bounce-to-right"><i class="fa fa-file nav_icon"></i>Data Sertifikat2</a></li> -->
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		
       	<div class="clearfix"> </div>
       	<div id="page-wrapper" class="gray-bg dashbard-1">
       		<!-- content -->



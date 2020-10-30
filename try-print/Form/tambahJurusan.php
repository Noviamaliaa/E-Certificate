<!-- header -->
<?php include 'layout/header.php';?>

<!-- page -->
	<div class="content-main">
		<!--banner-->	
		<div class="banner">
			<h2>
				<a href="index.php">Beranda</a>
				<i class="fa fa-angle-right"></i>
				<a href="Mahasiswa.php">Jurusan</a>
				<i class="fa fa-angle-right"></i>
				<span>Tambah Data</span>
			</h2>
		</div>
		<div class="blank">
			<div class="blank-page">
				<div class="grid-form1">
					<h3 id="forms-example" class="">Tambah Data Jurusan</h3>
					<form method="GET" action="form/sertifikat.php" target="_blank">
						<div class="form-group">
							<label for="exampleInputEmail1">NIM</label>
							<input type="text" class="form-control" name="nim" placeholder="">	
						</div>
						<button type="submit" class="btn btn-default"><i class="fa fa-print"></i> Print</button>
						</div>

					</form>
				</div>
			</div>
		</div>

	</div>	
</div>

<!-- footer -->
<?php include 'layout/footer.php';?>


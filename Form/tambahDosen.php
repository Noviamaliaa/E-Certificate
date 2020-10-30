<!-- header -->
<?php include 'layout/header.php';?>

<!-- page -->
	<div class="content-main">
		<!--banner-->	
		<div class="banner">
			<h2>
				<a href="index.php">Beranda</a>
				<i class="fa fa-angle-right"></i>
				<a href="Mahasiswa.php">Dosen</a>
				<i class="fa fa-angle-right"></i>
				<span>Tambah Data</span>
			</h2>
		</div>
		<div class="blank">
			<div class="blank-page">
				<div class="grid-form1">
					<h3 id="forms-example" class="">Tambah Data Dosen</h3>
					<form method="POST" action="DB/tambahDosen.php">
						<div class="form-group">
							<label for="exampleInputEmail1">NIP</label>
							<input type="text" class="form-control" name="nip" placeholder="">	
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Nama</label>
							<input type="text" class="form-control" name="nama" placeholder="">	
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Gelar</label>
							<input type="text" class="form-control" name="gelar" placeholder="">	
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Prodi</label>
							<input type="text" class="form-control" name="prodi" placeholder="">	
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Status</label>
							<input type="text" class="form-control" name="status" placeholder="">	
						</div>
						<button type="submit" class="btn btn-default"><i class="fa fa-file"></i> Simpan</button>
						</div>

					</form>
				</div>
			</div>
		</div>

	</div>	
</div>

<!-- footer -->
<?php include 'layout/footer.php';?>


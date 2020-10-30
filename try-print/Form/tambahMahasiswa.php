<!-- header -->
<?php 
include 'layout/header.php';
include 'DB/connect-db.php';
?>

<!-- page -->
	<div class="content-main">
		<!--banner-->	
		<div class="banner">
			<h2>
				<a href="index.php">Beranda</a>
				<i class="fa fa-angle-right"></i>
				<a href="Mahasiswa.php">Mahasiswa</a>
				<i class="fa fa-angle-right"></i>
				<span>Tambah Data</span>
			</h2>
		</div>
		<div class="blank">
			<div class="blank-page">
				<div class="grid-form1">
					<h3 id="forms-example" class="">Tambah Data Mahasiswa</h3>
					<form method="POST" action="DB/tambahMahasiswa.php">
						<div class="form-group">
							<label for="exampleInputEmail1">NIM</label>
							<input type="text" class="form-control" name="nim" placeholder="">	
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Nama</label>
							<input type="text" class="form-control" name="nama" placeholder="">	
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">angkatan</label>
							<input type="text" class="form-control" name="angkatan" placeholder="">	
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Jurusan</label>
							<input type="text" class="form-control" name="jurusan" placeholder="">	
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Tempat Lahir</label>
							<input type="text" class="form-control" name="tempatlahir" placeholder="">	
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Tanggal Lahir</label>
							<input type="text" class="form-control" name="tanggallahir" placeholder="">	
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


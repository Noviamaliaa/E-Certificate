<!-- header -->
<?php include 'layout/header.php';?>

<!-- page -->
	<div class="content-main">
		<!--banner-->	
		<div class="banner">
			<h2>
				<a href="index.php">Beranda</a>
				<i class="fa fa-angle-right"></i>
				<a href="Mahasiswa.php">Sertifikat</a>
				<i class="fa fa-angle-right"></i>
				<span>Tambah Data</span>
			</h2>
		</div>
		<div class="blank">
			<div class="blank-page">
				<div class="grid-form1">
					<h3 id="forms-example" class="">Tambah Data Sertifikat</h3>
					<form method="POST" action="DB/tambahSertifikat.php">
						<div class="form-group">
							<label for="exampleInputEmail1">Nomor Sertifikat</label>
							<input type="text" class="form-control" name="nomor" placeholder="">	
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Nomor Seri Sertifikat</label>
							<input type="text" class="form-control" name="nomorseri" placeholder="">	
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Mahasiswa</label>
							<input type="text" class="form-control" name="nim" placeholder="NIM">	
						</div>
						<!-- <div class="form-group">
							<label for="exampleInputEmail1">tempat</label>
							<input type="text" class="form-control" name="tempatlahir" placeholder="tempatlahir">	
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Tanggal Lahir</label>
							<input type="text" class="form-control" name="tanggallahir" placeholder="000-00-00">	
						</div> -->
						<div class="form-group">
							<label for="exampleInputEmail1">Pembimbing</label>
							<input type="text" class="form-control" name="dosen" placeholder="NIP Dosen">	
							
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Tahun</label>
							<input type="text" class="form-control" name="tahun" placeholder="">	
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Tanggal Sidang</label>
							<input type="date" class="form-control" name="tgl_sidang" placeholder="">	
						</div>
						<!-- <div class="form-group">
							<form action="sertifikat.php" method="POST"></form>
							<label form="exampleInputEmail1">Nama Gelar</label>
							<div class="row">
			              	 <div class="col m8 s12">
			                  <select class="browser-default" name="gelar" id="gelar">
			                     <option value="" disabled selected>-- Gelar --</option>         
			                     <option >Sarjana Teknik (S.T)</option>         
			                     <option >Sarjana Science (S.Si)</option>         
                  </select>
               </div>
            </div> -->
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


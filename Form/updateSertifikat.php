<!-- header -->
<?php 
include 'layout/header.php';
include 'DB/connect-db.php';

$nim = $_GET['id'];
$result = mysqli_query($connect,"select * FROM sertifikat where mahasiswa=$nim")->fetch_object();
?>

<!-- page -->
	<div class='content-main'>
		<!--banner-->	
		<div class='banner'>
			<h2>
				<a href='index.php'>Beranda</a>
				<i class='fa fa-angle-right'></i>
				<a href='Mahasiswa.php'>Sertifikat</a>
				<i class='fa fa-angle-right'></i>
				<span>Update Data</span>
			</h2>
		</div>
		<div class='blank'>
			<div class='blank-page'>
				<div class='grid-form1'>
					<h3 id='forms-example' class=''>Update Data Sertifikat</h3>
					<form method='POST' action='DB/updateSertifikat.php' >
						<div class='form-group'>
							<label for='exampleInputEmail1'>Nomor Sertifikat</label>
							<?php
							echo "<input type='text' class='form-control' name='nomor' placeholder='' value='$result->nomorsertifikat'>	";
							?>
							
						</div>
						<div class='form-group'>
							<label for='exampleInputEmail1'>Nomor Seri Sertifikat</label>
							<?php
							echo "<input type='text' class='form-control' name='nomorseri' placeholder='' value='$result->nomorserisertifikat'>	";
							?>	
						</div>
						<div class='form-group'>
							<label for='exampleInputEmail1'>Mahasiswa</label>
							<?php
							echo "<input type='text' class='form-control' name='nim' placeholder='NIM' value='$result->mahasiswa'>		";
							?>
						</div>
						<!-- <div class="form-group">
							<label for="exampleInputEmail1">tempat</label>
							<input type="text" class="form-control" name="tempatlahir" placeholder="tempat lahir">	
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Tanggal Lahir</label>
							<input type="text" class="form-control" name="tanggallahir" placeholder="000-00-00">	
						</div> -->
						<div class='form-group'>
							<label for='exampleInputEmail1'>Pembimbing</label>
							<?php
							echo "<input type='text' class='form-control' name='dosen' placeholder='NIP Dosen' value='$result->signed'>		";
							?>
						</div>
						<div class='form-group'>
							<label for='exampleInputEmail1'>Tahun</label>
							<?php
							echo "<input type='text' class='form-control' name='tahun' placeholder='' value='$result->tahun'>		";
							?>
						</div>
						<!-- <div class='form-group'>
							<label for='exampleInputEmail1'>Gelar</label>
							<?php
							echo "<input type='text' class='form-control' name='nama_gelar' placeholder='Nama gelar' value='$result->signed'>		";
							?>
						</div> -->
						<button type='submit' class='btn btn-default'><i class='fa fa-file'></i> Simpan Perubahan</button>
						</div>

					</form>
				</div>
			</div>
		</div>

	</div>	
</div>

<!-- footer -->
<?php include 'layout/footer.php';?>


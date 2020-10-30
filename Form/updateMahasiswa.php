<!-- header -->
<?php 
include 'layout/header.php';
include 'DB/connect-db.php';

$nim = $_GET['id'];
$result = mysqli_query($connect,"select * FROM mahasiswa where nim=$nim")->fetch_object();
?>

<!-- page -->
	<div class='content-main'>
		<!--banner-->	
		<div class='banner'>
			<h2>
				<a href='index.php'>Beranda</a>
				<i class='fa fa-angle-right'></i>
				<a href='Mahasiswa.php'>Mahasiswa</a>
				<i class='fa fa-angle-right'></i>
				<span>Update Data</span>
			</h2>
		</div>
		<div class='blank'>
			<div class='blank-page'>
				<div class='grid-form1'>
					<h3 id='forms-example' class=''>Update Data Mahasiswa</h3>
					<form method='POST' action='DB/UpdateMahasiswa.php'>
						<div class='form-group'>
							<label for='exampleInputEmail1'>NIM</label>
							<?php
							echo "<input type='text' class='form-control' name='nim' placeholder='' value='$result->nim'>	";
							?>
							
						</div>
						<div class='form-group'>
							<label for='exampleInputEmail1'>Nama</label>
							<?php
							echo "<input type='text' class='form-control' name='nama' placeholder='' value='$result->namalengkap'>	";
							?>
							
						</div>
						<div class='form-group'>
							<label for='exampleInputEmail1'>angkatan</label>
							<?php
							echo "<input type='text' class='form-control' name='angkatan' placeholder='' value='$result->angkatan'>	";
							?>
							
						</div>
						<div class='form-group'>
							<label for='exampleInputEmail1'>Jurusan</label>
							<?php
							echo "<input type='text' class='form-control' name='jurusan' placeholder='' value='$result->jurusan'>	";
							?>
							
						</div>
						<div class='form-group'>
							<label for='exampleInputEmail1'>Tempat Lahir</label>
							<?php
							echo "<input type='text' class='form-control' name='tempatlahir' placeholder='' value='$result->tempatlahir'>	";
							?>
							
						</div>
						<div class='form-group'>
							<label for='exampleInputEmail1'>Tanggal Lahir</label>
							<?php
							echo "<input type='text' class='form-control' name='tanggallahir' placeholder='' value='$result->tanggallahir'>	";
							?>
							
						</div>
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

